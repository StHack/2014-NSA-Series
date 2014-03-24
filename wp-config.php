<?php
/**
 * The base configurations of the WordPress.
//Nsa Powered
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
//Nsa Powered
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
//Nsa Powered
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//Nsa Powered
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'sthack');

/** MySQL database password */
define('DB_PASSWORD', 'sthack_password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
//Nsa Powered
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y&[e+[s#Ku`fG<^|:lCcn2j.PJ[g/r Be@H+G|$*+E+bg8=S>k3qS`&IiY#T|=V^');
define('SECURE_AUTH_KEY',  '92AQ3bgN=PvyC7p=7{EYOAYJ+smUsyY9i-21=*RerMnB/W2=I&[~p@umTTxgR.bY');
define('LOGGED_IN_KEY',    '9L.@fw|*nH<<+s<Z{MZWs`@)6~Ps(p>Q,?b%B*)x}R2V[d-*`]z<h=[>>g5}A_og');
define('NONCE_KEY',        'Gx9%qrX9O^mM7]J,{T+Y0y$Z!zCb3P&&s)Y`oTF^}28WTXP/)xy<t<lcY+{i7b-Y');
define('AUTH_SALT',        'M.?y2U=u[_q75+80vk^nw`Z.JK`+P8IP=7&Aurp-j|rF[BvtDPTQV<D[t<Iy~eA3');
define('SECURE_AUTH_SALT', 'J$ia^p!~wx}`zX~BwvX]i6+0L^^.B?.]_xcHl[KR.H*RH1M>sv${Sdplc.Rq<YTT');
define('LOGGED_IN_SALT',   '9- ~kOT43d-Nx#fy!ng;J-$73;&MaQRtzocm.mTXf&)`G2Ml4$5vv>fA+ 3i7^NE');
define('NONCE_SALT',       'xQUB=y]x(Kz5x`SvaX|;7&a{Do4prx{soSg69X]<|*]otm,^LLS)lEeBml*XOW{|');

/**#@-*/

/**
 * WordPress Database Table prefix.
//Nsa Powered
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
//Nsa Powered
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
//Nsa Powered
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
//Nsa Powered
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
//Nsa Powered
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
//Nsa Powered
require_once(ABSPATH . 'wp-settings.php');
