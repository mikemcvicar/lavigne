<?php



if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
  set_post_thumbnail_size( 280, 9999 );
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'bio-thumb', 180, 220 );
	add_image_size( 'bio-big', 450, 550 ); 
	add_image_size( 'case-thumb', 220, 320, true );
	add_image_size( 'play-small', 100, 9999 );
	add_image_size( 'play-med', 220, 9999 );
	add_image_size( 'play-big', 340, 9999 );
	add_image_size( 'play-open', 500, 1240 );
	
	
}




add_filter('show_admin_bar', '__return_false');

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'main_navigation', 'Main Navigation' );
}


?>