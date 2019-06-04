<?php 

/* Load CSS Files  */
function wpmziq_theme_styles()
{
    // wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wpmziq_theme_styles');

/* Load JS Files */
function wpmziq_theme_js()
{
    wp_enqueue_script('slick_js', get_template_directory_uri() . './assets/js/all.js', array('jquery'), VERSION);
}
add_action('wp_enqueue_scripts', 'wpmziq_theme_js');