<?php
/**
 * Title: Full screen featured image cover block
 * Slug: jace/full-featured-image-cover
 * Categories: jace-post-header
 * Block Types: core/post-featured-image, core/post-author, core/post-date, core/post-title
 *
 * @package jace
 * @since 1.0.0
 */

?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-center" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:post-title {"textAlign":"center","textColor":"background","fontSize":"xx-large"} /-->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
<!-- wp:post-author {"showAvatar":false,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium"} /-->
<!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
