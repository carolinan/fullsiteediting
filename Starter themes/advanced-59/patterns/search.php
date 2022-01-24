<?php
/**
 * Search page block pattern
 *
 * @package full-site-editing
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Search', 'full-site-editing' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '<!-- wp:heading {"className":"is-style-full-site-editing-text-shadow","fontSize":"x-large"} --><h2 class="is-style-full-site-editing-text-shadow has-x-large-font-size">' . full_site_editing_search_title() . '</h2><!-- /wp:heading -->',
);
