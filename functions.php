<?php
function my_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_scripts');
add_theme_support('title-tag');
//add_theme_support('custom-logo')
?>