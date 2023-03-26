<?php
/**
 * Title: Post header with featured image
 * Slug: full-site-editing/post-header-featured-image
 * Categories: featured
 * Block Types: core/post-title, core/post-featured-image

 * @package full-site-editing
 * @since 1.0.0
 */

?>
<!-- wp:cover {"dimRatio":0,"minHeight":470,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"wide"} -->
<div class="wp-block-cover alignwide is-light" style="min-height:470px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:0px">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
	<!-- wp:post-title {"textColor":"contrast"} /-->

	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group">
		<!-- wp:post-author {"showAvatar":false,"fontSize":"medium"} /-->
		<!-- wp:post-date {"fontSize":"medium"} /-->
		<!-- wp:post-terms {"term":"category","fontSize":"medium"} /-->
		<!-- wp:post-terms {"term":"post_tag","fontSize":"medium"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
</div>
<!-- /wp:cover -->
