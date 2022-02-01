<?php
/**
 * Row of buttons
 *
 * @package miniblock-ooak
 * @since 1.0.1
 */

return array(
	'title'      => esc_html__( 'Button menu', 'miniblock-ooak' ),
	'categories' => array( 'buttons', 'featured' ),
	'blockTypes' => array( 'core/buttons' ),
	'content'    => '
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"color":{"background":"#33a7b5"}},"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-text-color has-background" href="#" style="background-color:#33a7b5">' . esc_html_x( 'Button', 'sample content', 'miniblock-ooak' ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"style":{"color":{"background":"#33a7b5"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#33a7b5">' . esc_html_x( 'Button', 'sample content', 'miniblock-ooak' ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"style":{"color":{"background":"#33a7b5"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#33a7b5">' . esc_html_x( 'Button', 'sample content', 'miniblock-ooak' ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"style":{"color":{"background":"#33a7b5"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#33a7b5">' . esc_html_x( 'Button', 'sample content', 'miniblock-ooak' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	',
);
