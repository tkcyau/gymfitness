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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OEplD/uFw/6aivGwW2ySijf1FJGZ/mb1vi7JU73N5oOS6jPbGSCrLsLlKLYXIUAVc+9MiXCwQb1vy2z8Yue5XQ==');
define('SECURE_AUTH_KEY',  'WasbMf1f5MEmZupIjRdcGC4pxfnNOtRXxhYiBGWhZFwTziaCM8Zdb/ZKqsZgzFokFaQgmLKiwVjzxhCFQamZFg==');
define('LOGGED_IN_KEY',    'PHDHsyICcaGLql02Y4bVuQ2wRXrGXkX0xhij8uxrgfFAoK/5U3oR+uusQ5f4/9+hnQs5QU/Zv5J026QP+3U82A==');
define('NONCE_KEY',        '0kCBV+xUh1n3DI5dK6hXgVdeVjcSiJZ9k9258UQyvU/0QHjCfexgJYB3y6pDN9Fvd9BZzFdMgBotisumyex9xg==');
define('AUTH_SALT',        'vTVXCT3krRdmRalgCASADbJkN5k+Ir3T5m3tPYAGiuuVam5v8G21bMRzNkTBq0cqOFQVoeLGBR5JE12a2S3IqA==');
define('SECURE_AUTH_SALT', 'vyztjlDxGPB8RyFCpZBxAgxlW79dYzMJU5kVcAhrR+5InX7Y67tG9UC60Fr8etJJQ4xUxJwUCcGI/AqqLSsRqQ==');
define('LOGGED_IN_SALT',   'FiM5+So21K84wYjSXJOM6TPJxewxNKNRXZwhwvVgwj94RgqdgTd759qi1O9PodQrUtOU3Zh9XU5rCw4NwOqF2Q==');
define('NONCE_SALT',       'muy6UTsGZPdum4BEmUtmOINZFdljDM41LHZt7WTu4WZ94Y6kgdXdhfKMwBxxIebhRqsgOljzM96+qzDMYBzh2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
