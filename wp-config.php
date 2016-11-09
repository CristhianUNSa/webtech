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
define('DB_NAME', 'u747126054_habub');

/** MySQL database username */
define('DB_USER', 'u747126054_nyvug');

/** MySQL database password */
define('DB_PASSWORD', 'JujaSaDaMu');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'J14KXB5UyKOfeoaDVblSwmcv0xapI160iZzW1UqJ8ZxBq5bbcpYmK3oK1CwRYEHO');
define('SECURE_AUTH_KEY',  'eOAkaqoN410VMvzewtsB9sHF9BmB9zocHRDzyZuK2uzo6KFl5NeDieuAmvOCKxOL');
define('LOGGED_IN_KEY',    'YdDpTGlm7wz80mNKYm8hTRX1swhw5RYQRWp89FRoHNau9OtIRIP8hf5T4v26VBHL');
define('NONCE_KEY',        'pESkp3sCfiP21yJAO10ELog8QXcLWFHozUxKa0f3fGElDtMLq4j83uQQDzKotxFt');
define('AUTH_SALT',        'MOfPkFSV6ycBgPs9jegJpRccZwdyB7cKh5goPI7KWUZVnn54DLRre8T5NP3G0Z8O');
define('SECURE_AUTH_SALT', 'Pw455x45yShbOioBeeoGnrg29YDWUyGJL8oqiooMG9LmmrheViewtNLD0AZSJ9sN');
define('LOGGED_IN_SALT',   '0rfRYMHesvy8PtKBifyWsZfvlDDBjplvSkQyY67Hl1hahicDTzR86bQIsVXe9KJA');
define('NONCE_SALT',       'Mym6UrB61QQn5GhX8p1dAzUIRQesJ51QEB3JR0abMh1nSzGl79VktD4w5gZF7Oau');

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
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'h5zf_';

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
