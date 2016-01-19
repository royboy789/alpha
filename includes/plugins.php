<?php
/**
 * Provides compatibility with various WordPress plugins.
 *
 * @package    Alpha\Functions\Plugins
 * @subpackage Alpha
 * @author     Robert Neu
 * @copyright  Copyright (c) 2015, WP Site Care, LLC
 * @since      1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Make adjustments to the theme when Jetpack is installed and activated.
 * Change the default related posts image size.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function alpha_jetpack_setup() {
	// Return early if Jetpack isn't activated.
	if ( ! class_exists( 'Jetpack' ) ) {
		return;
	}

	// Add support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}

/**
 * Change the default related posts image size.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function alpha_related_posts_image() {
	return 'related-posts';
}