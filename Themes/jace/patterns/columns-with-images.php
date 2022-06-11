<?php
/**
 * Title: Columns with circular images
 * Slug: jace/columns-with-images
 * Categories: jace-images, jace-section
 * Block Types: core/image, core/columns
 *
 * @package jace
 * @since 1.0.1
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ); ?>" alt="" width="200" height="200"/></figure></div>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="200" height="200"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-headphones.jpg' ) ); ?>" alt="" width="200" height="200"/></figure></div>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
