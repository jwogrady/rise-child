<?php
/**
 * Rise Local Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rise Local
 * @since 0.0.1
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_RISE_LOCAL_VERSION', '0.0.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'rise-local-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_RISE_LOCAL_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );