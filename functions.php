<?php

/**
 * Grace in Every Step Theme
 */

function grace_theme_setup() {

    // Let WordPress manage the page title
    add_theme_support('title-tag');

    // Enable featured images
    add_theme_support('post-thumbnails');

    // Register the main navigation menu
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'grace-in-every-step'),
        )
    );
}

add_action('after_setup_theme', 'grace_theme_setup');


function grace_enqueue_assets() {

    // Main stylesheet
    wp_enqueue_style(
        'grace-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'grace_enqueue_assets');