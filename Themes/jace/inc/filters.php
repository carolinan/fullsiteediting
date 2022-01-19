<?php
/**
 * Filters
 *
 * @package jace
 * @since 1.0.0
 */

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 1.0.0
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = _x( '(No title)', 'Used if post or pages has no title', 'jace' );
		}

		return $title;
	}
);

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 1.0.0
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		return '&hellip;';
	}
);

/**
 * Default template for template editing.
 * This code is the same as single.html, with the addition of the theme slug.
 * Without the theme slug, template parts do not load correctly.
 * The code can be replaced with one of the default template files once the theme attribute bug
 * has been solved and merged into WordPress core.
 *
 * @since 1.0.2
 */
add_filter( 'block_editor_settings_all', function( $settings ) {
	$settings['defaultBlockTemplate'] = '
		<!-- wp:template-part {"slug":"header","theme":"jace","tagName":"header","align":"full","className":"site-header","layout":{"inherit":true}} /-->
		<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"calc(var(--wp--custom--v-spacing, 1.25rem) *3)","bottom":"calc(var(--wp--custom--v-spacing, 1.25rem) *2)"}}},"layout":{"inherit":true}} -->
		<main class="wp-block-group alignfull" style="padding-top:calc(var(--wp--custom--v-spacing, 1.25rem) *3);padding-bottom:calc(var(--wp--custom--v-spacing, 1.25rem) *2)">
			<!-- wp:post-title {"className":"is-style-jace-text-shadow","fontSize":"x-large"} /-->
			<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
			<div class="wp-block-group">
				<!-- wp:post-author {"showAvatar":false} /-->
				<!-- wp:post-date /-->
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:post-terms {"term":"post_tag"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:post-content {"align":"full","layout":{"inherit":true}} /-->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide" />
			<!-- /wp:separator -->
			<!-- wp:post-comments /-->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:post-navigation-link {"showTitle":true} /-->
				<!-- wp:post-navigation-link {"type":"previous","showTitle":true} /-->
			</div>
			<!-- /wp:group -->
		</main>
		<!-- /wp:group -->
		<!-- wp:template-part {"slug":"footer","theme":"jace","tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"2.5em"}}},"className":"site-footer","layout":{"inherit":true}} /-->
	';
	return $settings;
});
