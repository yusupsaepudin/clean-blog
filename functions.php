<?php

function cleanblog_enqueue_style() {
    wp_enqueue_style('bootstrap',  get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome',  get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('font-lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_enqueue_style('font-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

    wp_enqueue_style( 'main', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'cleanblog_enqueue_style');

// MENU FUNCTION
function register_theme_menus(){
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );


// ADD CLASS TO PAGINATION LINK
add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="btn btn-primary float-right"';
}
function posts_link_attributes_2() {
    return 'class="btn btn-primary float-left"';
}


// ADD CLASS TO <li> tag
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);
