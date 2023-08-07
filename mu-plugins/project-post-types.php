


<?php
function project_post_types()
{
    register_post_type('past-events', array(
        'capability_type' => 'past-events',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'past-events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => "Past-Events",
            'add_new_item' => 'Add Latest Past-Event',
            'edit_item' => 'Edit Past-Event',
            'all_items' => 'All Past-Events',
            'singular_name' => "Past-Event"
        ),
        'menu_icon' => 'dashicons-calendar'
    ));


    register_post_type('reviews', array(
        'capability_type' => 'reviews',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'reviews'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => "Reviews",
            'add_new_item' => 'Add Latest Review',
            'edit_item' => 'Edit Review',
            'all_items' => 'All Review',
            'singular_name' => "Review"
        ),
        'menu_icon' => 'dashicons-awards'
    ));



    register_post_type('staff_member', array(
        'capability_type' => 'staff_member',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'staff_member'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => "Staff_Member",
            'add_new_item' => 'Add Latest Staff_Member',
            'edit_item' => 'Edit Staff_Member',
            'all_items' => 'All Staff_Member',
            'singular_name' => "Staff_Member"
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

    register_post_type('venues', array(
        'capability_type' => 'venues',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'venues'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => "Venues",
            'add_new_item' => 'Add Latest Venue',
            'edit_item' => 'Edit Venue',
            'all_items' => 'All Venue',
            'singular_name' => "Venue"
        ),
        'menu_icon' => 'dashicons-admin-home'
    ));

    register_post_type('note', array(
        'capability_type' => 'notes',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => "Notes",
            'add_new_item' => 'Add New Note',
            'edit_item' => 'Edit Note',
            'all_items' => 'All Notes',
            'singular_name' => "Note"
        ),
        'menu_icon' => 'dashicons-welcome-write-blog'
    ));
}
add_action('init', 'project_post_types');
?>