<?php
/**
 * Block pattern helper
 *
 * @package full-site-editing
 * @since 1.0.0
 */

/**
 * Display a link to the privacy policy page, if one is published.

 * @since 1.0.0
 *
 * @return string Link to the privacy policy page, if one is published.
 */
function full_site_editing_privacy() {
	if ( get_the_privacy_policy_link() ) {
		return '<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">' . get_the_privacy_policy_link() . '</p><!-- /wp:paragraph -->';
	}
}

