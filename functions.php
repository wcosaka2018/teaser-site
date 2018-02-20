<?php
/**
 * Components functions and definitions.
 *
 * @package wcosaka2018-teaser
 */

/**
 * Add stylesheets.
 */
function wordcamp_japan_theme_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wordcamp-japan-theme-style', get_stylesheet_directory_uri() . '/css/wcosaka2018-teaser.css', array( 'parent-style' ) );
}

add_action( 'wp_enqueue_scripts', 'wordcamp_japan_theme_style' );
