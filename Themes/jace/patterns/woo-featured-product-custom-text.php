<?php
/**
 * Title: Featured product with custom text
 * Slug: jace/featured-product-custom-text
 * Categories: jace-woo
 * Keywords: product
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-product {"dimRatio":20,"editMode":false,"backgroundColor":"primary","textColor":"secondary"} /--></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"backgroundColor":"primary","textColor":"secondary"} -->
<div class="wp-block-column has-secondary-color has-primary-background-color has-text-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem">
<!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
<h2 class="has-text-align-left has-large-font-size"><?php echo esc_html_x( 'Product name', 'sample content', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph --><p>
<?php echo esc_html_x( 'Add your custom product details here. You can also add extra images and change colors.', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
