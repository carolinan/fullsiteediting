<?php
/**
 * Circular image pattern
 *
 * @package jace
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Circular image with heading', 'jace' ),
	'categories' => array( 'featured', 'text' ),
	'blockTypes' => array( 'core/image' ),
	'content'    => '
		<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"},"className":"jace-header-pattern"} -->
		<div class="wp-block-group alignwide jace-header-pattern"><!-- wp:image {"id":173,"width":400,"height":400,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1d2327","#d3bc8e"]}},"className":"is-style-rounded"} -->
		<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ) . '" alt="" class="wp-image-173" width="400" height="400"/></figure>
		<!-- /wp:image -->
		<!-- wp:heading {"textColor":"foreground","className":"is-style-jace-text-shadow is-style-default","fontSize":"xx-large"} -->
		<h2 class="is-style-jace-text-shadow is-style-default has-foreground-color has-text-color has-xx-large-font-size">' . _x( '<strong>Create your </strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">website</mark><br><strong> with blocks.</strong>', 'sample content', 'jace' ) . '</h2>
		<!-- /wp:heading --></div>
		<!-- /wp:group -->
	',
);
