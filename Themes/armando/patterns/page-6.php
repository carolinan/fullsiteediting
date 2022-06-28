<?php
/**
 * Title: Page layout six: Cover image and large author profile
 * Slug: armando/page-layout-six
 * Categories: layout, columns
 * Block Types: core/columns, core/cover
 * Viewport Width: 840
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%">
		<!-- wp:cover {"overlayColor":"dark-blue","contentPosition":"bottom left"} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left"><span aria-hidden="true" class="wp-block-cover__background has-dark-blue-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"style":{"typography":{"fontSize":"60px"}}} /--></div></div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%">
		<!-- wp:post-author {"avatarSize":96,"showBio":true} /-->
		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:post-date {"fontSize":"small"} /-->
		<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
		<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /-->
		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white","className":"has-custom-font-size has-small-font-size"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background"><?php echo esc_html_x( 'Contact', 'sample content', 'armando' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
		<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000","className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"service":"wordpress"} /-->
		<!-- wp:social-link {"service":"twitter"} /-->
		<!-- wp:social-link {"service":"instagram"} /--></ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:heading -->
<h2><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph --><p><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ); ?></p><!-- /wp:paragraph -->
