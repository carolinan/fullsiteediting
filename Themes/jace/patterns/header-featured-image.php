<?php
/**
 * Post header with featured image
 *
 * @package jace
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Post header with featured image', 'jace' ),
	'categories' => array( 'text', 'featured' ),
	'blockTypes' => array( 'core/post-featured-image' ),
	'content'    => '
		<!-- wp:cover {"gradient":"d-transparent-primary","contentPosition":"center center","isDark":false,"align":"wide"} -->
		<div class="wp-block-cover alignwide is-light"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-d-transparent-primary-gradient-background has-background-dim has-background-gradient has-d-transparent-primary-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
		<div class="wp-block-group"><!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group"><!-- wp:post-title {"textColor":"white","className":"is-style-jace-text-shadow","fontSize":"x-large"} /-->
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group">
		<!-- wp:post-author {"showAvatar":false} /-->
		<!-- wp:post-date /-->
		<!-- wp:post-terms {"term":"category"} /-->
		<!-- wp:post-terms {"term":"post_tag"} /-->
		</div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- wp:post-featured-image {"width":"550px","height":"550px"} /--></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->
	',
);
