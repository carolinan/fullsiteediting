<?php
/**
 * Block styles.
 *
 * @package Armando
 * @since 1.0.0
 */

function armando_register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/gallery',
		array(
			'name'         => 'armando-hide-caption',
			'label'        => __( 'Hide caption', 'armando' ),
				'inline_style' => '.is-style-armando-hide-caption figcaption {display:none;}',
			)
		);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/gallery',
		array(
			'name'         => 'armando-gallery-rounded',
			'label'        => __( 'Rounded corners', 'armando' ),
			'inline_style' => '.is-style-armando-gallery-rounded img {border-radius:50%;} .is-style-armando-gallery-rounded figcaption {display:none;}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
			array(
				'name'         => 'armando-rounded-corners',
				'label'        => __( 'Rounded corners (Requires background color)', 'armando' ),
				'inline_style' => '.is-style-armando-rounded-corners {
				border-radius: 6px;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-box-shadow',
			'label'        => __( 'Box shadow', 'armando' ),
			'inline_style' => '.is-style-armando-box-shadow {
				box-shadow: 0 0 1em rgba(0, 0, 0, 0.08);
				padding: 0.5rem;
				border-radius: 2px;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-border',
			'label'        => __( 'Border', 'armando' ),
			'inline_style' => '.is-style-armando-border {
				border: 2px solid currentColor;
				padding: 0.5rem;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/social-links',
		array(
			'name'  => 'armando-social-icons-color',
			'label' => esc_html__( 'Dark blue', 'armando' ),
			'inline_style' => '
			.wp-block-social-links.is-style-armando-social-icons-color a {
				color: var(--wp--preset--color--dark-blue);
			}
			.wp-block-social-links.is-style-armando-social-icons-color .wp-social-link button {
				color: var(--wp--preset--color--dark-blue);
			}
			.wp-block-social-links.is-style-armando-social-icons-color .wp-social-link {
				background: none;
			}',
		)
	);
}
add_action( 'init', 'armando_register_block_styles' );
