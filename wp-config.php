<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'vulo');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P|~U9,=oFe|^DNtQs$<lG_`/`ZlRXsfz$zM2;$=g5cW=hY8>Q()#&(w?5C[D-g%n');
define('SECURE_AUTH_KEY',  ']*Eq)f<diRZw?,s9/,uf@*[m[Gt;h4QeWQ)PN|,iX{UDfkfbytFn.MZ!}]=1F3J]');
define('LOGGED_IN_KEY',    '$a6^7&wl0u?k&8ekE8q c{-PZGrEV<g)0jwHK%fUjA>=,cn,RKr.6z9W5ZJt:>Wq');
define('NONCE_KEY',        'X};^]wI8=szcHfqji3T#23(jyWgf>u^q4xD~PVk/4:$r*C#uPwZh%<?r5uvzKWe6');
define('AUTH_SALT',        'd1{ EY1;AgSQK)uC(g@INUW]SJG(%.sUB#!e<(>I!nI24lZpXOeC(8nG=!Qr3nWD');
define('SECURE_AUTH_SALT', 'RvA6]BGO~?2}9EH8$4$#+|WuSf4^W~~hWL]b8@4UtNAU?Zvu@2~PC;kYX}cWS}d{');
define('LOGGED_IN_SALT',   'KK2>$nG3b{o,s@d%99sImucW;gWE_YC1gz3d9>o)L#@/:Mocp?pTajqR<UNX,<*(');
define('NONCE_SALT',       '9 OW?JT@yZrMtjCLn4a=z2B4nkU>:CQ,.B(>H7OocIDjOfB^ygGsf*TZoEVM%8 C');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');