<?php
/**
 * Register block patterns.
 * Include this file in your theme, and update image paths, prefix and text domain.
 *
 * @link https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/
 */

/**
 * Make sure that block patterns are enabled before registering.
 * Requires WordPress version 5.5 or Gutenberg version 7.8.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	/**
	 * Check if the register_block_pattern_category exists.
	 * Requires WordPress 5.5 or Gutenberg version 8.2.
	 */
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category( 'forms', array( 'label' => __( 'Forms', 'text-domain' ) ) );
		register_block_pattern_category( 'example', array( 'label' => __( 'Example', 'text-domain' ) ) );
		register_block_pattern_category( 'blog', array( 'label' => __( 'Blog', 'text-domain' ) ) );
		register_block_pattern_category( 'shop', array( 'label' => __( 'Shop', 'text-domain' ) ) );
	}

	/**
	 * Example 1: Contact form with flower background.
	 * Requires the Ninja Forms plugin: https://wordpress.org/plugins/ninja-forms/
	 * The form ID used in the example is the default ID.
	 *
	 * First, check if Ninja Forms is active.
	 */
	if ( class_exists( 'Ninja_Forms' ) ) {
		/**
		 * Register the pattern.
		 */
		register_block_pattern(
			'theme-slug/pattern-slug',
			array(
				'title'       => __( 'Contact form', 'text-domain' ),
				'categories'  => array( 'forms', 'example' ),
				'keywords'    => array( __( 'Contact', 'text-domain' ), __( 'Ninja', 'text-domain' ) ),
				'description' => __( 'A contact form with a flower background image and a heading above it.', 'text-domain' ),
				'content'     => '
					<!-- wp:cover {"className":"theme-slug-contact-form", "url":"' . esc_url( get_theme_file_uri( 'assets/images/flora.png' ) ) . '",
					"id":2038,"gradient":"blush-light-purple","contentPosition":"top center","align":"wide"} -->
					<div class="wp-block-cover theme-slug-contact-form alignwide has-background-dim has-background-gradient 
					has-custom-content-position is-position-top-center" 
					style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/flora.png' ) ) . ')">
					<span aria-hidden="true" class="wp-block-cover__gradient-background 
					has-blush-light-purple-gradient-background"></span>
					<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"align":"center","style":{"typography":{"fontSize":60}}} -->
					<h2 class="has-text-align-center" style="font-size:60px">' . __( 'Book an appointment', 'text-domain' ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:ninja-forms/form {"formID":1,"formName":"Contact Me ( ID: 1 )"} -->
					<div class="wp-block-ninja-forms-form">[ninja_forms id=1]</div>
					<!-- /wp:ninja-forms/form --></div></div>
					<!-- /wp:cover -->',
			)
		);
	}

	/**
	 * Example 2: Use a variable for the content.
	 * Uses the Ninja Forms plugin: https://wordpress.org/plugins/ninja-forms/
	 * The form ID used in the example is the default ID.
	 */

	$content = '
		<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/flora.png' ) ) . '",
		"id":2038,"gradient":"blush-light-purple","contentPosition":"top center","align":"wide"} -->
		<div class="wp-block-cover alignwide has-background-dim has-background-gradient 
		has-custom-content-position is-position-top-center" 
		style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/flora.png' ) ) . ')">
		<span aria-hidden="true" class="wp-block-cover__gradient-background 
		has-blush-light-purple-gradient-background"></span>
		<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"align":"center","style":{"typography":{"fontSize":60}}} -->
		<h2 class="has-text-align-center" style="font-size:60px">' . __( 'Book an appointment', 'text-domain' ) . '</h2>
		<!-- /wp:heading -->';

	/** Check if Ninja forms is active. */
	if ( function_exists( 'ninja_forms' ) ) {
		$content .= ' <!-- wp:ninja-forms/form {"formID":1,"formName":"Contact Me ( ID: 1 )"} -->
			<div class="wp-block-ninja-forms-form">[ninja_forms id=1]</div>
			<!-- /wp:ninja-forms/form -->';
		/**
		 * If not, display a message asking to install and activate the plugin.
		 * -This can be improved to make sure that the message is not displayed to visitors.
		*/
	} elseif ( current_user_can( 'publish_posts' ) ) {
		$content .= '<!-- wp:paragraph --><p>' . __( 'Please install a contact form plugin to use with this pattern.', 'text-domain' ) . '</p><!-- /wp:paragraph -->';
	}

	$content .= '</div></div><!-- /wp:cover -->';

	register_block_pattern(
		'theme-slug/contact-form-2',
		array(
			'title'       => __( 'Contact form 2', 'text-domain' ),
			'categories'  => array( 'forms', 'example' ),
			'keywords'    => array( __( 'Contact', 'text-domain' ), __( 'Ninja', 'text-domain' ) ),
			'description' => __( 'A contact form with a flower background image and a heading above it.', 'text-domain' ),
			'content'     => $content,
		)
	);

	/**
	 * Blog and store section using WooCommerce.
	 * https://wordpress.org/plugins/woocommerce/
	 *
	 * Important: This block pattern was made using the demo content available in WooCommerce,
	 * You can import the example goods first, or adjust the product category and featured product ID.
	 * This content is only used as an example.
	*/

	/** Check if WooCommerce is active. */
	if ( class_exists( 'WooCommerce' ) ) {
		/**
		 * Register the pattern.
		 */
		register_block_pattern(
			'theme-slug/blog-shop',
			array(
				'title'       => __( 'Blog with shop columns', 'text-domain' ),
				'categories'  => array( 'blog', 'shop' ),
				'keywords'    => array( __( 'Shop', 'text-domain' ), __( 'Blog', 'text-domain' ) ),
				'description' => __( 'A list of the latest posts and two columns of shop content.', 'text-domain' ),
				'content'     => '
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:latest-posts {"categories":[],"displayPostContent":true,"excerptLength":27,"displayAuthor":true,"displayPostDate":true} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:woocommerce/featured-category {"editMode":false,"height":564,"overlayColor":"primary","categoryId":209} -->
				<!-- wp:button {"align":"center"} -->
				<div class="wp-block-button aligncenter">
				<a class="wp-block-button__link" href="' . esc_url( home_url( '/' ) . '/product-category/clothing/' ) . '">' . __( 'Shop now', 'text-domain' ) . '</a></div>
				<!-- /wp:button -->
				<!-- /wp:woocommerce/featured-category --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:woocommerce/handpicked-products {"align":"wide","columns":1,"editMode":false,"products":[1895]} /--></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->',
			)
		);
	}


	/**
	 * Cover block store section using WooCommerce.
	 * https://wordpress.org/plugins/woocommerce/
	 *
	 * Important: This block pattern was made using the demo content available in WooCommerce,
	 * You can import the example goods first, or adjust the product category and featured product ID.
	 * This content is only used as an example.
	 *
	 * The text in this block pattern can be improved by adding context for translators.
	 *
	 * Background photo from PXhere, public domain.
	*/

	/** Check if WooCommerce is active. */
	if ( class_exists( 'WooCommerce' ) ) {
		/**
		 * Register the pattern.
		 */
		register_block_pattern(
			'theme-slug/shop-section',
			array(
				'title'       => __( 'Cover block Store section', 'text-domain' ),
				'categories'  => array( 'shop' ),
				'keywords'    => array( __( 'Shop', 'text-domain' ) ),
				'description' => __( 'A store section with a full with background image.', 'text-domain' ),
				'content'     => '
				<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/clothes.jpg' ) ) . '","id":2081,"hasParallax":true,"contentPosition":"center center","align":"full"} -->
				<div class="wp-block-cover alignfull has-background-dim has-parallax is-position-center-center" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/clothes.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"minHeight":251,"minHeightUnit":"px","customGradient":"linear-gradient(135deg,rgb(238,238,238) 34%,rgb(169,184,195) 100%)","contentPosition":"top center"} -->
				<div class="wp-block-cover has-background-dim has-background-gradient has-custom-content-position is-position-top-center" style="background:linear-gradient(135deg,rgb(238,238,238) 34%,rgb(169,184,195) 100%);min-height:251px"><div class="wp-block-cover__inner-container">
				<!-- wp:heading {"align":"left","textColor":"primary","fontSize":"normal"} -->
				<h2 class="has-text-align-left has-primary-color has-text-color has-normal-font-size">' . __( 'View the', 'text-domain' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:heading {"textColor":"primary","style":{"typography":{"fontSize":50}}} -->
				<h2 class="has-primary-color has-text-color" style="font-size:50px">' . __( '2020', 'text-domain' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:heading {"textColor":"primary","style":{"typography":{"fontSize":50}}} -->
				<h2 class="has-primary-color has-text-color" style="font-size:50px">' . __( 'Hoodie collection', 'text-domain' ) . '</h2>
				<!-- /wp:heading --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"66.66%"} -->
				<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:woocommerce/handpicked-products {"editMode":false,"contentVisibility":{"title":false,"price":false,"rating":false,"button":true},"products":[1895,1901,1902],"alignButtons":true} /--></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div></div>
				<!-- /wp:cover -->',
			)
		);
	}

	/**
	 * Profile block with social links and latest posts.
	 *
	 * Background photo from PXhere, public domain.
	*/
	/**
	 * Register the pattern.
	 */
	register_block_pattern(
		'theme-slug/profile',
		array(
			'title'       => __( 'Profile', 'text-domain' ),
			'categories'  => array( 'profile' ),
			'keywords'    => array( __( 'Profile', 'text-domain' ), __( 'User', 'text-domain' ) ),
			'description' => __( 'A profile pattern with photo, text content, social media links and latest posts.', 'text-domain' ),
			'content'     => '
				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":2075,"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large">
				<img src="' . esc_url( get_theme_file_uri( 'assets/images/mother.jpg' ) ) . '" alt="" class="wp-image-2075"/></figure>
				<!-- /wp:image -->

				<!-- wp:social-links -->
				<ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->

				<!-- wp:social-link {"url":"tw","service":"twitter"} /-->

				<!-- wp:social-link {"url":"ln","service":"linkedin"} /-->

				<!-- wp:social-link {"url":"ib","service":"instagram"} /-->

				<!-- wp:social-link {"service":"facebook"} /-->

				<!-- wp:social-link {"service":"youtube"} /--></ul>
				<!-- /wp:social-links -->

				<!-- wp:latest-posts {"categories":[],"postsToShow":1,"displayPostContent":true,"excerptLength":20,"displayAuthor":true,"displayPostDate":true} /--></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"textColor":"accent"} -->
				<h2 class="has-accent-color has-text-color">' . __( 'Amanda', 'text-domain' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"normal"} -->
				<p class="has-normal-font-size">' . __( 'Sed eu commodo nisi. Nullam in nulla tempor, laoreet orci et, <strong>maximus</strong> lacus. Sed ut commodo justo, quis congue felis.', 'text-domain' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"normal"} -->
				<h3 class="has-normal-font-size"><strong>' . __( 'Etiam id laoreet arcu', 'text-domain' ) . '</strong>.</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>' . __( 'Vivamus sed rhoncus dolor. <a href="#">Ut eu eros augue. </a>', 'text-domain' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->',
		)
	);

}
