<?php
/**
 * Title: Page layout five: Large quotes.
 * Slug: armando/page-layout-five
 * Categories: layout, columns
 * Block Types: core/columns, core/media-text
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>","dimRatio":50,"contentPosition":"bottom right"} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-right"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote -->
		<blockquote class="wp-block-quote"><p></p></blockquote>
		<!-- /wp:quote --></div></div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:post-title /-->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'Mauris gravida purus in sapien consequat, eget mollis dui finibus. Integer neque neque, luctus eu dignissim et, pharetra ac lorem.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'Sed consequat, quam vel vulputate bibendum, sem ipsum feugiat purus, at porta elit lectus non eros. Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:pullquote -->
<figure class="wp-block-pullquote"><blockquote><p></p></blockquote></figure>
<!-- /wp:pullquote -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>","dimRatio":50,"contentPosition":"bottom right"} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-right"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote -->
		<blockquote class="wp-block-quote"><p></p></blockquote>
		<!-- /wp:quote --></div></div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'Mauris gravida purus in sapien consequat, eget mollis dui finibus. Integer neque neque, luctus eu dignissim et, pharetra ac lorem.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'Sed consequat, quam vel vulputate bibendum, sem ipsum feugiat purus, at porta elit lectus non eros. Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
