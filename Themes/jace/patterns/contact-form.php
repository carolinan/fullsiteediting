<?php
/**
 * Title: Contact page with form
 * Slug: jace/contact-form
 * Categories: jace-pages
 * Block Types: core/heading, core/group, core/post-content
 * Keywords: contact, form, contact form 7
 *
 * @package jace
 * @since 1.0.4
 */

?>
<!-- wp:heading -->
<h2><strong><?php echo esc_html_x( 'Contact', 'sample content', 'jace' ); ?></strong></h2>
<!-- /wp:heading -->
<!-- wp:heading {"level":3} -->
<h3><?php echo esc_html_x( 'How can we help you?', 'sample content', 'jace' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:contact-form-7/contact-form-selector --><div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="1853" title="Contact form 1"]</div><!-- /wp:contact-form-7/contact-form-selector -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"level":4} -->
<h4><strong><?php echo esc_html_x( 'Company name', 'sample content', 'jace' ); ?></strong></h4>
<!-- /wp:heading -->
<!-- wp:heading {"level":5} -->
<h5><?php echo esc_html_x( 'Location', 'sample content', 'jace' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><em><?php echo esc_html_x( 'By appointment only:', 'sample content', 'jace' ); ?></em></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo _x( 'Company street address line one<br>Company street address line two', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":5} -->
<h5><?php echo esc_html_x( 'Postal adress', 'sample content', 'jace' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo _x( 'Company postal address line one<br>Company postal address line two', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":5} -->
<h5><?php echo esc_html_x( 'Phone number', 'sample content', 'jace' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( '00-00 00 00', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":5} -->
<h5><?php echo esc_html_x( 'Email', 'sample content', 'jace' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo _x( '<strong>General enquires:</strong> info@example.com', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo _x( '<strong>Marketing:</strong> marketing@example.com', 'sample content', 'jace' ); ?></p>
<!-- /wp:paragraph -->
