<?php get_header(); ?>
<div class="container">
  <div class="row geek-multi-post">
    <main id="main">
      <section id="content">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <article>
            <h1 id="post-title">
              <span class="return-value">
                <?php $format = get_post_format(); 
                if($format != false) {
                  echo $format;
                } else {
                  echo "post";
                }
                ?>
              </span>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h1>
            <p class="post-bracket">{</p>
            <p class="post-info"><span class="post-info-title">updated</span> : <?php the_modified_date(''); ?> <?php the_modified_time(); ?>,</p>
            <p class="post-info"><span class="post-info-title">category</span> : [ <?php the_category(' ,'); ?> ],</p>
            <?php if(has_tag()) { ?>
            <p class="post-info"><span class="post-info-title">tags</span> : <?php the_tags('[ ',', ',' ]'); ?>,</p>
            <?php } ?>
            
            <div class="excerpt-wrapper">
              <p class="post-info excerpt"><span class="post-info-title">excerpt</span> : </p>
              <div class="excerpt-content"><?php the_excerpt(); ?></div>
            </div>
            <p class="post-bracket">}</p>
          </article>
        <?php endwhile; else: ?>
        <h2>미안해요, 글이 없네요</h2>
      <?php endif; ?>
      <!-- paging -->
      <nav id="paging">
        <?php
        global $wp_query;
        $big = 999999999;
        echo paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages,
          ) );
          ?>
        </nav>
      </section>
    </main>
  </div>
</div>
<?php get_footer(); ?>