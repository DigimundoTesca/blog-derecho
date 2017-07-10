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
define('DB_NAME', 'derecho');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'rQcR^t=X5[}?I;3Swj2MiUfU+d#[mF:Fc1,JWCh8v~P?n }<x63>Dj_+([fCy_(*');
define('SECURE_AUTH_KEY', 'M&^8YM4)35B(8w7xbBm2.jsg:{ve{9e{*)g$Gy}%J^CT.tX{M97jO9m,3a 1!@lV');
define('LOGGED_IN_KEY', 'mK(&!U%Svi3V-$iY?KCGYGBj$d8<A0I<x[(SyKb2v,B%)ICywRWm[>A?x4)5[tLS');
define('NONCE_KEY', '-I5z.mR%HmolZh}QmG#UGP4r3 zw?K{4M2v1MLpBIkT-`ySYz)D-Z[8x]L.dWkO.');
define('AUTH_SALT', 'opZ=/EEzC}!ge[}8;@~p8+|CSKJPN?} Vt3:vo oI=:<H;5!L|*O;sD7%Dqn~c1w');
define('SECURE_AUTH_SALT', 'tKW_}+lAPjgZZ&-<uu]P[}}32aA!x8H<}lOttpW(w;n:?er<>jCA&cr1i,efYnRa');
define('LOGGED_IN_SALT', 'Cy>vu_;K8+BnU-KNgs;s+EvR:kS=&=7Mn5C$3ifqM2m#BIgkencSgdOIcbm4+7j[');
define('NONCE_SALT', '~,cF!bX6!6$@vVqYP 13#ac40{7wjhfGEUJ7@)WmDIgR#ikb_M(_DJEEfNN%Yc%C');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

