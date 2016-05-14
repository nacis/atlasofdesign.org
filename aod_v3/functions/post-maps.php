<?php
add_action( 'init', 'map_post_type' );
function map_post_type() {
  register_post_type( 'maps',
    array(
      'labels' => array(
        'name'               => _x( 'Maps', 'post type general name', 'aod' ),
        'singular_name'      => _x( 'Map', 'post type singular name', 'aod' ),
        'menu_name'          => _x( 'Maps', 'admin menu', 'aod' ),
        'name_admin_bar'     => _x( 'Map', 'add new on admin bar', 'aod' ),
        'add_new'            => _x( 'Add New', 'map', 'aod' ),
        'add_new_item'       => __( 'Add New Map', 'aod' ),
        'new_item'           => __( 'New Map', 'aod' ),
        'edit_item'          => __( 'Edit Map', 'aod' ),
        'view_item'          => __( 'View Map', 'aod' ),
        'all_items'          => __( 'All Maps', 'aod' ),
        'search_items'       => __( 'Search Maps', 'aod' ),
        'parent_item_colon'  => __( 'Parent Maps:', 'aod' ),
        'not_found'          => __( 'No maps found.', 'aod' ),
        'not_found_in_trash' => __( 'No maps found in Trash.', 'aod' )
      ),
    'public' => true,
    'rewrite' => array( 'slug' => 'maps', 'with_front' => false ),
    'has_archive' => false,
    'supports' => array( 'title', 'thumbnail', 'custom-fields', 'editor' ),
    'show_in_menu' => true,
    'show_in_nav_menus' => true
    )
  );
}

add_action( 'init', 'map_taxonomy' );

function map_taxonomy() {
  $labels = array(
    'name'              => _x( 'Volumes', 'taxonomy general name' ),
    'singular_name'     => _x( 'Volume', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Volumes' ),
    'all_items'         => __( 'All Volumes' ),
    'parent_item'       => __( 'Parent Volume' ),
    'parent_item_colon' => __( 'Parent Volume:' ),
    'edit_item'         => __( 'Edit Volume' ),
    'update_item'       => __( 'Update Volume' ),
    'add_new_item'      => __( 'Add New Volume' ),
    'new_item_name'     => __( 'New Volume Name' ),
    'menu_name'         => __( 'Volumes' ),
  );
  register_taxonomy(
    'volume',
    'maps',
    array(
      'labels' => $labels,
      'rewrite' => array( 'slug' => 'volume', 'with_front' => false ),
      'hierarchical' => true
    )
  );
}

function custom_volume_archive_loop ( $query ) {
  if (($query->is_main_query()) && (is_tax('volume'))) {
    $query->set( 'posts_per_page', '-1' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
  }
       
  
}
 
//Hook the function
 
add_action( 'pre_get_posts', 'custom_volume_archive_loop' );

?>