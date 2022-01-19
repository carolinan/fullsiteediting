<?php
/**
 * Two buttons
 *
 * @package jace
 * @since 1.0.1
 */

return array(
	'title'      => esc_html__( 'Two buttons below a paragraph', 'jace' ),
	'categories' => array( 'featued', 'buttons' ),
	'blockTypes' => array( 'core/buttons' ),
	'content'    => '
		<!-- wp:paragraph {"fontSize":"normal"} --><p class="has-normal-font-size">' . _x( 'Example paragraph, replace this with your own text.<br>You can use different colored buttons for your primary and secondary call to actions.', 'sample content', 'jace' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background">' . esc_html_x( 'Button one', 'sample content', 'jace' ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"backgroundColor":"secondary","textColor":"foreground"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-secondary-background-color has-text-color has-background">' . esc_html_x( 'Button two', 'sample content', 'jace' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	',
);
