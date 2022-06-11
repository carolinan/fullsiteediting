<?php
/**
 * Block Variations
 *
 * @package jace
 * @since 1.0.4
 */

/**
 * Create a sticky variations of the header and navigation block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.0.4
 *
 * @return void
 */
function jace_register_block_variation() {
	wp_enqueue_script(
		'jace-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		JACE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'jace_register_block_variation' );
