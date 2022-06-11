<?php
/**
 * Title: Blog layout four
 * Slug: jace/blog-layout-4
 * Categories: jace-blog, jace-woo
 * Block Types: core/query, core/post-template
 * Keywords: blog
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"3rem"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textColor":"primary","fontSize":"medium"} --><h2 class="has-primary-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Featured', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"displayLayout":{"type":"list"},"align":"full","layout":{"inherit":true},"className":"sticky"} -->
<div class="wp-block-query alignfull sticky"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"200px","className":"is-style-jace-zoom-image is-style-jace-image-border-radius","style":{"spacing":{"margin":{"top":"2.9rem"}}}} /-->
<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"textColor":"primary","fontSize":"medium"} --><h2 class="has-primary-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Featured product', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:woocommerce/featured-product {"backgroundColor":"secondary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:3rem"><!-- wp:heading {"textAlign":"left","textColor":"primary"} --><h2 class="has-text-align-left has-primary-color has-text-color"><?php echo esc_html_x( 'From the blog', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"medium"} /-->
<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"extra-small"} /-->
<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query --></div>
<!-- /wp:group -->
