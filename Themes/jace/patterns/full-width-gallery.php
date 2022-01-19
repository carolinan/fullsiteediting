<?php
/**
 * Full width gallery
 *
 * @package jace
 * @since 1.0.1
 */

return array(
	'title'      => esc_html__( 'Full width gallery row', 'jace' ),
	'categories' => array( 'featured' ),
	'content'    => '
		<!-- wp:gallery {"columns":6,"linkTo":"none","sizeSlug":"thumbnail","align":"full","className":"is-style-jace-no-gutter"} -->
		<figure class="wp-block-gallery alignfull has-nested-images columns-6 is-cropped is-style-jace-no-gutter"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default"} -->
		<figure class="wp-block-image size-thumbnail is-style-default"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-headphones.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-headphones.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image --></figure>
		<!-- /wp:gallery -->
			',
);
