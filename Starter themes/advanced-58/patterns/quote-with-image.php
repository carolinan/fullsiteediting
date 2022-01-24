<?php
/**
 * Quote and image
 *
 * @package full-site-editing
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Quote and image', 'full-site-editing' ),
	'categories' => array( 'featured', 'images' ),
	'blockTypes' => array( 'core/image', 'core/quote' ),
	'content'    => '
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group"><!-- wp:quote -->
		<blockquote class="wp-block-quote"><p>Add quote</p><cite>Add citation</cite></blockquote>
		<!-- /wp:quote -->
		<!-- wp:image {"width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img alt="" width="200" height="200"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group -->
	',
);
