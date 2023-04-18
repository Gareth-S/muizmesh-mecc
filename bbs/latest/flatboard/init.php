<?php defined('FLATBOARD') or die('Flatboard Community.');
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
/*
 *---------------------------------------------------------------
 * DEFINITION DE CONSTANTES
 *---------------------------------------------------------------
 */
# Version de FlatBoard
const VERSION 			= '3.1';
# Nom de code de la version de  Flatboard basé sur : 
# https://fr.wikipedia.org/wiki/Liste_des_parcs_nationaux_des_%C3%89tats-Unis
const CODENAME 			= 'TOKYO'; // mb_strtoupper('tromsø', 'UTF-8') for uppercase
# Date de la build
const BUILD 			= '230225';
# Formatage du timestamp
const TIMESTAMP 		= TRUE;
# Mots clés à filtrer
const CONTENT_FILTER 	= '/viagra|cialis|poker|casino|medicines|gambling|adult/';
# Séparateur de journal
const LOG_SEP 			= ' | ';
# Nombre de tentative de connexion autorisé dans la limite de temps autorisé
const MAX_LOGIN_ATTEMPT = 3;
# Bloquage par adresse IP
const BLOCK_IP 		    = TRUE;
# Temps de bloquage estimé en Minutes
const BLOCK_TIMEOUT 	= 120;
# Nombre d'élément à afficher sur la liste des plugins
const PLUGS_PAGINATION 	= 12; 
# Charset par défault
const CHARSET 		    = 'UTF-8';
# Les différents dossiers
const UPLOADS_DIR	    = PATH_ROOT . DS . 'uploads' . DS;
const DATA_DIR 		    = PATH_ROOT . DS . 'data' . DS;
const DATA_PLUGIN 	    = DATA_DIR  . 'plugin' . DS;
const BAN_DIR		    = PATH_ROOT . DS . 'data' . DS . 'ban' . DS;
const BAN_FILE		    = BAN_DIR   . DS . 'blocklist.txt';
const LANG_DIR		    = PATH_ROOT . DS . 'lang' . DS;
const LIB_DIR		    = PATH_ROOT . DS . 'lib' . DS;
const PLUGIN_DIR	    = PATH_ROOT . DS . 'plugin' . DS;
const THEME_DIR		    = BASEPATH  . DS . 'theme' . DS;
# JSON pretty print
if(!defined('JSON_PRETTY_PRINT')) define('JSON_PRETTY_PRINT', 128);
# Mode de déboguage: NULL, FALSE & TRUE
const DEBUG_MODE 		= TRUE;
if (DEBUG_MODE) {
    ini_set('error_log', PATH_ROOT . DS . 'error.log');
    if (DEBUG_MODE === true) {
        error_reporting(E_ALL | E_STRICT | E_NOTICE);
        ini_set('display_errors', true);
        ini_set('display_startup_errors', true);
        ini_set("track_errors", 1);
        ini_set('html_errors', 1);
    } else if (DEBUG_MODE === false) {
        error_reporting(0);
        ini_set('display_errors', false);
        ini_set('display_startup_errors', false);
    }
}
# Multibyte string extension loaded.
mb_internal_encoding(CHARSET);
mb_http_output(CHARSET);
/*
 *---------------------------------------------------------------
 * INCLUSION DES LIBS NÉCESSAIRE
 *---------------------------------------------------------------
 */
require_once LIB_DIR . 'Flatdb.lib.php';
require_once LIB_DIR . 'Asset.lib.php';
require_once LIB_DIR . 'Utils.lib.php';
require_once LIB_DIR . 'CSRF.lib.php';
/*
 *---------------------------------------------------------------
 * FICHIER CONTENANT LA CLÉ ENCRYPTÉE POUR LE MOT DE PASSE
 *---------------------------------------------------------------
 */
if(file_exists(DATA_DIR.'key.php')) include(DATA_DIR.'key.php');   
/*
 *---------------------------------------------------------------
 * RETOURNE LA LISTE DES LANGUES DISPONIBLES
 *---------------------------------------------------------------
 */
function langpack() {
	global $lang;
	return array('en-US'=>$lang['en-US'],'fr-FR'=>$lang['fr-FR'],'ru-RU'=>$lang['ru-RU'],'de-DE'=>$lang['de-DE'],'it-IT'=>$lang['it-IT'],'es-ES'=>$lang['es-ES'],'zh-CN'=>$lang['zh-CN']);
}
?>