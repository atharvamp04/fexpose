<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NW5OB3]df5lvzUZH)GaK*CTx1FeD35x<v2Cc3Dsy;_PAto7K1=Th&KS%mQAvd=)p' );
define( 'SECURE_AUTH_KEY',  'P0=c;bJh4Y/<2<+R!H=H!219wvhkue@~0{Cx:vx[#9#n@A(Wh>Rptin|j;n?W&dX' );
define( 'LOGGED_IN_KEY',    ']Dv0D j(c9?SfdENlhz22`0w%G!1-Z22qX u!4dz><cwq=!xHnXa9mXK`Ujm*QqT' );
define( 'NONCE_KEY',        'kSKB`7d!Fv.?)8H[yqn%Pxo |auaiivcEoBq2xzQmh9US(:n`_myLhpi<PF6=)}+' );
define( 'AUTH_SALT',        'vas%YNwZq=+RBLT*f>_T5y@Y$wjY3:TpTW1P)+p@c,?I}{KQ /CED:J97sBdpJ/b' );
define( 'SECURE_AUTH_SALT', 'lvgIn%g`d)j[@c@dS,w:1oz8J/;~KkP.8,cf+iQvP.Is%2d1#4 2|MJX><N( e67' );
define( 'LOGGED_IN_SALT',   'F7J[y(K_P_jGQuAs .vooxs:+(BUMFG@w_+SFC?Z8-2NB3~q)nfk%YE&DlG6wU>g' );
define( 'NONCE_SALT',       'M7:/_=>-sI|p`P?Q{Q3P9j|D|WHMWGMES^R`[EdH:4LX#Cy/lhMOelDom fqH7OL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
