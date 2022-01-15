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
 * Check if the WordPress version is 5.8 or higher, and if the PHP version is at least 7.4.
 * If not, do not activate.
 * Todo: Remove for 5.9.
 */
if ( version_compare( $GLOBALS['wp_version'], '5.8', '<' ) || version_compare( PHP_VERSION_ID, '70400', '<' ) ) {
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
	add_editor_style( './assets/css/style-shared.min.css' );
}
add_action( 'after_setup_theme', 'jace_setup' );

/**
 * Attach extra styles to multiple blocks.
 * Todo: Replace with wp_enqueue_block_style in 5.9.
 */
function jace_enqueue_block_styles() {
	// An array of blocks.
	$styled_blocks = [ 'button', 'file', 'latest-comments', 'latest-posts', 'navigation', 'post-title', 'quote', 'search', 'site-title' ];

	foreach ( $styled_blocks as $block_name ) {
		// Get the stylesheet handle. This is backwards-compatible and checks the
		// availability of the `wp_should_load_separate_core_block_assets` function,
		// and whether we want to load separate styles per-block or not.
		$handle = (
			function_exists( 'wp_should_load_separate_core_block_assets' ) &&
			wp_should_load_separate_core_block_assets()
		) ? "wp-block-$block_name" : 'wp-block-library';

		// Get the styles.
		$styles = file_get_contents( get_theme_file_path( "assets/css/blocks/$block_name.min.css" ) );

		// Add frontend styles.
		wp_add_inline_style( $handle, $styles );
		// Add editor styles.
		add_editor_style( "assets/css/blocks/$block_name.min.css" );
	}
}
// Add frontend styles.
add_action( 'wp_enqueue_scripts', 'jace_enqueue_block_styles' );
// Add editor styles.
add_action( 'admin_init', 'jace_enqueue_block_styles' );


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
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		JACE_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'jace_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block patterns.
require_once get_theme_file_path( 'patterns/register-block-patterns.php' );
