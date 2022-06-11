<?php
/**
 * Title: Featured image site header
 * Slug: jace/site-header-featured-image
 * Categories: jace-site-header
 * Keywords: site header
 * Block Types: core/site-title, core/site-logo, core/navigation
 *
 * @package jace
 * @since 1.0.0
 */

?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":20,"overlayColor":"background","minHeight":200,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:site-logo {"width":60,"className":"is-style-rounded"} /-->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->
<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","className":"is-style-default-navigation is-style-jace-no-bg","layout":{"type":"flex","flexWrap":"wrap"}} /-->
<!-- wp:pattern {"slug":"jace/search-modal"} /-->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
