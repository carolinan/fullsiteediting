<?php
/**
 * Title: Featured product with video background
 * Slug: jace/featured-product-video-background
 * Categories: jace-woo
 * Keywords: featured-product, video-background
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:cover {"dimRatio":50,"overlayColor":"foreground","backgroundType":"video","isDark":false,"align":"full"} --><div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-product {"dimRatio":0,"editMode":false,"height":300,"textColor":"secondary"} /-->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"backgroundColor":"transparent","textColor":"background"} -->
<div class="wp-block-column has-background-color has-transparent-background-color has-text-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
<h2 class="has-text-align-left has-large-font-size"><?php echo esc_html_x( 'Product name', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Add your custom product details here. To add the product video background, select the cover block and Add Media.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
