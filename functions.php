<?php

/**
 *  Feel free to enable / disable things here
 */

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Enable post thumbnails in theme
add_theme_support( 'post-thumbnails' ); 

// Register styles and scripts
$version = '0.1';
$mainJS = get_template_directory_uri() . '/dist/js/main.js';
$mainCSS = get_template_directory_uri() . '/style.css';

wp_enqueue_style( 'style', $mainCSS, $version, true );
wp_enqueue_script( 'script', $mainJS, $version, true);
