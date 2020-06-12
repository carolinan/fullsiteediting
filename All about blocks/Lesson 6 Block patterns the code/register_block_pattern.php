<?php
/**
 * https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/
 * https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/#pattern-categories
 * Flower: https://www.rijksmuseum.nl/nl/collectie/RP-P-1960-80 public domain.
 * https://wordpress.org/plugins/ninja-forms/
 *
 * Replace the image url, the text domain and prefix.
 *
 * License: GPL v2 or later.
 */

register_block_pattern_category( 'contact-form', array( 'label' => __( 'Contact form', 'textdomain' ) ) );

register_block_pattern(
	'theme-slug/cover-contact-form',
	array(
		'title' => __( 'Cover block for Ninja Forms', 'textdomain' ),
		'categories' => array( 'cover', 'contact-form' ),
		'keywords'   => array( 'flowers' ),
		'content'   => '
		<!-- wp:cover {"url":"assets/images/flora.png","id":48,"dimRatio":65,"minHeight":946,"minHeightUnit":"px","gradient":"vivid-cyan-blue-to-vivid-purple","align":"wide","className":"is-style-prefix-rounded-corners"} -->
		<div class="wp-block-cover alignwide has-background-dim-70 has-background-dim has-background-gradient 
		is-style-prefix-rounded-corners"
		style="background-image:url(assets/images/flora.png);min-height:946px">

		<span aria-hidden="true" class="
		wp-block-cover__gradient-background 
		has-vivid-cyan-blue-to-vivid-purple-gradient-background"></span>
		<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"align":"center","className":"is-style-prefix-text-shadow","fontSize":"larger"} -->
		<h2 class="has-text-align-center is-style-prefix-text-shadow has-larger-font-size">Example heading</h2>
		<!-- /wp:heading -->

		<!-- wp:group -->
		<div class="wp-block-group">
		<div class="wp-block-group__inner-container">
		<!-- wp:ninja-forms/form {"formID":1,"formName":"Contact Me ( ID: 1 )"} --><div class="wp-block-ninja-forms-form">[ninja_forms id=1]</div><!-- /wp:ninja-forms/form -->
		</div></div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":30} -->
		<div style="height:30px" aria-hidden="true" class="wp-block-spacer">
		</div>
		<!-- /wp:spacer -->

		</div>
		</div>
		<!-- /wp:cover -->
		',
	)
);
