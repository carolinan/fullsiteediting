<?php
/**
 * Block patterns
 *
 * @package jace
 * @since 1.0.0
 */

/**
 * Registers block pattern categories.
 *
 * @since 1.0.4
 *
 * @return void
 */
function jace_register_block_pattern_category() {

	register_block_pattern_category(
		'jace-images',
		array( 'label' => esc_html__( 'Jace - Images', 'jace' ) )
	);

	register_block_pattern_category(
		'jace-woo',
		array( 'label' => esc_html__( 'Jace - WooCommerce', 'jace' ) )
	);

	register_block_pattern_category(
		'jace-post-header',
		array( 'label' => esc_html__( 'Jace - Post and page headers', 'jace' ) )
	);

	register_block_pattern_category(
		'jace-pages',
		array( 'label' => esc_html__( 'Jace - Pages', 'jace' ) )
	);

	register_block_pattern_category(
		'jace-sections',
		array( 'label' => esc_html__( 'Jace - Page Sections', 'jace' ) )
	);

	register_block_pattern_category(
		'jace-blog',
		array( 'label' => esc_html__( 'Jace - Blog layouts', 'jace' ) )
	);

	register_block_pattern_category(
		'jace-site-footer',
		array( 'label' => esc_html__( 'Jace - Site Footers', 'jace' ) )
	);

	register_block_pattern_category(
		'jace-site-header',
		array( 'label' => esc_html__( 'Jace - Site Headers', 'jace' ) )
	);

}
add_action( 'init', 'jace_register_block_pattern_category', 9 );
