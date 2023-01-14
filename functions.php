<?php

/**
* Enqueue parent theme CSS file
*/
add_action( 'wp_enqueue_scripts', 'parent_theme_enqueue_styles', 11 );
function parent_theme_enqueue_styles() {
    wp_enqueue_style( 'twentytwentythree', get_template_directory_uri() . '/style.css' );

}