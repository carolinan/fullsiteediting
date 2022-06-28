<?php
/**
 * Title: Default header
 * Slug: armando/default-header
 * Description: Default Header with menu and two background colors.
 * Categories: site-header
 * Block Types: core/columns, core/site-title, core/search
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"dark-blue","textColor":"white"} -->
<div class="wp-block-columns alignfull has-white-color has-dark-blue-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:2rem;padding-left:2rem">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
	<!-- wp:site-title {"fontSize":"medium"} /-->
	<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"270px","style":{"spacing":{"padding":{"top":"1.25em","right":"2rem","bottom":"1.25em","left":"2rem"}}},"backgroundColor":"silver"} -->
<div class="wp-block-column is-vertically-aligned-center has-silver-background-color has-background" style="padding-top:1.25em;padding-right:2rem;padding-bottom:1.25em;padding-left:2rem;flex-basis:270px">
<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
