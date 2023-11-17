<?php
/**
 * Title: Query
 * Slug: full-site-editing/query
 * Categories: posts
 * Block Types: core/post-conent, core/query, core/post-title
 *
 * @package full-site-editing
 * @since 1.0.0
 */
?>
<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:post-title {"level":2,"isLink":true} /-->
		<!-- wp:post-featured-image {"isLink":true} /-->
		<!-- wp:pattern {"slug":"full-site-editing/hidden-post-meta"} /-->
		<!-- wp:post-excerpt {"moreText":"Read more"} /-->
		<!-- wp:spacer {"height":"1rem"} -->
		<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	<!-- /wp:post-template -->
	<!-- wp:query-no-results -->
	<!-- wp:paragraph --><p><?php esc_html_e( 'No results found.', 'full-site-editing'); ?></p><!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
