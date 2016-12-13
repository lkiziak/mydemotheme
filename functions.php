<?php
/**
 * My Demo functions and definitions
 *
 * @package My Demo
 */

function demo_script() {

    // WP Enqueue style and script
    wp_enqueue_style( 'mydemo-css', get_template_directory_uri() . '/layout/css/mydemo.min.css', array(), 'all' );
    wp_enqueue_script( 'mydemo-scripts', get_template_directory_uri() . '/layout/js/mydemo.js', array(), 'all');
}

add_action( 'wp_enqueue_scripts', 'demo_script_enqueue');

function good_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'good_theme_setup');

// Theme support hooks
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

