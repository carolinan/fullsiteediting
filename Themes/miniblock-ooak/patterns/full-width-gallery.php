<?php
/**
 * Full width gallery
 *
 * @package miniblock-ooak
 * @since 1.0.1
 */

return array(
	'title'      => esc_html__( 'Full width gallery row', 'miniblock-ooak' ),
	'categories' => array( 'featured', 'gallery' ),
	'blockTypes' => array( 'core/gallery' ),
	'content'    => '
		<!-- wp:gallery {"columns":6,"linkTo":"none","sizeSlug":"thumbnail","align":"full"} -->
		<figure class="wp-block-gallery alignfull has-nested-images columns-6 is-cropped"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush3.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default"} -->
		<figure class="wp-block-image size-thumbnail is-style-default"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush2.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush1.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush3.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush2.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
		<figure class="wp-block-image size-thumbnail"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush1.jpg' ) ) . '" alt="" /></figure>
		<!-- /wp:image --></figure>
		<!-- /wp:gallery -->
			',
);
