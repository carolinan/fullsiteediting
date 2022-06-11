<?php
/**
 * Title: Blog layout five
 * Slug: jace/blog-layout-5
 * Categories: jace-blog, jace-woo
 * Block Types: core/query, core/post-template
 * Keywords: blog
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:pattern {"slug":"jace/circular-image-with-heading"} /-->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:pattern {"slug":"jace/woo-featured-products-two-columns"} /-->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"3rem"}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textColor":"primary","fontSize":"small"} -->
<h2 class="has-primary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Featured', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:query {"queryId":45,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"displayLayout":{"type":"list"},"align":"full","layout":{"inherit":true},"className":"sticky"} -->
<div class="wp-block-query alignfull sticky"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"200px","className":"is-style-jace-zoom-image is-style-jace-image-border-radius","style":{"spacing":{"margin":{"top":"2.9rem"}}}} /-->
<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:query {"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"full","className":"jace-blog-layout","layout":{"inherit":true}} -->
<div class="wp-block-query alignfull jace-blog-layout">
<!-- wp:heading {"textColor":"primary","fontSize":"small"} --><h2 class="has-primary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Latest', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"border":{"radius":"4px"},"color":{"background":"#f2f2f203"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-background" style="background-color:#f2f2f203;border-radius:4px"><!-- wp:post-featured-image {"isLink":true,"width":"100px","height":"100px","className":"is-style-jace-zoom-image is-style-jace-image-border-radius"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":8,"query":{"perPage":"2","pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"medium"} /-->
<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"extra-small"} /-->
<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query --></div>
<!-- /wp:group -->
