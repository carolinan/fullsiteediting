<?php
/**
 * Title: Latest Result
 * Slug: armando/game-results
 * Categories: sport
 * Block Types: core/columns
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:group {"layout":{"inherit":false,"contentSize":"400px"}} -->
<div class="wp-block-group">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
			<h2 class="has-text-align-center has-large-font-size"><?php echo esc_html_x( 'Team A', 'sample content', 'armando' ); ?></h2><!-- /wp:heading -->
			<!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="100" height="100"/></figure><!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom"} -->
		<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"x-large"} -->
			<p class="has-text-align-center has-x-large-font-size" style="line-height:1"><strong><?php echo esc_html_x( '3-1', 'sample content, match result', 'armando' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
			<h2 class="has-text-align-center has-large-font-size"><?php echo esc_html_x( 'Team B', 'sample content', 'armando' ); ?></h2><!-- /wp:heading -->
			<!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="100" height="100"/></figure><!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background" href="#"><strong><?php echo esc_html_x( 'Read more', 'sample content', 'armando' ); ?></strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
