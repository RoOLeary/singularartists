<?php

/*-------------------------------------------------------------------------------------------*/
/* REVIEWS CPT */
/*-------------------------------------------------------------------------------------------*/

/*Custom Post type start*/

function Reviews() {

$supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
);

$labels = array(
    'name' => _x('Reviews', 'plural'),
    'singular_name' => _x('Programme', 'singular'),
    'menu_name' => _x('Reviews', 'admin menu'),
    'name_admin_bar' => _x('Reviews', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Reviews'),
    'new_item' => __('New Reviews'),
    'edit_item' => __('Edit Reviews'),
    'view_item' => __('View Reviews'),
    'all_items' => __('All Reviews'),
    'search_items' => __('Search Reviews'),
    'not_found' => __('No Reviews found.'),
);

$args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'reviews'),
    'show_in_rest' => true,
    'has_archive' => true,
    'hierarchical' => true,
    );

    register_post_type('reviews', $args);

}
add_action('init', 'reviews');

/*Custom Post type end*/
?>