<?php

/*
	==========================================
	Inlcude Scripts
	==========================================
 */

function sme_script_enqueue() {
	// CSS
	wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.1.3', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/sme.css', array(), '1.0.0', 'all');
	// JS
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '4.1.3', true);
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/kodadesign.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'sme_script_enqueue');

/*
	==========================================
	Activate Menus
	==========================================
 */

// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

// Theme Support
function sme_theme_setup() {
// 	add_theme_support('menus');

// 	register_nav_menu('primary', 'Primary Header Navigation');
// 	register_nav_menu('secondary', 'Footer Navigation');

	register_nav_menus( array(
		'primary' => __( 'Primary Menu' ),
	) );
}

// 	register_nav_menus( array(
// 		'primary' => __( 'Secondary Menu' ),
// 	) );

add_action('after_setup_theme', 'sme_theme_setup');

/*
	==========================================
	Theme Support Function
	==========================================
 */

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('quote', 'image', 'video'));

/*
	==========================================
	Include Walker File
	==========================================
 */