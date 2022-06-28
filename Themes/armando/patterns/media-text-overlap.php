<?php
/**
 * Title: Overlapping Media and Text
 * Slug: armando/media-overlap
 * Categories: elements
 * Block Types: core/media-text
 *
 * @package armando
 * @since 2.0.0
 */

?>

<!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" class="wp-image-1932 size-full"/></figure>
<div class="wp-block-media-text__content">
	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
	<p class="has-large-font-size"><strong><?php echo esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ); ?></strong></p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"backgroundColor":"black","textColor":"white","className":"is-style-armando-media-overlap"} -->
	<div class="wp-block-group is-style-armando-media-overlap has-white-color has-black-background-color has-text-color has-background">
		<!-- wp:heading {"textColor":"white"} --><h2 class="has-white-color has-text-color"><?php echo esc_html_x( 'Heading', 'sample-content', 'armando' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph --><p><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
</div>
<!-- /wp:media-text -->
