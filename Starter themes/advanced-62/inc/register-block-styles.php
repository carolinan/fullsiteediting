<?php
/**
 * Block styles.
 *
 * @package full-site-editing
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'full-site-editing-flat-button',
			'label' => __( 'Flat button', 'full-site-editing' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'full-site-editing-navigation-button',
			'label' => __( 'Button style', 'full-site-editing' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'full-site-editing-list-underline',
			'label' => __( 'Underlined list items', 'full-site-editing' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'full-site-editing-box-shadow',
			'label' => __( 'Box shadow', 'full-site-editing' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'full-site-editing-box-shadow',
			'label' => __( 'Box shadow', 'full-site-editing' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'full-site-editing-box-shadow',
			'label' => __( 'Box shadow', 'full-site-editing' ),
		)
	);
}
add_action( 'init', 'full_site_editing_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_unregister_block_style() {
	wp_enqueue_script(
		'full-site-editing-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		FULL_SITE_EDITING_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'full_site_editing_unregister_block_style' );
