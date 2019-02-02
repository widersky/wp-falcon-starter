<?php

/**
 *  Feel free to enable / disable things here
 */

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Enable post thumbnails in theme
add_theme_support('post-thumbnails'); 

// Additional thumbnails sizes (name, x, y, hardmode?)
add_image_size('sidebar-thumb', 640, 480, true);

// Add title tag support
add_theme_support('title-tag');

// Register styles and scripts
function enqueueStyles() {
    $version = '0.2';
    $mainJS = get_template_directory_uri() . '/dist/js/main.js';
    $mainCSS = get_template_directory_uri() . '/style.css';

    wp_enqueue_style('style', $mainCSS, $version, true);
    wp_enqueue_script('script', $mainJS, $version, true);
}
add_action('wp_enqueue_scripts', 'enqueueStyles');

// Register custom menus
register_nav_menus(array(
    'top'    => __('Main menu', 'wpst-theme'),
    'footer' => __('Footer menu', 'wpst-theme')
));

// Add custom file types to upload
function addFileTypes($fileTypes) {
    $fileTypes['svg'] = 'image/svg+xml';
    return $fileTypes;
}
add_filter('upload_mimes', 'addFileTypes', 1, 1);

// Some safety things
// Remove WordPress version number
function removeWPVersion() {
    return '';
}
add_filter('the_generator', 'removeWPVersion');

// Remove WordPress errors on login page
function removeWPLoginErrors() {
    return 'Something is wrong!';
}
add_filter('login_errors', 'removeWPLoginErrors');