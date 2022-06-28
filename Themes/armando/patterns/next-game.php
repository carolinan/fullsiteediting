<?php
/**
 * Title: Next game
 * Slug: armando/next-game
 * Categories: sport
 * Block Types: core/image, core/columns
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:group {"layout":{"inherit":false,"contentSize":"400px"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"align":"center","className":"is-style-armando-border"} -->
	<p class="has-text-align-center is-style-armando-border"><strong><?php echo esc_html_x( 'Next game: April 15, 20:00 CEST', 'sample content', 'armando' ); ?></strong></p>
	<!-- /wp:paragraph -->
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
			<h2 class="has-text-align-center has-large-font-size"><?php echo esc_html_x( 'Team A', 'sample content', 'armando' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="100" height="100"/></figure><!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
			<h2 class="has-text-align-center has-large-font-size"><?php echo esc_html_x( 'Team B', 'sample content', 'armando' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="100" height="100"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background"><strong><?php echo esc_html_x( 'Read more', 'sample content', 'armando' ); ?></strong></a></div>
	<!-- /wp:button -->

	<!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background"><strong><?php echo esc_html_x( 'Watch online', 'sample content', 'armando' ); ?></strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
