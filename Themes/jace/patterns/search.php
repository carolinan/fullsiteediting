<?php
/**
 * Title: Search title
 * Slug: jace/search-title
 * Inserter: no
 *
 * @package jace
 * @since 1.0.0
 */

if ( isset( $_GET['s'] ) ) {
	?>
	<!-- wp:heading {"className":"is-style-jace-text-shadow","fontSize":"x-large"} -->
	<h2 class="is-style-jace-text-shadow has-x-large-font-size">
	<?php
	$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
	/* translators: %s: Search term. */
	echo isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'jace' ), esc_html( $search_term ) ) : __( 'Search results', 'jace' );
	?>
	</h2>
	<!-- /wp:heading -->
	<?php
}
