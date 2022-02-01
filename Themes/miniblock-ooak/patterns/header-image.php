<?php
/**
 * Header image
 *
 * @package miniblock-ooak
 * @since 1.0.1
 */

return array(
	'title'      => esc_html__( 'Header image', 'miniblock-ooak' ),
	'categories' => array( 'headers' ),
	'inserter'   => false,
	'content'    => '
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}},"className":"is-style-default"} -->
	<figure class="wp-block-image size-large is-style-default" style="border-radius:8px">
		<img src="' . esc_url( get_theme_file_uri( 'assets/images/plush3.jpg' ) ) . '"" alt="" /></figure>
	<!-- /wp:image -->
	',
);
