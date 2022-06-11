<?php
/**
 * Title: Circular image with heading
 * Slug: jace/circular-image-with-heading
 * Categories: jace-images
 * Block Types: core/image, core/heading
 * Keywords: circular, image, heading, paragraph, button
 *
 * @package jace
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"className":"jace-pattern-header-image","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group alignwide jace-pattern-header-image"><!-- wp:image {"width":400,"height":400,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="400" height="400"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textColor":"foreground","className":"is-style-jace-text-shadow","fontSize":"xxx-large"} -->
<h2 class="is-style-jace-text-shadow has-foreground-color has-text-color has-xxx-large-font-size"><?php echo _x( '<strong>Create your </strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">website</mark><br><strong> with blocks.</strong>', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
