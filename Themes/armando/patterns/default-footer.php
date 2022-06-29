<?php
/**
 * Title: Default footer
 * Slug: armando/default-footer
 * Description: The default footer. 3 Columns with social links, contact information and latest posts. Copyright below the columns.
 * Categories: site-footer
 * Block Types: core/columns, core/social-link
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"dark-blue","textColor":"white"} -->
<div class="wp-block-group alignfull has-white-color has-dark-blue-background-color has-text-color has-background has-link-color" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:latest-posts /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><strong><?php echo esc_html_x( 'Never miss the latest news', 'sample content', 'armando' ); ?></strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light-blue","textColor":"dark-blue"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-dark-blue-color has-light-blue-background-color has-text-color has-background" href="#"><?php echo esc_html_x( 'Join our mailing list', 'sample content', 'armando' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:social-links {"align":"center"} -->
		<ul class="wp-block-social-links aligncenter">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:separator {"color":"silver","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-silver-background-color has-silver-color is-style-wide" />
<!-- /wp:separator -->
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">
<?php
echo esc_html__( 'Copyright', 'armando' ) . ' ' .
/* translators: Copyright date format, see https://www.php.net/date */
esc_html( date_i18n( _x( 'Y', 'copyright date format', 'armando' ) ) );
?>
</p><!-- /wp:paragraph -->
<!-- wp:site-title {"level":0,"fontSize":"small"} /--></div>
<!-- /wp:group -->
</div><!-- /wp:group -->
