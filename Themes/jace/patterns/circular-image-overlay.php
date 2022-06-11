<?php
/**
 * Title: Circular image overlay
 * Slug: jace/circular-image-overlay
 * Categories: jace-images
 * Block Types: core/image
 *
 * @package jace
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"-160px"}},"layout":{"inherit":false},"className":"jace-pattern-circular-image-overlay"} -->
<div class="wp-block-group jace-pattern-circular-image-overlay"><!-- wp:image {"align":"center","width":550,"height":550,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-headphones2.jpg' ) ); ?>" alt="" width="550" height="550"/></figure>
<!-- /wp:image -->
<!-- wp:image {"align":"right","width":300,"height":300,"sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded is-jace-overlay"} -->
<figure class="wp-block-image alignright size-medium is-resized is-style-rounded is-jace-overlay"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="300" height="300"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
