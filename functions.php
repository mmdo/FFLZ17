<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
	  'footer-menu' => __( 'Footer Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//For widgets
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="title">',
'after_title' => '</div>',
));

add_post_type_support( 'page', 'excerpt' );

//Read more link
function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '">[mehr...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(100, 100, true); // "hard-crop"-Variante
?>