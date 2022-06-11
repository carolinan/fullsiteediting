<?php
/**
 * Title: Default site header
 * Slug: jace/site-header-default
 * Categories: jace-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:group {"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":60,"className":"is-style-rounded"} /-->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","className":"is-style-default-navigation is-style-jace-no-bg","fontSize":"medium"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
