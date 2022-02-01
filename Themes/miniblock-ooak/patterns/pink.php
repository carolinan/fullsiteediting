<?php
/**
 * Pink group block with box shadow
 * 
 * @package miniblock-ooak
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Pink Group with box shadow', 'miniblock-ooak' ),
	'categories' => array( 'featured', 'text' ),
	'blockTypes' => array( 'core/group' ),
	'content'    => '
	<!-- wp:group {"style":{"border":{"radius":"8px"}},"backgroundColor":"pale-pink","className":"is-style-miniblock-ooak-box-shadow"} -->
	<div class="wp-block-group is-style-miniblock-ooak-box-shadow has-pale-pink-background-color has-background" style="border-radius:8px"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'miniblock-ooak' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	',
);
