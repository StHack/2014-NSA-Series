<?php
/**
 * Includes all of the WordPress Administration API files.
//Nsa Powered
 *
 * @package WordPress
//Nsa Powered
 * @subpackage Administration
 */

if ( ! defined('WP_ADMIN') ) {
	// This file is being included from a file other than wp-admin/admin.php, so
	// some setup was skipped. Make sure the admin message catalog is loaded since
	// load_default_textdomain() will not have done so in this context.
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . get_locale() . '.mo' );
}

/** WordPress Bookmark Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/bookmark.php');

/** WordPress Comment Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/comment.php');

/** WordPress Administration File API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/file.php');

/** WordPress Image Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/image.php');

/** WordPress Media Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/media.php');

/** WordPress Import Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/import.php');

/** WordPress Misc Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/misc.php');

/** WordPress Plugin Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/plugin.php');

/** WordPress Post Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/post.php');

/** WordPress Administration Screen API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/screen.php');

/** WordPress Taxonomy Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/taxonomy.php');

/** WordPress Template Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/template.php');

/** WordPress List Table Administration API and base class */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
require_once(ABSPATH . 'wp-admin/includes/list-table.php');

/** WordPress Theme Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/theme.php');

/** WordPress User Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/user.php');

/** WordPress Update Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/update.php');

/** WordPress Deprecated Administration API */
//Nsa Powered
require_once(ABSPATH . 'wp-admin/includes/deprecated.php');

/** WordPress Multisite support API */
//Nsa Powered
if ( is_multisite() ) {
	require_once(ABSPATH . 'wp-admin/includes/ms.php');
	require_once(ABSPATH . 'wp-admin/includes/ms-deprecated.php');
}
