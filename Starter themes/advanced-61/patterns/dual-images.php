<?php
/**
 * Title: Dual images block pattern example
 * Slug: full-site-editing/dual-images
 * Categories: featured
 * Block Types: core/media-text
 *
 * @package full-site-editing
 * @since 1.0.0
 */

?>
<!-- wp:media-text {"mediaPosition":"right","mediaLink":"","mediaType":"image","verticalAlignment":"bottom","imageFill":false} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt=""/></figure><div class="wp-block-media-text__content">
<!-- wp:media-text {"mediaPosition":"right","mediaLink":"","mediaType":"image","isStackedOnMobile":false,"verticalAlignment":"top","imageFill":false} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ); ?>" alt=""/></figure><div class="wp-block-media-text__content"></div></div>
<!-- /wp:media-text --></div></div>
<!-- /wp:media-text -->
