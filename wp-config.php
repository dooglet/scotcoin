<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scotcoin');

/** MySQL database username */
define('DB_USER', 'scotcoin');

/** MySQL database password */
define('DB_PASSWORD', 'scotcoin');

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
define('AUTH_KEY',         'hCH9lSgFCaagE56w9Z4JRsPrloIa7E5UDtiHY0Yv4JGKJoXEpQ5vdIHW0PhoJIAX');
define('SECURE_AUTH_KEY',  'K2tuzDGFYL3VZpciTVtPN2qfxpjLPhUetfrPDEz4RpqMxTF2qIhH5dEV9akImkBz');
define('LOGGED_IN_KEY',    'Vi3HvI2RvFXSbL2XaeHsLCSpQHS617cBHIhqMWwryi22W22gENe00m79Z4AdX08C');
define('NONCE_KEY',        'c79Foc8dOoEQXiIUHFrU2FuoupgxbhFyWM48LfV6XS9MvdIc0C441awaS83s8eJ2');
define('AUTH_SALT',        '7oYZPYouyyv2eR0B9GZZiedOCwrqvHaNYeCIUxo3NEwD6y2QrgivWRffgmbXt2nK');
define('SECURE_AUTH_SALT', 'Z4OprplWawFrp922RTtmP9Dk1OccDI2hm4M2bF12xYPXUstZXQtsIWBv9gkuirGJ');
define('LOGGED_IN_SALT',   'etj70x52pBgnINIeuqe0mKhGYzuN30rsCLi62x6rcfJdyk36AF8qewhsXfvMJVo6');
define('NONCE_SALT',       'i5RYFMvE77ZpTqgav9LCHLxqmxRrK1uC4HrA6rXgALTR2qKGQbJjasnDjCsgPdoG');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'youe_';

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
