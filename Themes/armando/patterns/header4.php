<?php
/**
 * Title: Header with media background and call to action
 * Slug: armando/header-four
 * Description: A header with a menu and a full width cover block with call to action.
 * Categories: site-header
 * Block Types: core/columns, core/cover
 *
 * @package armando
 * @since 2.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem","left":"2rem"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"dark-blue","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-dark-blue-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-right:2rem;padding-left:2rem">
	<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"medium"} /-->
	<!-- wp:navigation {"textColor":"white","backgroundColor":"dark-blue","align":"full","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px">

	<!-- wp:cover {"url":"","contentPosition":"top center","isDark":false,"align":"full"} -->
	<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-center"><span aria-hidden="true" class="has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","align":"full","textColor":"white","fontSize":"x-large"} --><h2 class="alignfull has-text-align-center has-white-color has-text-color has-x-large-font-size" id="headline-1">
		<?php echo _x( 'HEADLINE', 'sample content', 'armando' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white","style":{"typography":{"textTransform":"uppercase"}}} -->
		<div class="wp-block-button" style="text-transform:uppercase"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background" href="#"><strong><?php echo _x( 'CUSTOMIZE YOUR CALL TO ACTION', 'sample content', 'armando' ); ?></strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	</div>
	<!-- /wp:cover -->

</div>
<!-- /wp:group -->
