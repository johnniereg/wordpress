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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'owC~cOy?gJc;<gTLf5B:]e~zvt!*DRWjYwupO}, nPYjCxQ}`.QRpqTD2A_yfm+U');
define('SECURE_AUTH_KEY',  '8h. WskI07>P`<~mSnNvDOzMk<q(ESl_]an{7cm!{McW~3JCOkPK$%)14W7td-ms');
define('LOGGED_IN_KEY',    'winnCQ}:#8Q|37.W,|p(MRnJ0d]GNU!o,RXC/IK)CYxXt.TH!)]B5.gQo%W+5<s[');
define('NONCE_KEY',        '6yPfk_B@y-:_&RzE[7V+)!v#+2+OexH0Ne6[/{x{krITJza4aE/5auaJA?;4Zbm&');
define('AUTH_SALT',        'hhv4vL0vF[.@4s~nL=t|nOoZ1D}@v70tyJ13,!Oh :f|GLZ+XUStH!DMB JZ-13K');
define('SECURE_AUTH_SALT', '`tgV]OytC.7$$2vL[Bj.7Es%v.1*@T=hzANTsYPeDCT i-%jRY|#0GG^r$)9[o9w');
define('LOGGED_IN_SALT',   'd7_CvuKreC<mywlO{BtR_ZW7}|FN*k|jAcu=~.y<5o:k61JPuiFa5{@+gi^HGMLL');
define('NONCE_SALT',       '!<s{.K|pbIkvLd19jP~d3XtjQ%wL1?)W}aTzKab]F0=U aA p2i|>S^L11h*wM1Q');

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
