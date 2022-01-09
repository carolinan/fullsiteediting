<?php
/**
 * Search page block pattern
 *
 * @package jace
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Search', 'jace' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '<!-- wp:heading {"className":"is-style-jace-text-shadow","fontSize":"x-large"} --><h2 class="is-style-jace-text-shadow has-x-large-font-size">' . jace_search_title() . '</h2><!-- /wp:heading -->',
);
