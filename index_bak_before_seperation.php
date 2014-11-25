<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <!-- BEGIN index.php -->
  <body <?php body_class(); ?>>
    <div class="geek-header-bg">
      <header class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h1>
              <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <p><?php bloginfo('description'); ?></p>
          </div>
        </div>
      </header>
    </div>

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
          <!-- BEGIN sidebar.php -->
        </div>
        <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Sidebar") ) : ?>
        <?php endif; ?>
        </div>
      </div>
    <!-- BEGIN footer.php -->
    </div>

    <div class="geek-footer-bg">
      <footer class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h3>Copyright <?php bloginfo('name'); ?> All Rights Reserved.</h3>
          </div>
        </div>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
<!-- END footer.php -->