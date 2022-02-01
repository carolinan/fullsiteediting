<?php
/**
 * Group with transparent gradient
 *
 * @package miniblock-ooak
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Group with transparent gradient', 'miniblock-ooak' ),
	'categories' => array( 'featured', 'text' ),
	'blockTypes' => array( 'core/group' ),
	'content'    => '
		<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,rgb(255,255,255) 0%,rgba(169,183,194,0) 100%)"},"border":{"radius":"8px"}}} -->
		<div class="wp-block-group has-background" style="background:linear-gradient(135deg,rgb(255,255,255) 0%,rgba(169,183,194,0) 100%);border-radius:8px"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
		<h2 class="has-text-align-center has-large-font-size">' . esc_html_x( 'Heading', 'sample content', 'miniblock-ooak' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":20} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'miniblock-ooak' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"align":"center","className":"is-style-fill"} -->
		<div class="wp-block-button aligncenter is-style-fill"><a class="wp-block-button__link">' . esc_html_x( 'Sample button', 'sample content', 'miniblock-ooak' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->

		<!-- wp:spacer {"height":20} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:social-links {"openInNewTab":true,"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links is-style-default"><!-- wp:social-link {"url":"#","service":"etsy"} /-->

		<!-- wp:social-link {"url":"#","service":"instagram"} /-->

		<!-- wp:social-link {"url":"#","service":"deviantart"} /-->

		<!-- wp:social-link {"url":"#","service":"amazon"} /--></ul>
		<!-- /wp:social-links -->

		<!-- wp:spacer {"height":20} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group -->
	',
);
