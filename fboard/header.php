<?php

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
if(!isset($out)) exit;
# Try Gzip
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) 
	ob_start("ob_gzhandler"); 
else 
	ob_start();
	
# Security constant
const FLATBOARD = TRUE;
# timestamp en millisecondes du début du script
$debut = microtime(true);
const DS = '/';
const BASEPATH = '.';
# Define the path to the root directory (with trailing slash).
const PATH_ROOT = __DIR__;

include PATH_ROOT . DS . 'init.php';

if(!flatDB::isValidEntry('config', 'config'))
	Util::redirect(BASEPATH . DS . 'install.php');

# Session & déclarion du jeton
if(!session_id())session_start();
$token = CSRF::generate();

if(!isset($_SESSION['role']))
	$_SESSION['role'] = '';

# Chargement de la config
$config = flatDB::readEntry('config', 'config');
# Math CAPTCHA
if (!defined('CAPTCHA'))     define('CAPTCHA', isset($config['math_captcha'])? $config['math_captcha'] : FALSE );

# Constante ayant besoin de rendus HTML
if (!defined('HTML_BASEPATH'))     define('HTML_BASEPATH', 		rtrim(Util::baseURL(), '\\/') );
if (!defined('HTML_PLUGIN_DIR'))   define('HTML_PLUGIN_DIR',	HTML_BASEPATH . DS . 'plugin' .DS);
if (!defined('HTML_THEME_DIR'))    define('HTML_THEME_DIR',		HTML_BASEPATH . DS . 'theme' .DS. $config['theme'] .DS);
if (!defined('THEME_CONFIG_PATH')) define('THEME_CONFIG_PATH',	THEME_DIR .  $config['theme'] .DS);

# Vérifie l’existence du fichier langue en configuration, sinon on charge l’anglais
$langFile = LANG_DIR . $config['lang']. '.php';
if (file_exists($langFile)) require_once $langFile;
	else require_once LANG_DIR . 'en-US.php';
	Util::checkCopy($langFile);
	
require_once LIB_DIR . 'User.lib.php';
# On vérifie nos IP'S bannis
User::checkIP();

# API Form
require_once LIB_DIR . 'HTMLForm.lib.php';

# Class Plugin
require_once LIB_DIR . 'Plugin.lib.php';

# On répertorie les plugins
$plugins = flatDB::fdir(PLUGIN_DIR);
foreach($plugins as $plugin)
{
	// Fichier Langue du plugin
	$plugin_lang = PLUGIN_DIR . $plugin . DS . 'lang' . DS . $config['lang']. '.php';
	if (file_exists($plugin_lang)) require_once $plugin_lang;
		else require_once PLUGIN_DIR .$plugin. DS . 'lang' . DS . 'en-US.php';	
			
	// Chargement du plugin si au bon format
	$extend = PLUGIN_DIR . $plugin . DS . $plugin. '.plg.php';	
	if (file_exists($extend)) require_once $extend;
}
# Installation & initialisation des plugins si actifs !
Plugin::hook('install');
Plugin::hook('init');

 # Markdown
if($config['editor'] === 'markdown'){
	require_once LIB_DIR . 'Parsedown.lib.php';
	require_once LIB_DIR . 'ParsedownExtra.lib.php';
	require_once LIB_DIR . 'BBlight.lib.php';
	# Objects
	$Parsedown = new ParsedownExtra();
	# Security of Parsedown Extensions
	$Parsedown->setSafeMode(true);
	$BBlight = new BBlight;	
# BBcode		
} else {
	require_once LIB_DIR . 'BBcode.lib.php';		
	# Objects
	$BBcode = new BBCode;		
}	 	
# Parseur de contenu au format Markdown OU BBcode
require_once LIB_DIR . 'Parser.lib.php';
 
# Modération
require_once LIB_DIR . 'EntryLink.lib.php';

# Pagination
if(in_array($out['self'], array('index', 'blog', 'config', 'view', 'feed', 'search')))
	require_once LIB_DIR . 'Pagination.lib.php';
	
$_GET = Util::fURL();
$cur = (isset($cur) ? $cur : null);

# Rendus HTML
$out['content'] = '';
# Titre de la page en cours
$out['sub_prefix'] = '';
$out['baseURL'] = Util::baseURL();
?>