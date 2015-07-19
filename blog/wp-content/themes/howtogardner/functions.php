<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');

function htg_excerpt_length($length) {
    return 64;
}

add_filter('excerpt_length', htg_excerpt_length, 999);

function htg_create_widget($name, $id, $description) {
    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="module-heading">',
        'after_title' => '</h2>'
    ));
}

htg_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
htg_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


function htg_theme_styles() {
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('flaticon_css', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'htg_theme_styles'); 

function htg_theme_js() {
    wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.min.js', '', '', false);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', '', '', true); 
}

add_action('wp_enqueue_scripts', 'htg_theme_js');
?>