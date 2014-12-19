<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(''); ?> &laquo; <?php bloginfo('name'); ?></title>
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
    <header class="geek-header">
      <div class="container">
        <h1 >
          <a href="<?php echo home_url(); ?>">{ <?php bloginfo('name'); ?> }</a>
        </h1>
        <span class="description"><?php bloginfo('description'); ?></span>
        <form role="search" method="get" class="search-form" action="<?php echo home_url('/');?>">
          <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
        </form>
      </div>
    </header>