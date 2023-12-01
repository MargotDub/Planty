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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'Xaqx*dEbFOp  `5wNbClzBgpd,ktTMJ-o|OPc46x=Za]DXkML6Wy>$~4wKK-&2s}' );
define( 'SECURE_AUTH_KEY',  ',;aHZDF-uo/ne~1Jz5h)t?kUVNyvO+-Ce~&yCrcmXx:ypNS)!N=JC81^*U`kv!+k' );
define( 'LOGGED_IN_KEY',    '_.)y`5-X[RSAJ|9Dph#&DW75{i|AuwbJ?fHZj17%]y:CI8u;Rc./hQ<~dugFwQJ6' );
define( 'NONCE_KEY',        'F`<9%Q$T<1H-nKuw8fBH6Ks!AgdxM/WICGM[COmVcLb]_1C_<kwxN|HZ0[o<J*6l' );
define( 'AUTH_SALT',        'Jp8&Msl@a1w(PFm/`BRML--<{wFl&O?6MrrZU@y(<d2$Gv>IScS2H=A$mdI*0k3L' );
define( 'SECURE_AUTH_SALT', '}[C3{*rg7LwQ$eb*1tMQ|wdP(wZw9n|J,#f!yL-Ynw_d[nVI}HDi6;0T:W(&NM?5' );
define( 'LOGGED_IN_SALT',   'zI1.*zeTd.N611U=[v?G|hA?BhPV| W>so&=#Tvy!@y;t[0)Eqb}im)-$vUu1R+Q' );
define( 'NONCE_SALT',       '>)E@P`k+f}ejsH,s^^E|!*,PrR9Rk|!-TqisRtvQ{YNR?GDn$ADFA{/*y0O1!c#1' );
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
