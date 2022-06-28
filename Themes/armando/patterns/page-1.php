<?php
/**
 * Title: Page layout one
 * Slug: armando/page-layout-one
 * Categories: layout, columns
 * Block Types: core/columns, core/media-text
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:media-text {"backgroundColor":"silver"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile has-silver-background-color has-background"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:media-text -->
<!-- wp:post-title {"style":{"typography":{"fontSize":"48px"}}} /-->
<!-- wp:post-author {"byline":"Written by"} /-->
<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph {"backgroundColor":"silver","fontSize":"small"} -->
<p class="has-silver-background-color has-background has-small-font-size"><em><?php echo esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Donec aliquam egestas nulla, ac lobortis nibh posuere at. Phasellus sed arcu tristique, suscipit velit interdum, finibus sapien.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo _x( '<strong>Quisque eros nulla, condimentum vitae commodo nec?</strong><br>-Aliquet congue lacus. Praesent euismod non enim nec venenatis.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Nullam et dolor nec ipsum pharetra luctus in eget mi. Quisque ac diam eu eros molestie tristique. Quisque ornare accumsan sollicitudin.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:quote {"align":"center","className":"is-style-large"} -->
<blockquote class="wp-block-quote has-text-align-center is-style-large"><p><?php echo esc_html_x( '"Do you see over yonder, friend Sancho, thirty or forty hulking giants? I intend to do battle with them and slay them."', 'sample content', 'armando' ); ?></p><cite><?php echo esc_html_x( '— Don Quixote', 'sample content', 'armando' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Vivamus tempor dui a tortor luctus blandit. Morbi fringilla massa mi, vitae placerat massa sodales et.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Suspendisse potenti. Proin finibus erat nec velit vehicula, ac venenatis velit placerat.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Nulla aliquet risus dolor, at rhoncus mauris auctor eget. Sed gravida euismod ex in viverra.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><strong><?php echo esc_html_x( 'Mauris nec tortor vitae ligula malesuada porta.', 'sample content', 'armando' ); ?></strong> <?php echo esc_html_x( 'Suspendisse venenatis blandit ante, sed tempus orci tincidunt ut.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Duis congue ante justo, quis dapibus metus porta eu.', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
