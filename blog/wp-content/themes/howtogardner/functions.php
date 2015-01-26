<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');

function htg_theme_styles() {
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('flaticon_css', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'htg_theme_styles'); 

function htg_theme_js() {
    wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true); 
}

add_action('wp_enqueue_scripts', 'htg_theme_js');
?>