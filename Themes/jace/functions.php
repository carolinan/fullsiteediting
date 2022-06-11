<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jace
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'JACE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Check if the WordPress version is 6.0 or higher, and if the PHP version is at least 7.4.
 * If not, do not activate.
 */
if ( version_compare( $GLOBALS['wp_version'], '6.0-RC4-53425', '<' ) || version_compare( PHP_VERSION_ID, '70400', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function jace_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/min/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 */
	$styled_blocks = [
		'button',
		'code',
		'file',
		'list',
		'latest-comments',
		'latest-posts',
		'navigation',
		'post-title',
		'quote',
		'search',
		'separator',
		'site-title',
	];

	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "jace-$block_name",
			'src'    => get_theme_file_uri( "assets/css/min/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/min/blocks/$block_name.min.css" ),
		);
		wp_enqueue_block_style( "core/$block_name", $args );
	}

	/**
	 * Gutenberg 13.0 broke the loading of CSS in the Site Editor,
	 * this is a temporary(?) workaround.
	 */
	if ( function_exists( 'gutenberg_pre_init' ) ) {
		foreach ( $styled_blocks as $block_name ) {
			add_editor_style( "assets/css/min/blocks/$block_name.min.css" );
		}
	}
}
add_action( 'after_setup_theme', 'jace_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function jace_styles() {
	wp_enqueue_style(
		'jace-style',
		get_stylesheet_uri(),
		[],
		JACE_VERSION
	);
	wp_enqueue_style(
		'jace-shared-styles',
		get_theme_file_uri( 'assets/css/min/style-shared.min.css' ),
		[],
		JACE_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'jace_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block variations.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block patterns.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// WooCommerce setup.
if ( class_exists( 'WooCommerce' ) ) {
	require_once get_theme_file_path( 'inc/woocommerce.php' );
}

