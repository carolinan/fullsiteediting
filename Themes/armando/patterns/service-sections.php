<?php
/**
 * Title: Service sections with circular images and buttons
 * Slug: service-columns
 * Categories: elements
 * Block Types: core/heading, core/paragraph, core/image, core/button
 * Keywords: service
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center"><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="120" height="120"/></figure><!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background"><?php echo esc_html_x( 'Button', 'sample content', 'armando' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center"><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="120" height="120"/></figure><!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background"><?php echo esc_html_x( 'Button', 'sample content', 'armando' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center"><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="120" height="120"/></figure><!-- /wp:image -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background"><?php echo esc_html_x( 'Button', 'sample content', 'armando' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
