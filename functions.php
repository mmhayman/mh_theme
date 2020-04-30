<?php

// enqueue css, js and jquery
function scripts() {

    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');


    wp_enqueue_script('jquery');
    
    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, 'true');
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )

);

add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 50,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );