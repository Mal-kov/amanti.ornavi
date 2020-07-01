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
define( 'DB_NAME', 'wp_woo_cream' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FXNzRX%.fie(uL.O+lkW|LI_F&nAh$J<OIxHkhdv=fiLh)T0 F,7i#0 GVgpjI<i' );
define( 'SECURE_AUTH_KEY',  'pOjfRlv{HTj!.Tl?C?%EZa>pjT/ bQ(fEz4Dppd>v:,M23fd=<|U `J9!t+<*$7x' );
define( 'LOGGED_IN_KEY',    'hDVtWHsGi<H}5m`iGo}pO+=?^@4iX|m+}v}J@K-5n{CLYt2rNf,hj2l[oN1,z)+K' );
define( 'NONCE_KEY',        'B|A7F[>U8y(^`[c4|Y+8q/!uK+nZx/=lgTbWY/#}5RO|XhQ)Y|Y1m.HOuhC{O=UO' );
define( 'AUTH_SALT',        'K-z.*2LaPl*@z*b@bgRBMd*.hndCW+8f(WR9Q*TNe|phr&`L|>v;.0,@u%CD~xyh' );
define( 'SECURE_AUTH_SALT', 'gF Ww_{dN%#q4,:{po  5ic`b[x=UD7P7Tg?GzmbTXs{&yVJuE(c5sch3v1yz(nK' );
define( 'LOGGED_IN_SALT',   '+mopg:_znBnhBQvjl=WdpD!Q;8S;/6+[^&x(JNFMX@AA2HFwq9P,zbbw+J@2.Pe)' );
define( 'NONCE_SALT',       'ukG(b);qHtl[JQwsjy?%+M@$!=DrldR:EY]yDxC1IVEpg56)du?7%{Pwgg]`T`q_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cream';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
