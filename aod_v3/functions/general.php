<?php


ob_start();
add_theme_support( 'menus' );
add_action( 'widgets_init', 'aod_widgets_init' );
function aod_widgets_init() {
  register_sidebar( array (
    'name' => __('Sidebar Widget Area', 'aod'),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}

add_filter('show_admin_bar', '__return_false');

// function wordress_starter_queue() {
//   wp_enqueue_style( 'site',  get_stylesheet_uri(), array('dashicons') );
//   wp_enqueue_script( 'site',  get_template_directory_uri() . '/js/site.js', array('jquery') );
// }
// add_action( 'wp_enqueue_scripts', 'wordress_starter_queue' );

register_nav_menus( array(
  'primary' => __( 'Primary', 'aod' ),
  'footer' => __( 'Footer', 'aod' )
) );

function custom_excerpt_length( $length ) {
  return 30;
}
function new_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support( 'post-thumbnails' );
add_post_type_support('page', 'excerpt');