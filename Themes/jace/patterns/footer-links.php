<?php
/**
 * Footer block pattern
 *
 * @package jace
 * @since 1.0.0
 */

return array(
		'title'      => esc_html__( 'Footer links', 'jace' ),
		'categories' => array( 'text' ),
		'inserter'   => false,
		'content'    => '<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
			<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} --><div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . __( 'Copyright', 'jace' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'jace' ) ) . '</p><!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->' . jace_privacy() . '
			<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#d3bc8e","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
			<!-- /wp:social-links -->
			</div><!-- /wp:group -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"4px","bottom":"0px","left":"6px","right":"6px"}}},"className":"is-style-jace-shadow-button","fontSize":"extra-small"} -->
			<div class="wp-block-button has-custom-font-size is-style-jace-shadow-button has-extra-small-font-size"><a class="wp-block-button__link" href="' .  esc_url( home_url('/') ) . '?s" style="border-radius:4px;padding-top:4px;padding-right:6px;padding-bottom:0px;padding-left:6px">
			<svg id="search-icon" class="search-icon" viewBox="0 0 24 24" width="24" height="24" fill="#f0f0f1"><path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg>
			</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}}},"className":"is-style-jace-shadow-button","fontSize":"extra-small"} -->
			<div class="wp-block-button has-custom-font-size is-style-jace-shadow-button has-extra-small-font-size"><a class="wp-block-button__link" href="#" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px">🡅</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
			</div><!-- /wp:group -->',
);
