<?php
/**
 * Title: Header with two menus, logo and search
 * Slug: armando/header-three
 * Description: A multiline header with two menus, logo and search.
 * Categories: site-header
 * Block Types: core/columns, core/site-title
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem","left":"2rem"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"dark-blue","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-dark-blue-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-right:2rem;padding-left:2rem">
<!-- wp:navigation {"textColor":"white","backgroundColor":"dark-blue","align":"full","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"20px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"silver"} -->
<div class="wp-block-group alignfull has-silver-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-bottom:20px">
<!-- wp:site-logo {"align":"center","className":"is-style-rounded"} /-->
<!-- wp:search {"label":"Search","showLabel":false,"width":25,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:navigation {"textColor":"black","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"fontSize":"small"} /-->
</div>
<!-- /wp:group -->
