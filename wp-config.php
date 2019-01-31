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
define('DB_NAME', 'feu-alum-wordpress');

/** MySQL database username */
define('DB_USER', 'feu-alum');

/** MySQL database password */
define('DB_PASSWORD', 'ncdKZPrrB392anZX');

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
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1]UOkP?:xQU!Tr_~ETLGw:_:)N!uJIUws!enXs0Xz|$En[xl0M(fWBgA_40*+N52');
define('SECURE_AUTH_KEY',  '(jB/rAvoWXinDtd7brvVN9nf7Iw((U:8CXi(?UC9%q/f+o~MvDr&zbgwg}=*Y6Q>');
define('LOGGED_IN_KEY',    'V%ZS,-4,96}|=X?/!Fr3Rvqrgb<~{^Lb<NjYd`e+ym^Izp1/m2q(&-&>})>*A>`R');
define('NONCE_KEY',        'IMt=+v-5@|YQcI ms.tgE^L:Fmvq~5x{<d1Dg<0FhRb331)zzBeAdis6n1lV<ojQ');
define('AUTH_SALT',        'u-%tN7 +Ov?5)e6xx4UhG]2e|>VP=;lWfL}`dDMGrxxAYJ(GO!rfn.BD`fDBfeD}');
define('SECURE_AUTH_SALT', 'DSwkH&J 8cAx;N#Y@*4D]@2o|gfY|-Fezt.%l;_]c6I#LpkY4%c?/R^idOb+Ardg');
define('LOGGED_IN_SALT',   'dCes[sMn=!C9^vjZRl(?_)H|Id(UG{%dYv?SI[XF5v[}%*DlUuhbXJdKZw1+dZ1%');
define('NONCE_SALT',       'mrV[20t%>0Ps>fB]dD ~^,lt*N>$XI,[;I_R9m`qzNO|J31c*9k/Y/s]EYq6mG|s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'feudb_';

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
