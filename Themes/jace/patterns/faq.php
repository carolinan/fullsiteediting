<?php
/**
 * Title: FAQ
 * Slug: jace/faq
 * Categories: jace-sections
 * Block Types: core/core-columns, core/group, core/list
 * Keywords: faq
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.3"}},"textColor":"primary","fontSize":"large"} -->
<h2 class="has-primary-color has-text-color has-large-font-size" style="line-height:1.3"><?php echo esc_html_x( 'FAQ', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><strong><?php echo esc_html_x( 'Learn more about our services', 'sample content', 'jace' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"4px"}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:4px"><!-- wp:heading {"level":3} -->
<h3><?php echo esc_html_x( 'Topic', 'sample content', 'jace' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-default"} -->
<ul class="is-style-default"><li><strong><?php echo esc_html_x( 'Question one?', 'sample content', 'jace' ); ?></strong><br><?php echo esc_html_x( 'Add your answer here', 'sample content', 'jace' ); ?></li><li><strong><?php echo esc_html_x( 'Question two?', 'sample content', 'jace' ); ?></strong><br><?php echo esc_html_x( 'Add your answer here', 'sample content', 'jace' ); ?></li><li><strong><?php echo esc_html_x( 'Question three?', 'sample content', 'jace' ); ?></strong><br><?php echo esc_html_x( 'Add your answer here', 'sample content', 'jace' ); ?></li></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"4px"}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:4px"><!-- wp:heading {"level":3} -->
<h3><?php echo esc_html_x( 'Topic', 'sample content', 'jace' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"className":"is-style-default"} -->
<ul class="is-style-default"><li><strong><?php echo esc_html_x( 'Question one?', 'sample content', 'jace' ); ?></strong><br><?php echo esc_html_x( 'Add your answer here', 'sample content', 'jace' ); ?></li><li><strong><?php echo esc_html_x( 'Question two?', 'sample content', 'jace' ); ?></strong><br><?php echo esc_html_x( 'Add your answer here', 'sample content', 'jace' ); ?></li><li><strong><?php echo esc_html_x( 'Question three?', 'sample content', 'jace' ); ?></strong><br><?php echo esc_html_x( 'Add your answer here', 'sample content', 'jace' ); ?></li></ul>
<!-- /wp:list -->
<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
