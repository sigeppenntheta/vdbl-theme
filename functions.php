<?php
/**
* VDBL Functions and Definitions
*
* Sets up the theme and includes some helpers as well.
*
*/

function custom_excerpt_length() {
	return 20;
}

function insert_vdbl_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('pure', 'http://yui.yahooapis.com/pure/0.6.0/pure-min.css');
	wp_enqueue_style('pure-grid', 'http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css');
}

add_action('wp_enqueue_scripts', 'insert_vdbl_scripts');

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>