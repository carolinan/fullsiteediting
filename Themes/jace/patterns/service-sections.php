<?php
/**
 * Service sections with circular images and buttons
 *
 * @package jace
 * @since 1.0.1
 */

return array(
	'title'      => esc_html__( 'Service sections with circular images and buttons', 'jace' ),
	'categories' => array( 'featured' ),
	'content'    => '
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'jace' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
		<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-headphones.jpg' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
		<!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ) . '</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-small-font-size"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'jace' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'jace' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
		<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
		<!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ) . '</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-small-font-size"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'jace' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'jace' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
		<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
		<!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ) . '</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"contentJustification":"center"} -->
		<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-small-font-size"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'jace' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
	',
);
