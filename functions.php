<?php
	//Thumbnails
add_theme_support('post-thumbnails');

	//Using Post Format
add_theme_support('post-formats', array('image', 'quote', 'aside'));

	//Menus
register_nav_menus(array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
	));

	//Sidebar
register_sidebar(array(
	'name' => __('Right Sidebar'),
	'before_widget' => '<div class="dz-widget">',
	'after_widget' => '</div>',
	));

register_sidebar( array(
	'name' => __( 'Left Sidebar' ),
	'before_widget' => '<div class="geek-widget">',
	'after_widget' => '</div>',
	));

	//FooterBar
register_sidebar( array(
	'before_widget' => '<div class="dz-footer-widget">',
	'after_widget' => '</div>',
	'name' => __( 'Left Footerbar' ),
	));

register_sidebar( array(
	'before_widget' => '<div class="dz-footer-widget">',
	'after_widget' => '</div>',
	'name' => __( 'Center Footerbar' ),
	));

register_sidebar( array(
	'before_widget' => '<div class="dz-footer-widget">',
	'after_widget' => '</div>',
	'name' => __( 'Right Footerbar' ),
	));

	//Costum Function
function bittersweet_pagination() {
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	
	$pages = paginate_links( array(
		'base'		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'	=> '?paged=%#%',
		'current'	=> max( 1, get_query_var('paged') ),
		'total'		=> $wp_query->max_num_pages,
		'type'		=> 'array',
		) );

	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination-wrap"><ul class="pagination">';
		foreach ( $pages as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div>';
	}
}


?>