<?php

function diwangkoros_files() {
    wp_enqueue_script('diwangkoro_scripts', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('google_fonts', ('//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'));
    wp_enqueue_style('main_fonts', ('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'));
    wp_enqueue_style('diwangkoros_extra_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('diwangkoros_main_styles', get_theme_file_uri('/build/index.css'));
}

function diwangkoro_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts','diwangkoros_files');

add_action('after_setup_theme','diwangkoro_features');
