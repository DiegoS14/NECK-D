<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'wc' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '8IzsS8BF,F~p;et2mZ)hhX*O~&ySC;):Kk797VwF%x Yd1STLQ~K(yd&1T|E%1w`' );
define( 'SECURE_AUTH_KEY', '{QbhY^B3/0&;ne6Rjbz_*fD/&8HkI;%8Bvd[ByP{zd]IC1[X+X3:3>*yD)=gZh.q' );
define( 'LOGGED_IN_KEY', 'fXEz`sh8%cLhU;uZw.Qh,b[5bq<g/l!g{zi=[J}B^Rv[<jO1.)Ff1I4I~@,E`5PZ' );
define( 'NONCE_KEY', '`o%L,hj#]JL_ff(Q,GbL}.Z(aJZYgp:@Mq/GZ1z^>]o$tmU;Pf7Q1pYl4!2trX|d' );
define( 'AUTH_SALT', 'Jg([Uo;U5##u5f]e1G~^dgW2FF @2z hJ9OVKyPjv~GAiG~]6R?y`K<dR^o~TB;K' );
define( 'SECURE_AUTH_SALT', '{32zVR uYEI8[^0~=SL>&DU=x0wrO:T{<89x=U70+X2oG~lZXWbHAR)FkO* vs%I' );
define( 'LOGGED_IN_SALT', 'MV9DR`krkSdUwh*9w~F9;#H+9THod_~P3ts7qj!q#^%iT)< @y-#Ac^yH+)xPDg%' );
define( 'NONCE_SALT', '*rpWlL%`*S2!+PPWL(8*lau]0D^`]z]af)Ygu${,Th[0L3RfPlh!U^cc)sBus]qO' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

