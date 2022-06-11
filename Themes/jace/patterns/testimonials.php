<?php
/**
 * Title: Testimonial with images
 * Slug: jace/testimonial-with-images
 * Categories: jace-sections
 * Keywords: testimonials
 * Block Types: core/image, core/columns, core/quote
 *
 * @package jace
 * @since 1.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-headphones.jpg' ) ); ?>" alt="" width="120" height="120"/></figure>
<!-- /wp:image -->
<!-- wp:quote {"align":"center"} -->
<blockquote class="wp-block-quote has-text-align-center"><p><?php echo esc_html_x( 'Add your testimonial here', 'sample content', 'jace' ); ?></p><cite><em><?php echo esc_html_x( 'Customer name', 'sample content', 'jace' ); ?></em></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ); ?>" alt="" class="wp-image-1932" width="120" height="120"/></figure>
<!-- /wp:image -->
<!-- wp:quote {"align":"center"} -->
<blockquote class="wp-block-quote has-text-align-center"><p><?php echo esc_html_x( 'Add your testimonial here', 'sample content', 'jace' ); ?></p><cite><em><?php echo esc_html_x( 'Customer name', 'sample content', 'jace' ); ?>
</em></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="120" height="120"/></figure>
<!-- /wp:image -->
<!-- wp:quote {"align":"center"} -->
<blockquote class="wp-block-quote has-text-align-center"><p><?php echo esc_html_x( 'Add your testimonial here', 'sample content', 'jace' ); ?></p><cite><em><?php echo esc_html_x( 'Customer name', 'sample content', 'jace' ); ?></em></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
