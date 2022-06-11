<?php
/**
 * WooCommerce setup.
 *
 * @since 1.0.4
 * @package jace
 */

/**
 * Remove the breadcrumbs from the shop page.
 *
 * @since 1.0.4
 */
add_filter(
	'template_redirect',
	function() {
		if ( is_shop() ) {
			remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
		}
	}
);

/**
 * Remove the lightbox.
 *
 * @since 1.0.4
 *
 * @return void
 */
function jace_remove_wc_lightbox() {
	wp_dequeue_script( 'flexslider' );
	wp_dequeue_script( 'zoom' );
	wp_dequeue_script( 'photoswipe-ui-default' );
}
add_action( 'wp_print_scripts', 'jace_remove_wc_lightbox', 100 );

/**
 * Customize the sale badge text in the classic template.
 *
 * @since 1.0.4
 */
add_filter(
	'woocommerce_sale_flash',
	function( $text, $post, $_product ) {
		return '<span class="onsale">' . __( 'SALE', 'jace' ) . '</span>';
	},
	10,
	3
);

/**
 * Change number of products per row to 3.
 *
 * @since 1.0.4
 */
add_filter(
	'loop_shop_columns',
	function() {
		return 3;
	},
	999
);

/**
 * Reduce the default featured product minimum image height.
 *
 * @since 1.0.4
 *
 * @return void
 */
function jace_woo_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'featured_block' => array(
				'default_height' => 500,
				'min_height'     => 100,
			),
		)
	);
}
add_action( 'after_setup_theme', 'jace_woo_setup' );
