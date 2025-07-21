<?php
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

function register_event_registration_post_type() {
    $labels = array(
        'name'               => _x('Event Registrations', 'post type general name', 'textdomain'),
        'singular_name'      => _x('Event Registration', 'post type singular name', 'textdomain'),
        'menu_name'          => _x('Event Registrations', 'admin menu', 'textdomain'),
        'name_admin_bar'     => _x('Event Registration', 'add new on admin bar', 'textdomain'),
        'add_new'            => _x('Add New', 'event registration', 'textdomain'),
        'add_new_item'       => __('Add New Event Registration', 'textdomain'),
        'new_item'           => __('New Event Registration', 'textdomain'),
        'edit_item'          => __('Edit Event Registration', 'textdomain'),
        'view_item'          => __('View Event Registration', 'textdomain'),
        'all_items'          => __('All Event Registrations', 'textdomain'),
        'search_items'       => __('Search Event Registrations', 'textdomain'),
        'parent_item_colon'  => __('Parent Event Registrations:', 'textdomain'),
        'not_found'          => __('No event registrations found.', 'textdomain'),
        'not_found_in_trash' => __('No event registrations found in Trash.', 'textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Event registrations submitted by users.', 'textdomain'),
        'public'             => false, // Not publicly accessible
        'show_ui'            => true,  // Show in admin dashboard
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-list-view', // Icon in admin menu
        'supports'           => array('title', 'editor'), // You can adjust supports as needed
    );

    register_post_type('event_registration', $args);
}
add_action('init', 'register_event_registration_post_type');

function register_contact_us_post_type() {
    $labels = [
        'name'               => 'Contact Messages',
        'singular_name'      => 'Contact Message',
        'menu_name'          => 'Contact Us',
        'name_admin_bar'     => 'Contact Message',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Message',
        'new_item'           => 'New Message',
        'edit_item'          => 'Edit Message',
        'view_item'          => 'View Message',
        'all_items'          => 'All Messages',
        'search_items'       => 'Search Messages',
        'parent_item_colon'  => 'Parent Messages:',
        'not_found'          => 'No messages found.',
        'not_found_in_trash' => 'No messages found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,          // Hidden from front-end
        'show_ui'            => true,           // Show in admin dashboard
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-email', // Mail icon
        'capability_type'    => 'post',
        'supports'           => ['title', 'editor', 'custom-fields'], // Title and content editor for message
        'has_archive'        => false,
        'exclude_from_search'=> true,
        'publicly_queryable' => false,
        'show_in_rest'       => true,           // Enable REST API support
    ];

    register_post_type('contact_us', $args);
}
add_action('init', 'register_contact_us_post_type');

function register_newsletter_cpt() {
    $labels = [
        'name'               => 'Newsletters',
        'singular_name'      => 'Newsletter',
        'menu_name'          => 'Newsletters',
        'name_admin_bar'     => 'Newsletter',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Newsletter',
        'new_item'           => 'New Newsletter',
        'edit_item'          => 'Edit Newsletter',
        'view_item'          => 'View Newsletter',
        'all_items'          => 'All Newsletters',
        'search_items'       => 'Search Newsletters',
        'parent_item_colon'  => 'Parent Newsletters:',
        'not_found'          => 'No newsletters found.',
        'not_found_in_trash' => 'No newsletters found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,             // Not visible on frontend
        'show_ui'            => true,              // Visible in admin dashboard
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-email-alt', // Newsletter-like icon
        'supports'           => ['title', 'editor', 'custom-fields'],
        'has_archive'        => false,
        'exclude_from_search'=> true,
        'publicly_queryable' => false,
        'show_in_rest'       => true,              // Enables block editor + REST API
    ];

    register_post_type('newsletter', $args);
}
add_action('init', 'register_newsletter_cpt');


