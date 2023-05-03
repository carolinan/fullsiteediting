<?php
/**
 * Webfonts
 *
 * @package full-site-editing
 * @since 1.0.0
 */

// Include the webfont loader file.
require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

/**
 * Enqueue the web font
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_font() {
	wp_enqueue_style(
		'lora',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap' ),
		[],
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'full_site_editing_font' );

/**
 * Enqueue the web font in the editors
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_editor_font() {
	add_editor_style(
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap' ),
	);
}
add_action( 'after_setup_theme', 'full_site_editing_editor_font' );
