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
define('DB_NAME', 'db_marbregranites');

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
define('AUTH_KEY',         '=u128JR?eQbrz{t)F4E7HY!A%,!K}A(sG0){b)1UiW6wlH,.p>kz,H&J=s~X:?6i');
define('SECURE_AUTH_KEY',  '(81gtGseU6GU1<Zy64=}Enid#0jtq3D:N>:o%6#lt-JXxJGz]WC#CoEZcl+fU7(@');
define('LOGGED_IN_KEY',    '8{o$nn)>+y#Goxsud9>-MM#BrS>:?~i[{{0SNR.CyxJomF:8f|?@l@yDt.5do>wD');
define('NONCE_KEY',        '3FBIA0;f`~S,c%K.NwP4lp)GyzwRcwl;Sd?K/~ur+7mG.!y!y:4)$BR88Rkbh~z}');
define('AUTH_SALT',        'NTl+(jJ^}u}&NRW;A mZ:( ~!D&O$JqY.Uj-6wd0Cl^,<Z!@Oj~XCddUMKG@HTTz');
define('SECURE_AUTH_SALT', '^)L51f5.d^g_v.mQX*.p!T+PS`.ds;[{}m1xP)5YQ/QNjs_u<&dp@mG,8at=6=o|');
define('LOGGED_IN_SALT',   '8@Q_`m?sjN6fDCA*[iE|UK{dKPv(vCp4F I|(4(?FB*E|.jVs{%_Ot{kZ3;UgRtB');
define('NONCE_SALT',       'TFWuIaW*!g#l*J1xn7iPet#w^=fx lV`^;}A{.F)}-_ ]-1(YS0rx=;=ux<6$YTl');

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
