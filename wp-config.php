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
define('DB_NAME', 'rd141qrc_site');

/** MySQL database username */
//define('DB_USER', 'rd141qrc_user');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'CkZUm{?)+{{n');
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');


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
define('AUTH_KEY',         '3I}nQKwpD#jpAvpA4&Ar1iph`]sc}$v/IOcG=n{R@8z=C]=ZJ^ yYrZ7o,FS|fM-');
define('SECURE_AUTH_KEY',  '9_?x87Zd%50_4<1GK#028Fj9TAi?.^2%lsXLqq{^qf_DRrD JCW_~=Q[E1(CQlW0');
define('LOGGED_IN_KEY',    'E2*Ooh7rhu~R99yXVqC5,3;Pl~>3JMGx`@oOj&@T!VZ;CX9GU{d&Pb2ohsTbL31K');
define('NONCE_KEY',        '8Q$#vdR!7QzL4{ibgwFuUC[T{)Omlk9r,=HLWQ);~?b Lt;W 7cYMbO7#/q-;!Vh');
define('AUTH_SALT',        'Zl tnXLd:{JUxR,UQ_Ua;?iQD0%-Rt4=}+xQ<IbLL&1*),bXqU eioitvV{X({zS');
define('SECURE_AUTH_SALT', 'N(G-fA_;wP1td3*NI9RI)zc;~,ve02G]Up;HX.8TPk/#6%XRpX9/3e<8#Y{_Y`y5');
define('LOGGED_IN_SALT',   'rfID&SybIeTC8:%vQh5LT;l_aEn;Hg.:ql}{F`w,{L}{-vrSG=+N[rl(I2V#G$Nt');
define('NONCE_SALT',       'sb&NPf0O>hp+{&+AVyev&4vAi@wGjN/+LfV:7QGMpJ-$|r$.Qv S%<&ii,w%sMHv');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
