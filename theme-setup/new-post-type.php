<?php

function register_testimonial_post_type() {
    register_post_type('testimonial', [
        'labels' => [
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => ['title'],
        'has_archive' => false,
        'rewrite' => ['slug' => 'my-testimonials'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_testimonial_post_type');

function register_events_post_type() {
    $labels = array(
        'name'                  => 'Events',
        'singular_name'         => 'Event',
        'menu_name'             => 'Events',
        'name_admin_bar'        => 'Event',
        'archives'              => 'Event Archives',
        'attributes'            => 'Event Attributes',
        'parent_item_colon'     => 'Parent Event:',
        'all_items'             => 'All Events',
        'add_new_item'          => 'Add New Event',
        'add_new'               => 'Add New',
        'new_item'              => 'New Event',
        'edit_item'             => 'Edit Event',
        'update_item'           => 'Update Event',
        'view_item'             => 'View Event',
        'view_items'            => 'View Events',
        'search_items'          => 'Search Events',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Event Image',
        'set_featured_image'    => 'Set event image',
        'remove_featured_image' => 'Remove event image',
        'use_featured_image'    => 'Use as event image',
        'insert_into_item'      => 'Insert into event',
        'uploaded_to_this_item' => 'Uploaded to this event',
        'items_list'            => 'Events list',
        'items_list_navigation' => 'Events list navigation',
        'filter_items_list'     => 'Filter events list',
    );

    $args = array(
        'label'                 => 'Event',
        'description'           => 'Custom post type for Events',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'), // optional
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'events', 'with_front' => false),
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true,
    );

    register_post_type('event', $args);
}
add_action('init', 'register_events_post_type');
