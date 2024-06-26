<?php
// Enqueue parent theme styles
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');

function create_deer_tests_post_type() {
    register_post_type('deer_tests',
        array(
            'labels' => array(
                'name' => __('Deer Tests'),
                'singular_name' => __('Deer Test')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_deer_tests_post_type');
