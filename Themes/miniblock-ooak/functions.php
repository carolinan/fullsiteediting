<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package miniblock-ooak
 * @since 1.0.0
 */

/**
 * Add theme support for block styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function miniblock_ooak_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'miniblock_ooak_setup' );

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function miniblock_ooak_styles() {
	wp_enqueue_style(
		'miniblock-style',
		get_stylesheet_uri(),
		'',
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'miniblock_ooak_styles' );

 /**
 * Registers block patterns.
 *
 * @since 1.0.0
 *
 * @return void
 */
function miniblock_ooak_register_block_patterns() {

	// Array of block pattern names.
	$block_patterns = array(
		'dual-images',
		'columns-with-images',
		'service-sections',
		'full-width-gallery',
		'header-image',
		'transparent-gradient',
		'pink',
		'button-menu'
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( 'patterns/' . $block_pattern . '.php' );
		register_block_pattern(
			'miniblock/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'miniblock_ooak_register_block_patterns', 9 );

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function miniblock_ooak_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'miniblock-ooak-flat-button',
			'label' => __( 'Flat button', 'miniblock-ooak' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'miniblock-ooak-shadow-button',
			'label' => __( 'Button with shadow', 'miniblock-ooak' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'miniblock-ooak-box-shadow',
			'label' => __( 'Box shadow', 'miniblock-ooak' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'miniblock-ooak-box-shadow',
			'label' => __( 'Box shadow', 'miniblock-ooak' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'miniblock-ooak-box-shadow',
			'label' => __( 'Box shadow', 'miniblock-ooak' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'miniblock-ooak-text-shadow',
			'label' => __( 'Text shadow', 'miniblock-ooak' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'miniblock-ooak-text-shadow',
			'label' => __( 'Text shadow', 'miniblock-ooak' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'miniblock-ooak-text-shadow',
			'label' => __( 'Text shadow', 'miniblock-ooak' ),
		)
	);
}
add_action( 'init', 'miniblock_ooak_register_block_styles' );
