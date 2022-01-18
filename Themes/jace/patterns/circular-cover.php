<?php
/**
 * Circular cover block pattern
 *
 * @package jace
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Circular cover block with heading', 'jace' ),
	'categories' => array( 'featured', 'text' ),
	'blockTypes' => array( 'core/cover' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/woman-headphones.jpg' ) ) . '","id":149,"dimRatio":0,"minHeight":740,"minHeightUnit":"px","contentPosition":"bottom center","isDark":false,"className":"is-style-jace-circular-cover jace-header-pattern","style":{"color":{"duotone":["#1d2327","#d3bc8e"]}}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-jace-circular-cover jace-header-pattern" style="min-height:740px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-149" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/woman-headphones.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textColor":"foreground","className":"is-style-jace-text-shadow","fontSize":"xx-large"} -->
		<h2 class="is-style-jace-text-shadow has-foreground-color has-text-color has-xx-large-font-size"><strong>' . _x( 'Create your website with blocks.', 'sample content', 'jace' ) . '</strong></h2>
		<!-- /wp:heading --></div></div>
		<!-- /wp:cover -->
	',
);
