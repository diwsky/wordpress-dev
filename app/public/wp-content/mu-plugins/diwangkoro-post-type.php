<?php

function diwangkoro_post_type() {
    register_post_type('professor',array(
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Professor',
            'singular_name' => 'Professor',
            'add_new_item' => 'Add New Professor',
            'add_new' => 'Add New Professor',
            'view_item' => 'View Professor',
            'edit_item' => 'Edit Professor',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-awards'
    ));

    register_post_type('program',array(
        'has_archive' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug'=>'programs'),
        'labels' => array(
            'name' => 'Programs',
            'singular_name' => 'Program',
            'add_new_item' => 'Add New Program',
            'add_new' => 'Add New Program',
            'view_item' => 'View Program',
            'edit_item' => 'Edit Program',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-awards'
    ));

    register_post_type('event',array(
        'has_archive' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug'=>'events'),
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event',
            'add_new_item' => 'Add New Event',
            'add_new' => 'Add New Event',
            'view_item' => 'View Event',
            'edit_item' => 'Edit Event',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-book-alt'
    ));
}

add_action('init', 'diwangkoro_post_type');