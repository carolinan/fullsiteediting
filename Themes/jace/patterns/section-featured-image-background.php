<?php
/**
 * Title: Featured image background
 * Slug: jace/featured-image-background
 * Categories: jace-sections
 * Keywords: featured image, background
 * Block Types: core/image, core/post-featured-image
 * viewporWidth: 840
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"className":"alignfull has-background-dim-30 has-background-dim"} -->
<div class="wp-block-cover alignfull has-background-dim-30 has-background-dim"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"backgroundColor":"white","textColor":"black"} -->
<div class="wp-block-group has-black-color has-white-background-color has-text-color has-background">
<!-- wp:heading {"level":3} -->
<h3><?php echo esc_html_x( 'Subheading', 'sample content', 'jace' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo esc_html_x( 'Sample content. Replace the example cover block with your own image.', 'sample content', 'jace' ); ?></strong></p>
<!-- /wp:paragraph -->
<!-- wp:post-author {"showAvatar":false,"byline":"Written by","textColor":"background"} /-->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
