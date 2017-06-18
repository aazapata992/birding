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
define('DB_NAME', 'birding_db');

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
define('AUTH_KEY', 'KsPM:5M+=K+~LkQqPITZqEP&Ac_~D~MZzy_~W.j]cgyzS)g~NERLjD9%MFu)/x!d');
define('SECURE_AUTH_KEY', '-wA{9Ms@:md>#=)i?smbLa&Q/bvhWf7JP^E>|l=tV.D}bRh:d2NMx*@,G]$sRnJI');
define('LOGGED_IN_KEY', '?0#6f=&X5K0VI&B;gI=#-9teXE^Ky<c,6qzON_K!qF=Oa6RX$a7JP.<`U&519=u:');
define('NONCE_KEY', 'Dz~;^wnk8%=GA:,y9Q9?J.Xo VtsE)VK.SW`!s%3.qQR%V{Qu%b{+.IFkjd|[&ag');
define('AUTH_SALT', 'uf> m.V`XIsMW<#EMJXRboj]6&;a35E5^u.-ak[/BWt]T}Txw9DSaM&MINQLJUR*');
define('SECURE_AUTH_SALT', 'Xh J<i1to8aDUk2?%LJsW%%GehI{VOk%f>)u@^%D;:d@,y2O&J?YOJ>R& F5PSkN');
define('LOGGED_IN_SALT', 'tM>H{$i%?a;A+uV,EB5G@QEn%Lf+9!<fho/xywAx%Ha(N7%fN+KRqhpIMy-U?5Fj');
define('NONCE_SALT', 'BEMNt+.)AWEl>cJyPTIQ.>gys:mmcakRSQnaJ{^RTrOyHOM5GPk+gRqBW=4w<b{F');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'bir_';


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

