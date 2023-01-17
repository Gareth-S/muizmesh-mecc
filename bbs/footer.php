<?php
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
if(!isset($out))
{
	exit;
}

// timestamp en millisecondes de la fin du script
$fin = microtime(true);

# Traitement du thème
$ThemeDir = THEME_DIR . $config['theme'];
if($config['theme'] == '' or !is_dir(THEME_DIR . $config['theme'])) {
	header('Content-Type: text/plain; charset='.CHARSET);
	echo $lang['theme_not_found']. ' <pre>' .$ThemeDir. '</pre>';
	exit;
# Template pour les flux RSS
} else if($out['self'] === 'feed') {
	require $ThemeDir . DS . 'feed.tpl.php';
	exit;
# Template de la page de connexion
} else if($out['self'] === 'auth') {
	require $ThemeDir . DS . 'login.tpl.php';
	exit;		
# Template du Tab. de bord
} else if($out['self'] === 'config') {
	require $ThemeDir . DS . 'dashboard.tpl.php';	
	exit;	
# Sinon on intègre le thème principale
} else
	require $ThemeDir . DS . 'main.tpl.php';
	exit;
?>