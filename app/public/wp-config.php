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
define('AUTH_KEY',         'XYVAN8HZi1KkrVPjFwNmkFjynB7O0Bho0lNT0ayEkjcID6zSmm5E8znKS1LMk0D9O1acWavCp3zGFbZDfvXpKA==');
define('SECURE_AUTH_KEY',  'R0dc0ElQdT26iJF29TQ6dPEd6gMS8KKg3Lacv3khdnufYXJzTiG5ygtz5b4w0FaOoRu/viHUxgiIYQSICWodOg==');
define('LOGGED_IN_KEY',    '2Ki/DauYROScCyyP6yxYiMiRYJypHbYmLLh14I2zIyRhedAvopGLnMxJeEzh2pt57kx/YOQAFDqhT2xi36VmZw==');
define('NONCE_KEY',        'TbZ5TC+Ds0Lo+5l/+NAMackd+MnVZMrArJLKcuJdJqncHz4mUMtmP34EdM0Z5mT+HeLs7wqx4xUWutJEIdioOA==');
define('AUTH_SALT',        'ZGqvFNzY3wtAnX1BmWrmUfnSCAZMLc3rdJVr++hWahHhMZqvhYrAJelgK3aEZvfkN0f8tupRNHv+lrHzMsDomQ==');
define('SECURE_AUTH_SALT', 'WNrvGIve9xqMMpNXs8WhHadw8lPBoSCXVsXQVfid51HyeSj96edQYcabp5S8ep6YqlzpbS5xKAOi5uqH54dnZQ==');
define('LOGGED_IN_SALT',   'JkFImccC24Nzb8M/LNB1+B42Q5eskW2SL6h8IwxPM2RdTQY4cqcgakS4ZkUoJbz9u3h+LFyOu6Q+QtO0W97KsQ==');
define('NONCE_SALT',       'zolqEt4D998oR/0fR7epCVdnaF+6gX8y1PgcM4KX6OgtznkZfniWNFeko27JGK45D2+oL2YYD9MQSCoNZGFmGQ==');

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
