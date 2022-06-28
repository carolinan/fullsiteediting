<?php
/**
 * Title: Overlapping Media and Text with vertical heading
 * Slug: armando/media-overlap-two
 * Categories: elements
 * Block Types: core/media-text
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%">
		<!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content">
		<!-- wp:spacer {"height":"80px"} -->
		<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:group {"className":"is-style-armando-media-overlap"} -->
		<div class="wp-block-group is-style-armando-media-overlap">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><strong><?php echo esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content"></div>
			</div><!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
		</div>
		</div>
		<!-- /wp:media-text -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%">
		<!-- wp:heading {"className":"is-style-armando-vertical-text","fontSize":"x-large"} --><h2 class="is-style-armando-vertical-text has-x-large-font-size"><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2><!-- /wp:heading -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
