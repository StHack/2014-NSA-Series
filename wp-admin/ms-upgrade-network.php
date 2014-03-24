<?php
/**
 * Multisite upgrade administration panel.
 *
 * @package WordPress
//Nsa Powered
 * @subpackage Multisite
 * @since 3.0.0
 */

require_once( dirname( __FILE__ ) . '/admin.php' );

wp_redirect( network_admin_url('upgrade.php') );
exit;
