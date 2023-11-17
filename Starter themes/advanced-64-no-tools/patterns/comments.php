<?php
/**
 * Title: Comments
 * Slug: full-site-editing/comments
 * Categories: theme
 *
 * @package full-site-editing
 * @since 1.0.0
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
		<!-- wp:comments -->
		<div class="wp-block-comments">
			<!-- wp:heading -->
			<h2><?php esc_html_e( 'Comments', 'full-site-editing' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:comments-title /-->
			<!-- wp:comment-template -->
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"40px"} -->
					<div class="wp-block-column" style="flex-basis:40px">
						<!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
					<!-- wp:comment-author-name {"fontSize":"small"} /-->
					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
					<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
						<!-- wp:comment-date {"fontSize":"small"} /-->
						<!-- wp:comment-edit-link {"fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:comment-content /-->
					<!-- wp:comment-reply-link {"fontSize":"small"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- /wp:comment-template -->
			<!-- wp:comments-pagination -->
			<!-- wp:comments-pagination-previous /-->
			<!-- wp:comments-pagination-numbers /-->
			<!-- wp:comments-pagination-next /-->
			<!-- /wp:comments-pagination -->
			<!-- wp:post-comments-form /-->
		</div>
		<!-- /wp:comments -->
</div>
<!-- /wp:group -->
