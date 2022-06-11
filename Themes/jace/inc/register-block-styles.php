<?php
/**
 * Block styles.
 *
 * @package jace
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function jace_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'jace-flat-button',
			'label' => __( 'Flat', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'jace-shadow-button',
			'label' => __( 'Shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'jace-no-bg',
			'label' => __( 'Transparent', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'jace-grow-button',
			'label' => __( 'Hover: Grow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'jace-pulse-button',
			'label' => __( 'Hover: Pulse', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'woocommerce/all-products',
		array(
			'name'  => 'jace-pulse-button',
			'label' => __( 'Pulse add to cart button', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'woocommerce/product-new',
		array(
			'name'  => 'jace-pulse-button',
			'label' => __( 'Pulse add to cart button', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'jace-zoom-image',
			'label' => __( 'Hover: Zoom', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-featured-image',
		array(
			'name'  => 'jace-zoom-image',
			'label' => __( 'Hover: Zoom', 'jace' ),
		)
	);

	/*
	 * Featured images does not support border radius yet, so a block style is used until it is solved.
	 * @See https://github.com/WordPress/gutenberg/pull/37783/
	*/
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-featured-image',
		array(
			'name'  => 'jace-image-border-radius',
			'label' => __( 'Rounded corners', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'jace-flat-button',
			'label' => __( 'Flat', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'jace-no-bg',
			'label' => __( 'Transparent', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'jace-list-underline',
			'label' => __( 'Underlined', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'jace-checklist',
			'label' => __( 'Checklist', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'jace-list-shadow',
			'label' => __( 'Box Shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'jace-box-shadow',
			'label' => __( 'Box shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'jace-box-shadow',
			'label' => __( 'Box shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'jace-box-shadow',
			'label' => __( 'Box shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'jace-text-shadow',
			'label' => __( 'Text shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/query-title',
		array(
			'name'  => 'jace-text-shadow',
			'label' => __( 'Text shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'jace-text-shadow',
			'label' => __( 'Text shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'jace-text-shadow',
			'label' => __( 'Text shadow', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'jace-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'jace-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'jace-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'jace-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'jace-vertical-text',
			'label' => __( 'Vertical', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'jace-vertical-text',
			'label' => __( 'Vertical', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'jace-vertical-text',
			'label' => __( 'Vertical', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'jace-vertical-text',
			'label' => __( 'Vertical', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'jace-skewed',
			'label' => __( 'Skew', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-featured-image',
		array(
			'name'  => 'jace-skewed',
			'label' => __( 'Skew', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'  => 'jace-skewed',
			'label' => __( 'Skew', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'jace-skewed',
			'label' => __( 'Skew', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'jace-skewed',
			'label' => __( 'Skew', 'jace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'jace-skewed',
			'label' => __( 'Skew', 'jace' ),
		)
	);

}
add_action( 'init', 'jace_register_block_styles' );

/**
 * Unregister the core block style for quotes
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.4
 *
 * @return void
 */
function jace_unregister_block_style() {
	wp_enqueue_script(
		'jace-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		JACE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'jace_unregister_block_style' );
