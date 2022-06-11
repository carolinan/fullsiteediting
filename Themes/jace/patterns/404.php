<?php
/**
 * Title: 404
 * Slug: jace/404
 * Inserter: no
 *
 * @package jace
 * @since 1.0.0
 */

?>
<!-- wp:heading {"className":"is-style-jace-text-shadow","textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size is-style-jace-text-shadow">
	<?php esc_html_e( 'Page not found', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'jace' ); ?></p><!-- /wp:paragraph -->
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"style":{"border":{"style":"solid","radius":"4px"}},"borderColor":"transparent","backgroundColor":"secondary","layout":{"inherit":true}} -->
<div class="wp-block-group has-border-color has-transparent-border-color has-secondary-background-color has-background" style="border-radius:4px;border-style:solid">
<!-- wp:heading {"textAlign":"left"} -->
<h2 class="has-text-align-left"><?php esc_html_e( 'Latest posts', 'jace' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left"} /-->
<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
