<?php
/**
 * Title: Site header with large logo
 * Slug: jace/site-header-large-logo
 * Categories: jace-site-header
 * Keywords: site header
 * Block Types: core/site-title, core/site-logo, core/navigation
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"background","style":{"spacing":{"padding":{"top":"calc(var(--wp--custom--v-spacing, 1.25rem) *2)","right":"var(--wp--custom--h-spacing, 2.375rem)","bottom":"calc(var(--wp--custom--v-spacing, 1.25rem) *2)","left":"var(--wp--custom--h-spacing, 2.375rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:calc(var(--wp--custom--v-spacing, 1.25rem) *2);padding-right:var(--wp--custom--h-spacing, 2.375rem);padding-bottom:calc(var(--wp--custom--v-spacing, 1.25rem) *2);padding-left:var(--wp--custom--h-spacing, 2.375rem)">
<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":90,"className":"is-style-rounded"} /-->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"extra-small"} /--></div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","className":"is-style-default-navigation is-style-jace-no-bg","style":{"typography":{"fontWeight":"500"}},"fontSize":"extra-small"} /-->
<!-- wp:pattern {"slug":"jace/search-modal"} /-->
</div>
<!-- /wp:group -->
