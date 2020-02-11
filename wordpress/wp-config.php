<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db735704641');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo735704641');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Ighilkrim515!');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db735704641.db.1and1.com:3306');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '05-]kO}w~#Pny:M4.r*Ovzu1d[rKMg4DvZlg&lGibb;y#ZDeXz>-vy>/U+Bq(kSO');
define('SECURE_AUTH_KEY',  '2L0dMDOn5;[h]%j!Qlc9:?kUCa;l!@?KN=GAlQv/`NLlr+|IK >wocbz.]=yBQA+');
define('LOGGED_IN_KEY',    '(?bM+LZ2xKX$V;&ZFsD#yuYi`Z?isk ZhRTnk})g^A_LKP2B6`H%J49zY}S`>4Vx');
define('NONCE_KEY',        'W z?j_z!x#B?(YuAOeU&Tw@^4D=)084{i9.UX}jU Ymf,DL=C6bZKm/e?,iN`%:6');
define('AUTH_SALT',        '=vpCvXM(EmZR?ptHlJmpkm#Y1q}Sh$Yb{H!Q]2tW)yr}Sxc 0{p%;64D)fMy0#ZC');
define('SECURE_AUTH_SALT', 'q^u)RzY)*c8LrlP8 8;,;rLhpZuQkqHb)^H%X@$.9obQuiIt:p@9`tjqDuRXdAn{');
define('LOGGED_IN_SALT',   'W>-f@TXOMA-Mv61~HY0?6en}zBAH8(DY_I43iJddJ9:}w#zs.zgngkmqGdRVHj6N');
define('NONCE_SALT',       'M8_[l/oEW*-YZQ0E-?&S>9@7W`SOWfGRVV9H9YO;Y5C?Ce|?BAC&Z<6-8e+q5D=P');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');