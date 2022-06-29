<?php
/**
 * Title: Page layout seven: Post with cover block background
 * Slug: armando/page-layout-seven
 * Categories: layout, columns
 * Block Types: core/columns, core/cover
 * Viewport Width: 840
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>","dimRatio":30,"minHeight":100,"minHeightUnit":"vh","align":"full"} --><div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"60px"}},"textColor":"white"} /-->
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:group {"backgroundColor":"white","textColor":"black"} -->
		<div class="wp-block-group has-black-color has-white-background-color has-text-color has-background">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><strong><?php echo esc_html_x( 'Sample content. Replace the example cover block with your own image.', 'sample content', 'armando' ); ?></strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:post-author {"showAvatar":false,"byline":"Written by"} /-->
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator is-style-wide"/>
			<!-- /wp:separator -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph --><p><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:paragraph --><p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:spacer {"height":"30px"} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
</div>
<!-- /wp:cover -->
