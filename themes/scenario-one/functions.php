<?php
function my_theme_setup() {
    register_nav_menus(array(
        'header' => 'Header Menu',
        'footer' => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

add_theme_support('post-thumbnails');

function cmsclass_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area One', 'cmsclass'),
        'id'            => 'footer-widget-area-one',
        'description'   => __('The first footer widget area', 'cmsclass'),
        'before_widget' => '<div class="logo-widget">',
        'after_widget'  => '</div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget Area Two', 'cmsclass'),
        'id'            => 'footer-widget-area-two',
        'description'   => __('The second footer widget area', 'cmsclass'),
        'before_widget' => '<div class="about-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget Area Three', 'cmsclass'),
        'id'            => 'footer-widget-area-three',
        'description'   => __('The third footer widget area', 'cmsclass'),
        'before_widget' => '<div class="menu-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget Area four', 'cmsclass'),
        'id'            => 'footer-widget-area-four',
        'description'   => __('The fourth footer widget area', 'cmsclass'),
        'before_widget' => '<div class="contact-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'cmsclass_widgets_init');

function customtheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');

function enqueue_wc_cart_fragments() {
    wp_enqueue_script('wc-cart-fragments');
}
add_action('wp_enqueue_scripts', 'enqueue_wc_cart_fragments');

function remove_woocommerce_sidebar() {
    if (is_product()) { 
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}
add_action('wp', 'remove_woocommerce_sidebar');

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
