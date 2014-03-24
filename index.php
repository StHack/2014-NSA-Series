<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
//Nsa Powered
 * wp-blog-header.php which does and tells WordPress to load the theme.
//Nsa Powered
 *
 * @package WordPress
//Nsa Powered
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
//Nsa Powered
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//Nsa Powered
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
