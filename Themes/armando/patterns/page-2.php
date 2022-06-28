<?php
/**
 * Title: Page layout two
 * Slug: armando/page-layout-two
 * Categories: layout, columns
 * Block Types: core/columns, core/media-text
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":534,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="534" height="400"/><figcaption><?php echo esc_html_x( 'Image caption', 'sample content', 'armando' ); ?></figcaption></figure>
		<!-- /wp:image -->
		<!-- wp:post-title {"style":{"typography":{"fontSize":"48px"}}} /-->
		<!-- wp:post-author {"showAvatar":false,"showBio":true,"byline":"Written by","fontSize":"x-large"} /-->
		<!-- wp:post-terms {"term":"category"} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"width":500,"height":700,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ); ?>" alt="" width="500" height="700"/><figcaption><?php echo esc_html_x( 'Image caption', 'sample content', 'armando' ); ?></figcaption></figure><!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"dropCap":true} -->
		<p class="has-drop-cap"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Donec aliquam egestas nulla, ac lobortis nibh posuere at. Phasellus sed arcu tristique, suscipit velit interdum, finibus sapien.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php echo _x( '<strong>Quisque eros nulla, condimentum vitae commodo nec?</strong><br>-Aliquet congue lacus. Praesent euismod non enim nec venenatis.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:quote {"align":"center","className":"is-style-large"} -->
			<blockquote class="wp-block-quote has-text-align-center is-style-large"><p><span style="color:#6cace4" class="has-inline-color"><?php echo esc_html_x( '"Do you see over yonder, friend Sancho, thirty or forty hulking giants? I intend to do battle with them and slay them."', 'sample content', 'armando' ); ?></span></p><cite><?php echo esc_html_x( '— Don Quixote', 'sample content', 'armando' ); ?></cite></blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p><?php echo _x( '<strong>Cras efficitur venenatis mi vitae auctor?</strong><br>-Vestibulum non faucibus est. Suspendisse ac blandit metus. Sed nec rhoncus lectus. Aliquam sit amet aliquam nisi, et vehicula purus.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Vivamus tempor dui a tortor luctus blandit. Morbi fringilla massa mi, vitae placerat massa sodales et.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:image -->
		<figure class="wp-block-image"><img alt=""/></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Suspendisse potenti. Proin finibus erat nec velit vehicula, ac venenatis velit placerat.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Nulla aliquet risus dolor, at rhoncus mauris auctor eget. Sed gravida euismod ex in viverra.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><strong><?php echo esc_html_x( 'Mauris nec tortor vitae ligula malesuada porta.', 'sample content', 'armando' ); ?></strong> <?php echo esc_html_x( 'Suspendisse venenatis blandit ante, sed tempus orci tincidunt ut.', 'sample content', 'armando' ); ?> <?php echo esc_html_x( 'Suspendisse potenti. Proin finibus erat nec velit vehicula, ac venenatis velit placerat.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Duis congue ante justo, quis dapibus metus porta eu.', 'sample content', 'armando' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
