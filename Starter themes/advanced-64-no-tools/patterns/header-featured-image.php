<?php
/**
 * Title: Post header with featured image
 * Slug: full-site-editing/post-header-featured-image
 * Categories: theme
 * Block Types: core/post-title, core/post-featured-image

 * @package full-site-editing
 * @since 1.0.0
 */

?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:post-title {"textAlign":"center","align":"wide","textColor":"contrast","level":1} /-->
</div></div>
<!-- /wp:cover -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:pattern {"slug":"full-site-editing/hidden-post-meta"} /-->
</div>
<!-- /wp:group -->
