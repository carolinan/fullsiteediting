<?php
/**
 * Title: 404
 * Slug: full-site-editing/404
 * Categories: text
 * Inserter: no
 *
 * @package full-site-editing
 * @since 1.0.0
 */
?>
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">
	<?php esc_html_e( 'Page not found', 'full-site-editing' ); ?>
</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'full-site-editing' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Search form label', 'full-site-editing' ); ?>","showLabel":false,"buttonText":"<?php echo esc_html_x( 'Search', 'Search form submit button text', 'full-site-editing' ); ?>"} /-->
