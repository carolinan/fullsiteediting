<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package full-site-editing
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'FULL_SITE_EDITING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Check if the WordPress version is 5.8 or higher, and if the PHP version is at least 7.4.
 * If not, do not activate.
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
function full_site_editing_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/style-shared.min.css' );
}
add_action( 'after_setup_theme', 'full_site_editing_setup' );

/**
 * Attach extra styles to multiple blocks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_block_styles() {
	// An array of blocks.
	$styled_blocks = [ 'button', 'file', 'latest-comments', 'latest-posts', 'post-title', 'quote', 'search' ];

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
add_action( 'wp_enqueue_scripts', 'full_site_editing_block_styles' );
// Add editor styles.
add_action( 'admin_init', 'full_site_editing_block_styles' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_styles() {
	wp_enqueue_style(
		'full-site-editing-style',
		get_stylesheet_uri(),
		[],
		FULL_SITE_EDITING_VERSION
	);
	wp_enqueue_style(
		'full-site-editing-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		FULL_SITE_EDITING_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'full_site_editing_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Webfonts.
require_once get_theme_file_path( 'inc/fonts.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'patterns/register-block-patterns.php' );
