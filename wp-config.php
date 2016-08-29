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
define('DB_NAME', 'juans-work');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'paj/v_|X`cSza8R@dEE8dxHAY.eSvx?!X($i@HVaHcvolz55?`Oq!RyL)p4zP1Z8');
define('SECURE_AUTH_KEY',  'Xe_S|;n3`dNWfwAxH;1nXn`[!Dy0.zHuF||Tc~RAN/L2u0 h$P0C50u 4X@>[o@D');
define('LOGGED_IN_KEY',    '3$UkltB$IgM1>Wgei8q$dqI~Q<KMf%~kBNhZ?E^I4Mos9v$D5_Sxz-~G/YgU`uw6');
define('NONCE_KEY',        'ZRW5]fWqd@+4NnRC0)+o_$Q;o`|Rq-Pe1z0e/!leFG7p/T]YdhJ@V{k{_7P:d<sx');
define('AUTH_SALT',        'q`ws%TUR,68>Z}^|X674<2Wl<SMhVproT9x>]^G,lDE6+`kq>hmo?U9c7hGTd!n>');
define('SECURE_AUTH_SALT', '8Ais=kveA<znm]a[1*p:~zDdqf*1M9:k+Tk`5s.*18EvL{a8bRL/+e:NdLqN3F4P');
define('LOGGED_IN_SALT',   '}-;fz_6dF9(x7FUG9%l4yta`$^r,C-@2c}f:t$U!78pD3q*yiF{p[Q+C(2(Q=u6;');
define('NONCE_SALT',       'AZ}S13^hErkQ7et `}2zVL5PpjmBf=5Qc*~QErj*q!rCRaQ4X#n!mFug&r6T3q!D');

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
