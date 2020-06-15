<?php

/*-------------------------------------------------------------------------------------------*/
/* ARTISTS CPT */
/*-------------------------------------------------------------------------------------------*/

/*Custom Post type start*/

function artists() {

$supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
);

$labels = array(
    'name' => _x('Artists', 'plural'),
    'singular_name' => _x('Artists', 'singular'),
    'menu_name' => _x('Artists', 'admin menu'),
    'name_admin_bar' => _x('artists', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Artists'),
    'new_item' => __('New Artists'),
    'edit_item' => __('Edit Artists'),
    'view_item' => __('View Artists'),
    'all_items' => __('All Artists'),
    'search_items' => __('Search artists'),
    'not_found' => __('No artists found.'),
);

$args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'artists'),
    'show_in_rest' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'taxonomies' => array('topics', 'editions'),
    );

    register_post_type('artists', $args);

}
add_action('init', 'artists');

/*Custom Post type end*/

add_action( 'init', 'create_artist_taxonomies', 0 );

function create_artist_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Editions', 'taxonomy general name' ),
    'singular_name' => _x( 'Edition', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Editions' ),
    'popular_items' => __( 'Popular Editions' ),
    'all_items' => __( 'All Editions' ),
    'parent_item' => __( 'Parent Edition' ),
    'parent_item_colon' => __( 'Parent Edition:' ),
    'edit_item' => __( 'Edit Edition' ),
    'update_item' => __( 'Update Edition' ),
    'add_new_item' => __( 'Add New Edition' ),
    'new_item_name' => __( 'New Edition Name' ),
  );
  register_taxonomy('editions',array('artists'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true, 
    'show_in_rest' => true,
    'supports' => array('editor'),
    'query_var' => true,
    'rewrite' => array( 'slug' => 'editions' ),
  ));
}
?>