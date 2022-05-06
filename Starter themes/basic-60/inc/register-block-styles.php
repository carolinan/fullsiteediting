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
		'core/button',
		array(
			'name'  => 'full-site-editing-shadow-button',
			'label' => __( 'Button with shadow', 'full-site-editing' ),
		)
	);
}
add_action( 'init', 'full_site_editing_register_block_styles' );
