<?php
/**
 * About page block pattern example
 *
 * @package jace
 * @since 1.0.0
 */

return array(
		'title'      => esc_html__( 'About page', 'jace' ),
		'categories' => array( 'pages' ),
		'blockTypes' => array( 'core/post-content' ),
		'content'    => '
			<!-- wp:media-text {"mediaPosition":"right","mediaId":6510,"mediaType":"image","verticalAlignment":"bottom","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom">
			<figure class="wp-block-media-text__media"><img alt="" class="wp-image-6510 size-full"/></figure>
			<div class="wp-block-media-text__content"><!-- wp:heading {"className":"is-style-jace-text-shadow","fontSize":"large"} -->
			<h2 class="is-style-jace-text-shadow has-large-font-size"><strong>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'jace' ) . '</strong></h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":30} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:media-text {"mediaPosition":"right","mediaId":6510,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top">
			<figure class="wp-block-media-text__media"><img alt="" class="wp-image-6510 size-full"/></figure>
			<div class="wp-block-media-text__content">
			<!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size"><em>' . esc_html_x( 'Replace the text with your own image description.', 'sample content', 'jace' ) . '</em></p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:media-text --></div></div>
			<!-- /wp:media-text -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide" />
			<!-- /wp:separator -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"fontSize":"normal"} --><p class="has-normal-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'sample content', 'jace' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group"><!-- wp:quote -->
			<blockquote class="wp-block-quote"><p>' . esc_html_x( 'Add quote', 'sample content', 'jace' ) . '</p><cite>' . esc_html_x( 'Add citation', 'sample content', 'jace' ) . '</cite></blockquote>
			<!-- /wp:quote -->

			<!-- wp:image {"id":253,"width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img alt="" class="wp-image-253" width="200" height="200"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:cover {"overlayColor":"quaternary","align":"full","className":"is-light"} -->
			<div class="wp-block-cover alignfull has-quaternary-background-color has-background-dim is-light">
			<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","textColor":"foreground","fontSize":"large"} -->
			<p class="has-text-align-center has-foreground-color has-text-color has-large-font-size">' . esc_html_x( 'Add your cover image and phrase here.', 'sample content', 'jace' ) . '</p>
			<!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:cover -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading -->
			<h2>' . esc_html_x( 'Example heading', 'sample content', 'jace' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"normal"} --><p class="has-normal-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'sample content', 'jace' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"normal"} --><p class="has-normal-font-size">' . esc_html_x( 'Cras malesuada, lectus id condimentum pretium, est mi finibus quam, id lobortis dolor est in ex. Curabitur congue sapien ut enim facilisis aliquam. Pellentesque nec lorem velit.', 'sample content', 'jace' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide" />
			<!-- /wp:separator -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="has-text-align-center">' . esc_html_x( 'Example heading', 'sample content', 'jace' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">' . esc_html_x( 'Example heading', 'sample content', 'jace' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:image {"align":"center","id":6510,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img alt="" class="wp-image-6510" width="120" height="120"/></figure></div>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
			<p class="has-text-align-center has-normal-font-size">' . esc_html_x( 'Example paragraph, replace this with your own text.', 'sample content', 'jace' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">' . esc_html_x( 'Example heading', 'sample content', 'jace' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:image {"align":"center","id":6510,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img alt="" class="wp-image-6510" width="120" height="120"/></figure></div>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
			<p class="has-text-align-center has-normal-font-size">' . esc_html_x( 'Example paragraph, replace this with your own text.', 'sample content', 'jace' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">' . esc_html_x( 'Example heading', 'sample content', 'jace' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:image {"align":"center","id":6510,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img alt="" class="wp-image-6510" width="120" height="120"/></figure></div>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
			<p class="has-text-align-center has-normal-font-size">' . esc_html_x( 'Example paragraph, replace this with your own text.', 'sample content', 'jace' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
			<p class="has-text-align-center has-normal-font-size">Cras malesuada, lectus id condimentum pretium, est mi finibus quam, id lobortis dolor est in ex. Curabitur congue sapien ut enim facilisis aliquam. Pellentesque nec lorem velit.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:social-links {"iconColor":"background","iconColorValue":"#1d2327","iconBackgroundColor":"septenary","iconBackgroundColorValue":"#d3bc8e","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
			<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"behance"} /--></ul>
			<!-- /wp:social-links -->
		',
);
