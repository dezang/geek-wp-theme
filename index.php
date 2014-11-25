<?php get_header(); ?>
<div class="container">
  <div class="row">
      <div class="col-md-3">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'main_menu',
          'fallback_cb' => false,
          'menu_class' => 'geek-header-menu',
        ));
      ?>
      <?php get_sidebar('left'); ?>
      </div>
      <div id="main" class="col-md-6">
        <section id="content">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>
              <?php echo get_the_date(); ?> <?php echo get_the_time(); ?> 
            </p>
            <?php 
            if( is_home() || is_category() || is_tag()) {
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( thumbnail, array('class' => 'geek-thumnail') ); 
              } 
              the_excerpt();
            } else {
              the_content();
            }?>
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
      </div>
      <div id="right-sidebar" class="col-md-3">
      <?php get_sidebar('right'); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>