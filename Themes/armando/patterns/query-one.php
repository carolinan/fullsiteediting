<?php
/**
 * Title: Posts in a 3 column grid with post meta, author and excerpt
 * Slug: armando/query-one
 * Categories: query, blog
 * Block Types: core/query
 *
 * @package armando
 * @since 2.0.0
 */

?>
<!-- wp:query {"query":{"pages":"0","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","exclude":[],"perPage":6,"inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template -->
		<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
		<!-- wp:template-part {"slug":"meta","theme":"armando"} /-->
		<!-- wp:post-excerpt {"moreText":"Continue reading"} /-->
		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
