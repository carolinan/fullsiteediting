<?php
/**
 * Title: Quote and image
 * Slug: full-site-editing/quote-with-image
 * Categories: featured
 * Block Types: core/image, core/quote
 *
 * @package full-site-editing
 * @since 1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group">
	<!-- wp:quote -->
	<blockquote class="wp-block-quote"><p>Add quote</p><cite>Add citation</cite></blockquote>
	<!-- /wp:quote -->
	<!-- wp:image {"width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full is-resized"><img alt="" width="200" height="200"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
