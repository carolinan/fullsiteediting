<?php
/**
 * Stanley Lesson Two Completed functions
 *
 * @package Stanley Lesson Two Completed
 * @since 1.0.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stanley_lesson_two_completed_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Add support for default block styles.
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );

	// Add support for full and wide align blocks.
	add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'stanley_lesson_two_completed_theme_support' );

/**
 * Enqueue Styles.
 */
function stanley_lesson_two_completed_styles() {
	wp_enqueue_style( 'stanley-lesson-two-completed-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'stanley_lesson_two_completed_styles' );
