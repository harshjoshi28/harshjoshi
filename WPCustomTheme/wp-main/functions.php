<?php
// Hook
function geet_setup()
{
    wp_enqueue_style('style',get_stylesheet_uri('style.css'));
    wp_enqueue_script("main",get_theme_file_uri('script.js'));
}
add_action('wp_enqueue_scripts','geet_setup'); // Hook


// Custom Post Type Widget.
function geet_custom()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme','geet_custom');

// Create Menu Option in Admin panel.

register_nav_menus(
    array('primary-menu'=>'Main Menu')
)
?>