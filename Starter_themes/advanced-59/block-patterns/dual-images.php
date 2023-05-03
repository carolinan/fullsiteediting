<?php
/**
 * Dual images block pattern example
 *
 * @package full-site-editing
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Dual images', 'full-site-editing' ),
	'categories' => array( 'featured', 'images' ),
	'blockTypes' => array( 'core/media-text', 'core/image' ),
	'content'    => '
		<!-- wp:media-text {"mediaPosition":"right","mediaLink":"","mediaType":"image","verticalAlignment":"bottom","imageFill":false} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ) . '" alt=""/></figure><div class="wp-block-media-text__content">
		<!-- wp:media-text {"mediaPosition":"right","mediaLink":"","mediaType":"image","isStackedOnMobile":false,"verticalAlignment":"top","imageFill":false} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ) . '" alt=""/></figure><div class="wp-block-media-text__content"></div></div>
		<!-- /wp:media-text --></div></div>
		<!-- /wp:media-text -->
	',
);
