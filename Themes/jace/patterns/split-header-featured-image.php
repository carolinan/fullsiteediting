<?php
/**
 * Title: Post header with featured image
 * Slug: jace/split-header-featured-image
 * Categories: jace-post-header
 * Block Types: core/post-featured-image, core/post-title
 *
 * @package jace
 * @since 1.0.0
 */

?>
<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"className":"is-style-jace-text-shadow","fontSize":"x-large"} /-->
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false} /-->
<!-- wp:post-date /-->
<!-- wp:post-terms {"term":"category"} /-->
<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
