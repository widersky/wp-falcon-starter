<?php

/**
 *  Feel free to enable / disable things here
 */

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Enable post thumbnails in theme
add_theme_support( 'post-thumbnails' ); 
