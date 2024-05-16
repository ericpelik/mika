<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mika' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$kX[FuY_MgbtGAdg[Z~GfrK 42j/@oZ)RR_;<Z!QU;_1n3>]J5!Nm^3]&< yOz;/' );
define( 'SECURE_AUTH_KEY',  '&ehnEg^ZUr`:`dJ)]1.EE$1=d3K)c7/uRtpVaXq-SetX%p.l{yn~3?`x9daN+6nd' );
define( 'LOGGED_IN_KEY',    '1>lcM]SG3bgJ|%F.#;%MY&f`BS,{sWVvS7zV;hU{Z/V|[M: qM^a<@r|ap>K}]$*' );
define( 'NONCE_KEY',        'l<khj|XlmD?oM|TfV|(;lS-%?u]c]t3XAV~< r$kKx0fdF:*T)y-*<@duBjT@FA(' );
define( 'AUTH_SALT',        'BbVf[R9r0iZ9[$Ddr|sFYY$SypaU6*h~USXJuiG>?~s1z^w>*t/%DdtND sg,6RK' );
define( 'SECURE_AUTH_SALT', ';1hhJN.qZ<V54C=i4ub1kc]$}nJ_v1Jk615(hK!Oqpy17LuXf(0(gns<gpg7M@Fz' );
define( 'LOGGED_IN_SALT',   'Ip>O8Xg$3c}SgAfH-T{{r{,i*(S$Vk{]byG.!2P)sG4Gm}5?)_(8}v^!&^^)`9)T' );
define( 'NONCE_SALT',       '=I2L09< >/(($n~H+4>;%eA;wBpFNdT!eo;mI2l=|9g@*vX7cmTaU+:wRhLSssA.' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
