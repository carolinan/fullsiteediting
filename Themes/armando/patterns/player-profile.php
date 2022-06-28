<?php
/**
 * Title: Player profile
 * Slug: armando/player-profile
 * Categories: sport
 * Block Types: core/columns
 *
 * @package armando
 * @since 2.0.0
 */

?>

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><strong><?php echo esc_html_x( 'First name', 'sample content', 'armando' ); ?></strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"className":"is-style-armando-top-bottom-border","fontSize":"x-large"} -->
		<h2 class="is-style-armando-top-bottom-border has-x-large-font-size"><strong><?php echo esc_html_x( 'Last name', 'sample content', 'armando' ); ?></strong></h2><!-- /wp:heading -->
		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:paragraph -->
		<p><strong><?php echo esc_html_x( 'Position', 'sample content', 'armando' ); ?></strong></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>","dimRatio":50,"contentPosition":"bottom left"} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size"><?php echo esc_html_x( '#1 (Replace with shirt number)', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:paragraph -->
<p><strong><?php echo esc_html_x( 'Stats', 'sample content', 'armando' ); ?></strong></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Born:', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Height:', 'sample content', 'armando' ); ?>
<br><?php echo esc_html_x( 'Weight:', 'sample content', 'armando' ); ?><br><br>
<?php echo esc_html_x( 'Games:', 'sample content', 'armando' ); ?><br>
<?php echo esc_html_x( 'Goals:', 'sample content', 'armando' ); ?><br>
<?php echo esc_html_x( 'Saves:', 'sample content', 'armando' ); ?><br></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Seasons: 2019-', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Previous Clubs:', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:heading {"level":3} -->
<h3><?php echo esc_html_x( 'Biography', 'sample content', 'armando' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Lorem Ipsum', 'sample content', 'armando' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3><?php echo esc_html_x( 'Gallery', 'sample content', 'armando' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery columns-0 is-cropped"><ul class="blocks-gallery-grid"></ul></figure>
<!-- /wp:gallery -->
