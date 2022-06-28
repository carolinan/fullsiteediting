<?php
/**
 * Title: Page layout three: Vertical post title
 * Slug: armando/page-layout-three
 * Categories: layout, columns
 * Block Types: core/columns, core/media-text
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:media-text {"mediaPosition":"right","mediaType":"image","mediaWidth":66,"verticalAlignment":"top","imageFill":false} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top" style="grid-template-columns:auto 66%"><figure class="wp-block-media-text__media"><img src="" alt="" size-full"/></figure><div class="wp-block-media-text__content">
<!-- wp:post-title {"style":{"typography":{"fontSize":"70px"}},"className":"is-style-armando-vertical-text"} /-->
</div></div>
<!-- /wp:media-text -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"120px"} -->
	<div class="wp-block-column" style="flex-basis:120px">
		<!-- wp:post-date /-->
		<!-- wp:post-author {"showAvatar":false} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top">
		<!-- wp:paragraph {"align":"right","fontSize":"small"} --><p class="has-text-align-right has-small-font-size"><em><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'sample content', 'armando' ); ?></em></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:paragraph -->
<p><?php echo _x( '<strong>Pellentesque efficitur nisi enim, sed fermentum quam efficitur sed.</strong> Donec pulvinar, ex vitae facilisis fringilla, quam nulla dictum mi, viverra scelerisque quam lectus vitae dolor. Quisque gravida sed tellus sed fringilla. Ut eu mattis erat.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sed consequat, quam vel vulputate bibendum, sem ipsum feugiat purus, at porta elit lectus non eros. Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut diam mi, semper quis molestie non, molestie quis purus. Mauris euismod gravida ligula, ut elementum velit consectetur eu. Donec volutpat pretium quam, eget convallis est bibendum venenatis. Quisque tincidunt massa et gravida suscipit.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
