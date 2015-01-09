<?php get_header(); ?>
<div class="container">
  <div id="multi-post" class="row">
    <div id="search-box"><?php get_search_form(); ?></div>
    <main id="main">
      <section id="content">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <article class="text-center">
            <small class="updated-date"><?php the_modified_date(''); ?></small>
            <h1 id="post-title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h1>
            <p>  
              <?php if(has_tag()) :?> <i class="fa fa-tag"></i> <?php the_tags(' '); endif; ?>
            </p>
            -
          </article>
        <?php endwhile; else: ?>
        <h2>미안해요, 글이 없네요</h2>
      <?php endif; ?>
      <!-- paging -->
      <nav id="paging">
       <?php bittersweet_pagination() ?>
        </nav>
      </section>
    </main>
  </div>
</div>
<?php get_footer(); ?>