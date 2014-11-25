<?php
	//Thumbnails
	add_theme_support('post-thumbnails');
	
	//Menus
	register_nav_menus(array(
		'main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu',
	));

	//Sidebar
	register_sidebar(array(
		'name' => __('Right Sidebar'),
		'before_widget' => '<div class="geek-widget">',
  		'after_widget' => '</div>',
	));

	register_sidebar( array(
  		'name' => __( 'Left Sidebar' ),
  		'before_widget' => '<div class="geek-widget">',
  		'after_widget' => '</div>',
	));
?>