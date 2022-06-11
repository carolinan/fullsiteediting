<?php
/**
 * Title: Blog layout three
 * Slug: jace/blog-layout-3
 * Categories: jace-blog
 * Block Types: core/query, core/post-template
 * Keywords: blog
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"3rem"}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textColor":"primary","fontSize":"small"} -->
<h2 class="has-primary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Featured', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"displayLayout":{"type":"list"},"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"200px","className":"is-style-jace-zoom-image is-style-jace-image-border-radius","style":{"spacing":{"margin":{"top":"2.9rem"}}}} /-->
<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
<!-- wp:post-excerpt /-->
<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"full","className":"jace-blog-layout","layout":{"inherit":true}} -->
<div class="wp-block-query alignfull jace-blog-layout"><!-- wp:heading {"textColor":"primary","fontSize":"small"} --><h2 class="has-primary-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Latest', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"border":{"radius":"4px"},"color":{"background":"#f2f2f203"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-background" style="background-color:#f2f2f203;border-radius:4px"><!-- wp:post-featured-image {"isLink":true,"width":"100px","height":"100px","className":"is-style-jace-zoom-image is-style-jace-image-border-radius"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"medium"} /-->
<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"extra-small"} /-->
<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query --></div>
<!-- /wp:group -->
