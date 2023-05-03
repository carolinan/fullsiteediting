<?php
/**
 * Block Variations
 *
 * @package full-site-editing
 * @since 1.0.0
 */

/**
 * This is an example of how to register a block variation.
 * Type /full or use the block inserter to insert a full width group block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_register_block_variation() {
	wp_enqueue_script(
		'full-site-editing-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		FULL_SITE_EDITING_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'full_site_editing_register_block_variation' );
