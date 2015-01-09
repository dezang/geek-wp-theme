<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
    <?php the_title('',' &laquo; '); bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="geek-header navbar-fixed-top" >
      <div class="container center-box">
        <h1>
          <!-- <a href="<?php echo home_url(); ?>">{ <?php bloginfo('name'); ?> }</a> -->
          <img src="<?php bloginfo('template_directory'); ?>/images/dzstar.png"/ width="60" height="57">
        </h1>
        <!-- <span class="description"><?php bloginfo('description'); ?></span> -->
      </div>

      <nav id="menu">
      <ul class="list-inline">
          <li>Menu1</li>
          <li>Menu1</li>
          <li>Menu1</li>
          <li>Menu1</li>
      </ul>
      </div>
    </nav>
    </header>
    
    