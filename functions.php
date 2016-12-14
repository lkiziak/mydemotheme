<?php
/**
 * My Demo functions and definitions
 *
 * @package My Demo
 */

function demo_script() {
    // WP Enqueue style
      wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
      wp_enqueue_style( 'mydemo-css', get_template_directory_uri() . '/css/mydemo.css', array(), 'all' );

    // WP Enqueue script
      wp_enqueue_script( 'jquery');
      wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
      wp_enqueue_script( 'mydemo-scripts', get_template_directory_uri() . '/js/mydemo.js', array(), 'all');
}

add_action( 'wp_enqueue_scripts', 'demo_script_enqueue');

  // active menus
function good_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'good_theme_setup');

// Theme support functions
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));


add_action( 'wp_enqueue_scripts', 'demo_script' );

