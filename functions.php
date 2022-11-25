<?php

// Requiring Theme Customizer
require get_template_directory(). '/includes/customizer.php';

function doptheme_theme_setup(){
    
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 211,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'home-featured', 680, 400, array('center', 'center'));
    add_image_size( 'portfolio-featured', 400, 290, array('center', 'center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'doptheme')
    ));
}

add_action('after_setup_theme', 'doptheme_theme_setup' );


function doptheme_scripts_enqueue() {

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('doptheme-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('doptheme-breakpoints', get_template_directory_uri(). '/assets/js/breakpoints.min.js');
    wp_enqueue_script('doptheme-util', get_template_directory_uri(). '/assets/js/util.js');
    wp_enqueue_script('doptheme-main', get_template_directory_uri(). '/assets/js/main.js');

}
add_action( 'wp_enqueue_scripts', 'doptheme_scripts_enqueue' );

function doptheme_widgets_init(){

    register_sidebar(array(
        'name' => __('Main Sidebar', 'doptheme'),
        'id' => 'main-sidebar',
        'description' => 'Primary Right Sidebar',
        'before_widget' => '<section id="%1$s" class="box %2$s" >',
        'after_widget' => '</section>',
        'before_title' => '<header><h3> class="widget-title">',
        'after_title' => '</h3></header>'
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 1', 'doptheme'),
        'id' => 'footer-widget-1',
        'description' => 'Footer Widget 1',
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget' => '</section>',
        'before_title' => '<header><h2> class="widget-title">',
        'after_title' => '</h2></header>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 2', 'doptheme'),
        'id' => 'footer-widget-2',
        'description' => 'Footer Widget 2',
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget' => '</section>',
        'before_title' => '<header><h2> class="widget-title">',
        'after_title' => '</h2></header>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 3', 'doptheme'),
        'id' => 'footer-widget-3',
        'description' => 'Footer Widget 3',
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',
        'after_widget' => '</section>',
        'before_title' => '<header><h2> class="widget-title">',
        'after_title' => '</h2></header>'
    ));


}

add_action ('widgets_init', 'doptheme_widgets_init');

//Adding Portfolio Custom Post Type
require get_template_directory(). '/includes/portfolio.php';