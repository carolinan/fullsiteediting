<?php
/**
 * Title: Post header with centered featured image
 * Slug: jace/post-header-centered-featured-image
 * Categories: jace-post-header
 * Block Types: core/post-featured-image, core/group, core/post-title
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:post-featured-image /-->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:post-title {"className":"is-style-jace-text-shadow","fontSize":"x-large"} /-->
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group">
	<!-- wp:post-author {"showAvatar":false} /-->
<!-- wp:post-date /-->
<!-- wp:post-terms {"term":"category"} /-->
<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->
<!-- wp:separator {"opacity":"css","backgroundColor":"secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-css-opacity has-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
