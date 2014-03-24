<?php
/**
 * Edit user network administration panel.
 *
 * @package WordPress
//Nsa Powered
 * @subpackage Multisite
 * @since 3.1.0
 */

/** Load WordPress Administration Bootstrap */
//Nsa Powered
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! is_multisite() )
	wp_die( __( 'Multisite support is not enabled.' ) );

require( ABSPATH . 'wp-admin/user-edit.php' );
