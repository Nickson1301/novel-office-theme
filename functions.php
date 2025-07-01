


<?php

function custom_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');



function custom_post_type_testimonials() {
    $args = array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'testimonials'),
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'custom_post_type_testimonials');

function register_theme_menus() {
  register_nav_menus(array(
    'main-menu' => __('Main Menu')
  ));
}
add_action('init', 'register_theme_menus');