<?php
/**
 * Post header with featured image
 *
 * @package jace
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Split post header with featured image', 'jace' ),
	'categories' => array( 'text', 'featured' ),
	'blockTypes' => array( 'core/post-featured-image' ),
	'content'    => '
		<!-- wp:cover {"dimRatio":0,"minHeight":470,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"wide"} -->
		<div class="wp-block-cover alignwide is-light" style="min-height:470px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
		<div class="wp-block-columns" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"textColor":"white","className":"is-style-jace-text-shadow","fontSize":"x-large"} /-->

		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false} /-->

		<!-- wp:post-date /-->

		<!-- wp:post-terms {"term":"category"} /-->

		<!-- wp:post-terms {"term":"post_tag"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:post-featured-image /--></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div></div>
		<!-- /wp:cover -->
	',
);
