<?php
/**
 * Block patterns
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

/**
 * Registers block patterns and block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function full_site_editing_register_block_patterns() {

	// Array of block pattern names.
	$block_patterns = array(
		'404',
		'footer-links',
		'columns-with-images',
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( 'block-patterns/' . $block_pattern . '.php' );
		register_block_pattern(
			'full-site-editing/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'full_site_editing_register_block_patterns', 9 );
