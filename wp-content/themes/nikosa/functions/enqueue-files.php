<?php
/*
 * Enqueue css and js files
 */
function nikosa_enqueue() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array());
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array());
	wp_enqueue_style('google-font', nikosa_fonts_url(), array());
	wp_enqueue_style('nikosa-default', get_template_directory_uri() .'/assets/css/default.css', array());
	wp_enqueue_style('nikosa-style', get_stylesheet_uri(), array());

	if (is_singular())
	    wp_enqueue_script("comment-reply");
	    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'),false);
	    wp_enqueue_script('nikosa-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),false);
}
add_action( 'wp_enqueue_scripts', 'nikosa_enqueue' );
require get_template_directory() . '/functions/theme-default-setup.php';