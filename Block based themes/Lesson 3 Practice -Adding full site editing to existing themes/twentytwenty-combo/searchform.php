<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Twenty_Twenty_Combo
 * @since Twenty Twenty Combo 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwentycombo_unique_id = twentytwentycombo_unique_id( 'search-form-' );

$twentytwentycombo_aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>
<form role="search" <?php echo $twentytwentycombo_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $twentytwentycombo_unique_id ); ?>">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'twentytwenty-combo' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
		<input type="search" id="<?php echo esc_attr( $twentytwentycombo_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty-combo' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty-combo' ); ?>" />
</form>
