<?php

/*-------------------------------------------------------------------------------------------*/
/* PROGRAMMES CPT */
/*-------------------------------------------------------------------------------------------*/

/*Custom Post type start*/

function programmes() {

$supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
);

$labels = array(
    'name' => _x('Programmes', 'plural'),
    'singular_name' => _x('Programme', 'singular'),
    'menu_name' => _x('Programmes', 'admin menu'),
    'name_admin_bar' => _x('Programmes', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Programmes'),
    'new_item' => __('New Programmes'),
    'edit_item' => __('Edit Programmes'),
    'view_item' => __('View Programmes'),
    'all_items' => __('All Programmes'),
    'search_items' => __('Search Programmes'),
    'not_found' => __('No Programmes found.'),
);

$args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'programmes'),
    'show_in_rest' => true,
    'has_archive' => true,
    'hierarchical' => true,
    );

    register_post_type('programmes', $args);

}
add_action('init', 'programmes');

/*Custom Post type end*/
?>