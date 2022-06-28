<?php
/**
 * Title: Alternating rows with images and headings
 * Slug: armando/alternating
 * Categories: elements
 * Block Types: core/image, core/columns
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="100" height="100"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->	
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading --><h2><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"10%"} -->
	<div class="wp-block-column" style="flex-basis:10%"></div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="100" height="100"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading --><h2><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="100" height="100"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading --><h2><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"10%"} -->
	<div class="wp-block-column" style="flex-basis:10%"></div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image is-style-rounded aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt=""  width="100" height="100"/></figure>
	<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading --><h2><?php echo esc_html_x( 'Heading', 'sample content', 'armando' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
