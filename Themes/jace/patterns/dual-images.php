<?php
/**
 * Dual images block pattern example
 *
 * @package jace
 * @since 1.0.0
 */

return array(
		'title'      => esc_html__( 'Dual images and text', 'jace' ),
		'categories' => array( 'featured' ),
		'blockTypes' => array( 'core/media-text' ),
		'content'    => '
			<!-- wp:media-text {"mediaPosition":"right","mediaId":146,"mediaLink":"","mediaType":"image","verticalAlignment":"bottom","imageFill":false,"gradient":"d-transparent-primary"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom has-d-transparent-primary-gradient-background has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ) . '" alt="" class="wp-image-146 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"className":"is-style-jace-text-shadow","fontSize":"large"} -->
			<h2 class="is-style-jace-text-shadow has-large-font-size"><strong>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'jace' ) . '</strong></h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":30} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:media-text {"mediaPosition":"right","mediaId":147,"mediaLink":"","mediaType":"image","verticalAlignment":"top","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ) . '" alt="" class="wp-image-147 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size"><em>' . esc_html_x( 'Replace the text with your own image description.', 'sample content', 'jace' ) . '</em></p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:media-text --></div></div>
			<!-- /wp:media-text -->
			',
);
