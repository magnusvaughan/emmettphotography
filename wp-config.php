<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'emmettmcsheffre');

/** MySQL database username */
define('DB_USER', 'emmettmcsheffre');

/** MySQL database password */
define('DB_PASSWORD', 'uZVFie4b');

/** MySQL hostname */
define('DB_HOST', 'emmettmcsheffrey.com.mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'VD7n%4Y<.?7AZ(mH|S?oFMQfb}q[DG+z63j6v)Navg$p5>C.TQ8V0=DjxiXtS8Af');
define('SECURE_AUTH_KEY',  'UM |qV<)pVzg./ntv=M,-_XV+CQ><kTh ~nG/bK*|68SW7T2-=4{+E/K++p+r()Q');
define('LOGGED_IN_KEY',    '>/sL`|T$1F,!UE6>cF2Gd}Z@55OJ;N[,puOUXG-tB=[mgnw+$CLY35a^}t|,]s3V');
define('NONCE_KEY',        'X>u+C/{o0EiA;|rbhCwwjyl_>-x@oV/k ]+!9Zu}i,pnWmLtlUD}e*(5P*,d)}!-');
define('AUTH_SALT',        '4Hh=PV!pA}9B4Rl4l>{L$n+?3lARxg|2E2BxzJBeFMco99~B4%>+9#}V0/(!T;!%');
define('SECURE_AUTH_SALT', '!Yh6_+;/9V;IT/8 >xV]gE@fsi>/9|&ML6U&2TGWRyOt]TS^qysF%OV^zV b%EKK');
define('LOGGED_IN_SALT',   'A=u;kPR8_<8~2?Q}$t_`x0dp5:jk=$.&.-PTM1z0rD7!Js|(/oBt+J_7{1jjUH]B');
define('NONCE_SALT',       ';fk<=:Xp~kRz1B+z5-~`0[t}`%ju5St_+Q]C>&c_!1f1)?|Cn5P^FdT2/Nq5-1n;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
