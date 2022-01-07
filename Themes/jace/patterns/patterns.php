<?php
/**
 * Block patterns
 *
 * @package jace
 * @since 1.0.0
 */

/**
 * Display the search term in the heading on the search page.
 * Todo: Remove when the Query title block is updated to work for the search page.
 *
 * @since 1.0.0
 */
function jace_search_title() {
	/* translators: %s: Search term. */
	return isset( $_GET['s'] ) ? sprintf( esc_html__( 'Search results for "%s"', 'jace' ), esc_html( $_GET['s'] ) ) : __( 'Search results', 'jace' );
}

/**
 * Display a link to the privacy policy page, if one is published.

 * @since 1.0.0
 */
function jace_privacy() {
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
function jace_register_block_patterns() {

	/**
	 * Register an example block pattern category.
	 *
	 * @since 1.0.0
	 */
	register_block_pattern_category(
		'pages',
		array( 'label' => esc_html__( 'Pages', 'jace' ) )
	);

	// Array of block pattern names.
	$block_patterns = array(
		'about-page',
		'search',
		'404',
		'footer-links',
		'dual-images'
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( 'patterns/' . $block_pattern . '.php' );
		register_block_pattern(
			'jace/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'jace_register_block_patterns', 9 );

/**
 * This is an example of how to unregister a core block pattern and a block pattern category.
 *
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/
 *
 * @since 1.0.0
 */
function jace_unregister_patterns() {
	unregister_block_pattern( 'core/query-small-posts' );
	unregister_block_pattern( 'core/query-large-title-posts' );
	unregister_block_pattern( 'core/query-offset-posts' );
	unregister_block_pattern_category( 'header' );
}
add_action( 'init', 'jace_unregister_patterns', 9 );
