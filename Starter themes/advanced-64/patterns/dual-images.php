<?php
/**
 * Title: Dual images block pattern example
 * Slug: full-site-editing/dual-images
 * Categories: theme, images
 * Block Types: core/media-text
 *
 * @package full-site-editing
 * @since 1.0.0
 */

?>
<!-- wp:media-text {"mediaPosition":"right","mediaId":139,"mediaType":"image","verticalAlignment":"bottom"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom"><div class="wp-block-media-text__content">
<!-- wp:media-text {"mediaPosition":"right","mediaId":134,"mediaType":"image","verticalAlignment":"top"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><div class="wp-block-media-text__content">
</div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ); ?>" alt="" class="wp-image-134 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" class="wp-image-139 size-full"/></figure></div>
<!-- /wp:media-text -->
