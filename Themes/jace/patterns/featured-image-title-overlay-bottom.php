<?php
/**
 * Title: Featured image with title overlay
 * Slug: jace/featured-image-title-overlay
 * Categories: jace-post-header
 * Keywords: featured image, title, overlay
 * Block Types: core/post-featured-image
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"-80px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:group {"className":"is-jace-overlay","layout":{"contentSize":"340px"}} -->
<div class="wp-block-group is-jace-overlay"><!-- wp:group {"style":{"border":{"radius":"4px"}},"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:4px">
<!-- wp:post-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
