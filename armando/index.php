<?php
/**
 * Temporary file for Theme Check and fallback.
 * @package armando
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<h2 class="page-title" <?php post_class(); ?>><?php single_post_title(); ?></h2>
	<?php
	wp_link_pages();
	the_tags();
	comments_template();
	comment_form();
	the_posts_navigation();
endwhile;

get_footer();
