<?php
function my_theme_setup(){
    // register the navigation using a prebuilt php hook
    register_nav_menus( array(
        'header'  => 'Header menu',
        'footer'  => 'Footer menu'
    ));
} 
// the action will make the navigation work
add_action('after_setup_theme', 'my_theme_setup');
// add featured image support to our posts
add_theme_support ('post-thumbnails');

function cmsclass_widgets_init(){
// name of the function is up to you
// logo
    register_sidebar(array(
        'name'          => __('Footer Widget Area One', 'cmsclass'),
        'id'            => 'footer-widget-area-one',
        'description'   => __('The first footer widget area', 'cmsclass'),
        'before_widget' => '<div class="logo-widget">',
        'after_widget'  => '</div>',
    ));
    // about text
    register_sidebar(array(
        'name'          => __('Footer Widget Area Two', 'cmsclass'),
        'id'            => 'footer-widget-area-two',
        'description'   => __('The second footer widget area', 'cmsclass'),
        'before_widget' => '<div class="copyright-widget">',
        'after_widget'  => '</div>',
        'before_title'   => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget Area Four', 'cmsclass'),
        'id'            => 'footer-widget-area-four',
        'description'   => __('The fourth footer widget area', 'cmsclass'),
        'before_widget' => '<div class="contact-widget">',
        'after_widget'  => '</div>',
        'before_title'   => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init', 'cmsclass_widgets_init' );
