<?php
/**
 * Title: Top bar
 * Slug: jace/top-bar
 * Categories: jace-woo
 * Keywords: top-bar, announcement
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:group {"tagName":"aside","style":{"spacing":{"padding":{"top":"0.4rem","right":"0.4rem","bottom":"0.4rem","left":"0.4rem"}}},"backgroundColor":"foreground","textColor":"secondary"} -->
<aside class="wp-block-group has-secondary-color has-foreground-background-color has-text-color has-background" style="padding-top:0.4rem;padding-right:0.4rem;padding-bottom:0.4rem;padding-left:0.4rem"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:300"><em>
<?php echo esc_html_x( 'Get 10% off with discount code #JACE20', 'sample content', 'jace' ); ?></em></p>
<!-- /wp:paragraph --></aside>
<!-- /wp:group -->

