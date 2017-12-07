<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')j4_APr/^.DNO?MR$tMS_m}n(.q5r8H^Ss=P7/QTcl<X@{%~}k7f>W!Q_J~ncxZs');
define('SECURE_AUTH_KEY',  'E9K%EA7kvMG;OP5lYV`))_:JWeGoo>=KK[RPs$ki{tf4l~8RK73kj0B4ycQ(wiA7');
define('LOGGED_IN_KEY',    'af3x-);Fjj#{+}J3>x`a/OLksrIEl1C{?E-pRz/)nMINm:4!c6f#{<IFo(jx_ZYw');
define('NONCE_KEY',        'RHJRys&,73W(^ pqyJNQGu#qVw.Pw+<%=NR8vZofDUYUqi!Ab?=QYqd7GCD-pRQQ');
define('AUTH_SALT',        'V8-pik], XkeN*I-QQ/B2>kwgI<r&pVunA6oHU?]mFP~z<G#gu?RWTNpd?L}K@`R');
define('SECURE_AUTH_SALT', 'J,ulZkO8nKpSNAQJ?q*PRr_H{zHXsxq$oqhLOAa#+%W27Fxl]N*VHcpL4<R:v0>F');
define('LOGGED_IN_SALT',   'l=d829W*65Ra#oaQqx V1P!fh/BHh%8NXw4sAFj&,uu%~(5d4G.{}M;e;H-8Xbq?');
define('NONCE_SALT',       'sD+>_h}*:^UkF(S|.XO&U #1BB*GIX:)ylw[Bb6`.-+/I.$C[gNd#7$?$^H@+$bi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
