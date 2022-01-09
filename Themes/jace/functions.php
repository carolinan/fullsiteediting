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
define( 'jace_VERSION', wp_get_theme()->get( 'Version' ) );

// Include the webfont loader file.
require_once get_theme_file_path( 'classes/wptt-webfont-loader.php' );

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
	add_editor_style(
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap' ),
	);

	// Load additional block styles.
	$styled_blocks = [ 'button', 'file', 'latest-comments', 'latest-posts', 'post-title', 'quote', 'search' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "jace-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
		);

		// Add "path" to allow inlining.
		$args['path'] = get_theme_file_path( "assets/css/blocks/$block_name.min.css" );

		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
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
		jace_VERSION
	);
	wp_enqueue_style(
		'jace-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		jace_VERSION
	);

	// Load the webfont.
	wp_enqueue_style(
		'lora',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap' ),
		[],
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'jace_styles' );

// Block style examples.
require_once 'styles/register-block-styles.php';

// Block pattern and block category examples.
require_once 'patterns/register-block-patterns.php';

// Block variation example.
require_once 'variations/register-block-variations.php';

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 1.0.0
*/
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = _x( '(No title)', 'Used if post or pages has no title', 'jace' );
		}

		return $title;
	}
);

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 1.0.0
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		return '&hellip;';
	}
);
