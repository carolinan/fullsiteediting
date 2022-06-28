<?php
/**
 * Title: Page layout four: Image columns, site title, tagline and the latest post
 * Slug: armando/page-layout-four
 * Categories: layout, columns
 * Block Types: core/columns, core/media-text
 * Viewport Width: 840
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":350,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="350" height="400"/></figure>
	<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:site-title {"textAlign":"center"} /-->
		<!-- wp:site-tagline {"textAlign":"center"} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":350,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="350" height="400"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"backgroundColor":"silver"} -->
	<div class="wp-block-column has-silver-background-color has-background">
		<!-- wp:group {"backgroundColor":"silver","layout":{"contentSize":"350px"}} -->
		<div class="wp-block-group has-silver-background-color has-background">
			<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template -->
					<!-- wp:post-title {"fontSize":"large"} /-->
					<!-- wp:post-date /-->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":350,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="350" height="400"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":350,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="350" height="400"/></figure>
	<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":350,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="350" height="400"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":350,"height":600,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="350" height="600"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":350,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="350" height="400"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
