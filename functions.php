<?php
/**
 * Decorpo Tech Garage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package decorpo-tech-garage
 */

// add_action('admin_bar_menu', function(){
// 	global $template;
// 	print_r($template);
// });

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

add_action('wp_enqueue_scripts', function(){
	// Main Style Sheet
	wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), [], _S_VERSION);
	wp_style_add_data('main-stylesheet', 'rtl', 'replace');
	// Icon script
	wp_enqueue_script('fontawesome-kit', 'https://kit.fontawesome.com/aebdbe8212.js','','',true);
	wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', [], _S_VERSION, true);
});

add_action('admin_menu', function(){
	add_menu_page(
		'Theme Settings',
		'Theme Settings',
		'manage_options',
		'theme-settings',
		function(){
			?><h1>Hello, World!</h1><?php
		},
		'dashicons-admin-settings',
		1
	);
});

add_action('after_setup_theme', function(){
	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'towerpf-site' ),
			'footer-menu' => __('Footer Menu', 'towerpf-site' ),
		)
	);
});

require get_template_directory().'/inc/custom-post-types.php';
require get_template_directory().'/inc/birthday-api.php';