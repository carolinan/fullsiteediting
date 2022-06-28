<?php
/**
 * Title: Basic header with site title and navigation.
 * Slug: armando/header-one
 * Description: Header with title to the left of the navigation.
 * Categories: site-header
 * Block Types: core/site-title, core/navigation
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem","left":"2rem"}}},"backgroundColor":"dark-blue","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-dark-blue-background-color has-background" style="padding-right:2rem;padding-left:2rem">
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"medium"} /-->
<!-- wp:navigation {"textColor":"white","backgroundColor":"dark-blue","align":"full","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->
</div>
<!-- /wp:group -->
