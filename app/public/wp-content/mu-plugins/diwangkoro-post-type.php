<?php

function diwangkoro_post_type() {
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