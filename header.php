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

  <body <?php body_class(); ?>>
    <header class="geek-header-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h1>
              <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <p><?php bloginfo('description'); ?></p>
          </div>
        </div>
      </div>
    </header>