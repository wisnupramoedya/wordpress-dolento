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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!)nvzHtw%=}-E~>1Y:D9Y+%SE@5l+GXBmQa2:_NB]}p [y/GRu(y/y:#EaCyRRUy' );
define( 'SECURE_AUTH_KEY',  'm{[h!J8rw^{RjP@)[?~L/(m`Bh6jK(b)@q2-J5{I/~CBY(c7[}RDx=66?6i:63UH' );
define( 'LOGGED_IN_KEY',    'tj`/]}-VatG4 DC~NCD:FX*%{U8vle8QkjuqvHQf~YkQ!LnG~&,*M0{5u+~pNgv@' );
define( 'NONCE_KEY',        '|Tv~aFegF])ab^3%a?1%T(fY/;A(j}kT~Q%%!/,HIAKdLG7R<f9_d?B>(q]jI]&+' );
define( 'AUTH_SALT',        'F@0o:NHX{({2mpM4Ez)}mHa/w^f*)TVt!,BW&bA_**-y4k|],4b9svf*4mdYtSOB' );
define( 'SECURE_AUTH_SALT', 'Uhi0g%[aiPswb(Zn7&2X0i:P}B?b|;@IsC2c@@J(KAgs-<[|wJ4y7IdD}ElxWb!@' );
define( 'LOGGED_IN_SALT',   '# .H|hs(<FM`-^?WiUTOiT)qZxa3DI1g$NSK>50yq@Z1;{sClf3[RSDL-ZIAF/0s' );
define( 'NONCE_SALT',       '^>%I*{l{ o_ J#4Nn6uC}5lRU[R<=X<.=3|(3<mgAU9;YIl?z?)hItcf8,sST1!t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
