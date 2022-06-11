<?php
/**
 * Title: Footer buttons
 * Slug: jace/footer-buttons
 * Inserter: false
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"2px","right":"2px"}}},"className":"is-style-jace-no-bg","fontSize":"extra-small"} -->
<div class="wp-block-button has-custom-font-size is-style-jace-no-bg has-extra-small-font-size"><a class="wp-block-button__link" href="<?php echo esc_url( home_url( '/?s' ) ); ?>" style="border-radius:4px;padding-top:0px;padding-right:2px;padding-bottom:0px;padding-left:2px">
<svg xmlns="http://www.w3.org/2000/svg" class="search-icon" role="img" alt="" aria-label="<?php esc_attr_e( 'Go to search page', 'jace' ); ?>" viewBox="0 0 24 24" width="40" height="40" fill="currentColor"><path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg>
</a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"2px","right":"2px"}}},"className":"is-style-jace-no-bg","fontSize":"extra-small"} -->
<div class="wp-block-button has-custom-font-size is-style-jace-no-bg has-extra-small-font-size"><a class="wp-block-button__link" href="#" style="border-radius:4px;padding-top:0px;padding-right:2px;padding-bottom:0px;padding-left:2px">
<svg xmlns="http://www.w3.org/2000/svg" class="go-to-top-icon" role="img" alt="" aria-label="<?php esc_attr_e( 'Go to top', 'jace' ); ?>" viewBox="0 0 24 24" width="40" height="40" fill="currentColor"><path d="M12.5 3.9L6.7 9.7l1.1 1.1 4-4V20h1.4V6.7l4.5 4.1 1.1-1.1z"></path></svg></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
