<?php
/**
 * Title: Circular image overlay with heading and CTA
 * Slug: jace/circular-image-overlay-with-heading-and-cta
 * Categories: jace-images
 * Block Types: core/image, core/heading, core/paragraph, core/button
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"-160px"}},"className":"jace-pattern-circular-image-overlay","layout":{"inherit":false}} -->
<div class="wp-block-group jace-pattern-circular-image-overlay"><!-- wp:image {"align":"center","width":413,"height":413,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-headphones2.jpg' ) ); ?>" alt="" width="413" height="413"/></figure>
<!-- /wp:image -->
<!-- wp:image {"align":"right","width":138,"height":138,"sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded is-jace-overlay"} -->
<figure class="wp-block-image alignright size-medium is-resized is-style-rounded is-jace-overlay"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="138" height="138"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group -->
<div class="wp-block-group">
	<!-- wp:heading {"fontSize":"xxx-large"} -->
<h2 class="has-xxx-large-font-size"><?php echo esc_html_x( 'Example heading', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Add your custom product details here. You can also add extra images and change colors.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-jace-shadow-button"} -->
<div class="wp-block-button is-style-jace-shadow-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background"><strong><?php echo esc_html_x( 'Call to Action button', 'sample content', 'jace' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
