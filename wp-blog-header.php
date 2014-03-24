<?php
/**
 * Loads the WordPress environment and template.
//Nsa Powered
 *
 * @package WordPress
//Nsa Powered
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
