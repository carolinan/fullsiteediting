<?php
/**
 * Dual images block pattern
 *
 * @package jace
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Dual images and text', 'jace' ),
	'categories' => array( 'featured', 'text' ),
	'blockTypes' => array( 'core/media-text' ),
	'content'    => '<!-- wp:group {"align":"wide","layout":{"inherit":true},"className":"jace-header-pattern"} --><div class="wp-block-group alignwide jace-header-pattern">
		<!-- wp:media-text {"mediaPosition":"right","mediaId":146,"mediaLink":"","mediaType":"image","verticalAlignment":"bottom","imageFill":false,"gradient":"d-transparent-primary"} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom has-d-transparent-primary-gradient-background has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ) . '" alt="" class="wp-image-146 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"className":"is-style-jace-text-shadow","fontSize":"xx-large"} -->
		<h2 class="is-style-jace-text-shadow has-xx-large-font-size">' . _x( '<strong>Create your </strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">website</mark><strong> with blocks.</strong>', 'sample content', 'jace' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:spacer {"height":30} -->
		<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:media-text {"mediaPosition":"right","mediaId":147,"mediaLink":"","mediaType":"image","isStackedOnMobile":false,"verticalAlignment":"top","imageFill":false} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ) . '" alt="" class="wp-image-147 size-full"/></figure><div class="wp-block-media-text__content"></div></div>
		<!-- /wp:media-text --></div></div>
		<!-- /wp:media-text --></div>
		<!-- /wp:group -->
	',
);


