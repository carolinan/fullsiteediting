<?php
/**
 * Title: Footer with latest posts
 * Slug: armando/footer-one
 * Description: Footer with call to action, social links, contact information and latest posts.
 * Categories: site-footer
 * Block Types: core/columns, core/social-link
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"light-blue"} -->
<div class="wp-block-columns alignfull has-light-blue-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><strong><?php echo esc_html_x( 'Never miss the latest news', 'sample content', 'armando' ); ?></strong></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background" href="#"><?php echo esc_html_x( 'Join our mailing list', 'sample content', 'armando' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:social-links {"className":"items-justified-left"} -->
<ul class="wp-block-social-links items-justified-left">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><strong><?php echo esc_html_x( 'Contact', 'sample content', 'armando' ); ?></strong></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo _x( 'Company name<br>Street<br>City', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo _x( 'Phone: 00 00 00 00<br>example@example.org', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"tagName":"article"} -->
<article class="wp-block-group">
<!-- wp:latest-posts {"postsToShow":3,"excerptLength":22,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":113,"featuredImageSizeHeight":113} /-->
</article>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
