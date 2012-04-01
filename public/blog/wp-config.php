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
define('DB_NAME', 'db_8afecbb7');

/** MySQL database username */
define('DB_USER', 'user_8afecbb7');

/** MySQL database password */
define('DB_PASSWORD', 'guzHa-iCcR7%kU');

/** MySQL hostname */
define('DB_HOST', 'a.db.shared.orchestra.io');

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
define('AUTH_KEY',         'h.XX7O)T@S>oN-=SM#l8jpN6w[bl5z/Fa]+&zKzG ]N7:Ut?Gm?w[24oUPy:V[yy');
define('SECURE_AUTH_KEY',  'n`2i5fZ)|W|(=fI!mT-A+|O4<Co|7Q:XSfv1sKc|PujObM<$D kSa,8UR2Q5cX- ');
define('LOGGED_IN_KEY',    'dP0zte(C{OE.pc-;M?gqKBxh;rfYcA:V;e%[yFpQvkLzDhgz8W@FvP-2M.%I]f-)');
define('NONCE_KEY',        '[.;e?:T.Ji`t{T}q9,M|(eG,~pnEij7YY+HxgQFNEPiYdveg-Gx)3l&cA`AF6#|7');
define('AUTH_SALT',        '}.^AAe$uoCq2_wjLMb?9u#l[g>hk-{StoO0~C/(Gc`.&r3.UZ&=8JtZ?a|y?&v[N');
define('SECURE_AUTH_SALT', ')cx{bg)R,?5@u_^/SXqpnk 6w?rqo3(s]RWyJ}|)+R*[y]Tj/v(2P08+ =)FzBJn');
define('LOGGED_IN_SALT',   'uWo|3F!bK 9Nx<a35JR5n?&,S&0KR](#6*!Em S;Q8OrsjC)f1_9s6z2*RzMv!kw');
define('NONCE_SALT',       '%I}P~Rja-Ya+v`1raN4V{R(PfH+^q{iUDPiw#JhS;inM_J5!,T+_%gEq7#. O<>~');

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
