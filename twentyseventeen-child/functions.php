<?php
/**
 * Twenty Seventeen Child Theme functions and definitions
 */

if ( !function_exists( 'twentyseventeen_child_setup' ) ) :
/**
 * Child theme setup
 */
function twentyseventeen_child_setup(){
    load_child_theme_textdomain( 'twenty-seventeen-child', get_stylesheet_directory() . '/languages' );
}
endif;
add_action( 'after_setup_theme', 'twentyseventeen_child_setup' );

if ( !function_exists( 'twentyseventeen_child_styles' ) ) :
/**
 * Add parent theme stylesheet
 */
function twentyseventeen_child_styles() {
    wp_enqueue_style( 'twentyseventeen-parent-style', get_template_directory_uri() . '/style.css' );
}
endif;
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_styles' );

/**
 * Include Kirki helpers
 */
include_once get_theme_file_path( 'admin/include-kirki.php' );
include_once get_theme_file_path( 'admin/class-twentyseventeen-child-kirki.php' );
include_once get_theme_file_path( 'admin/customizer.php' );

/**
 * Add template tags file
 */
require_once get_theme_file_path( 'inc/template-tags.php' );
