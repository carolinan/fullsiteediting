<?php
/**
 * Dual images
 *
 * @package miniblock-ooak
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Dual images', 'miniblock-ooak' ),
	'categories' => array( 'featured', 'text' ),
	'blockTypes' => array( 'core/media-text' ),
	'content'    => '<!-- wp:group {"align":"wide","layout":{"inherit":true},"className":"miniblock-header-pattern"} --><div class="wp-block-group alignwide miniblock-header-pattern">
		<!-- wp:media-text {"mediaPosition":"right","mediaId":146,"mediaLink":"","mediaType":"image","verticalAlignment":"bottom","imageFill":false,"gradient":"d-transparent-primary"} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom has-d-transparent-primary-gradient-background has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush3.jpg' ) ) . '" alt="" class="wp-image-146 size-full"/></figure><div class="wp-block-media-text__content">
		<!-- wp:spacer {"height":30} -->
		<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:media-text {"mediaPosition":"right","mediaId":147,"mediaLink":"","mediaType":"image","isStackedOnMobile":false,"verticalAlignment":"top","imageFill":false} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/plush1.jpg' ) ) . '" alt="" class="wp-image-147 size-full"/></figure><div class="wp-block-media-text__content"></div></div>
		<!-- /wp:media-text --></div></div>
		<!-- /wp:media-text --></div>
		<!-- /wp:group -->
	',
);


