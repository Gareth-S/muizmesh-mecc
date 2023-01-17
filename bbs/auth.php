<?php

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'auth';
require_once __DIR__  . '/' .  'header.php';
/**
 * MODIFICATION DU MOT DE PASSE ADMIN
 **/
if(Util::isGET('password') && User::isAdmin())
{
    $cur = 'password';
	$out['subtitle'] = $lang['edit_password'];
	if(!empty($_POST) && HTMLForm::check('trip', 0, 50) && CSRF::check($token) )
	{		
		$config['admin'] = HTMLForm::trip(HTMLForm::clean(Parser::translitIt($_POST['trip'])), KEY);
		flatDB::saveEntry('config', 'config', $config);
		$_SESSION['role'] = '';
		setcookie('flatboard_trip', null, -1);
		$out['content'] .= Plugin::redirectMsg($lang['password_changed'], 'auth.php', $lang['login'], 'alert alert-success');			
	}
	else
	{
		$out['content'] .= 
		HTMLForm::form('auth.php' . DS . 'password', 
			HTMLForm::password('trip', '', '', 'your_admin_psw').
			HTMLForm::simple_submit('submit', 'btn btn-lg btn-primary btn-block', 'fa fa-check')
		);
	}
}
/**
 * ON QUITTE LA SESSION
 **/
else if(Util::isGET('logout'))
{
	session_unset();
	session_destroy();
	$_SESSION['role'] = '';
	setcookie('flatboard_trip', null, -1);
	$out['subtitle'] = $lang['logout'];
	$out['content'] .= Plugin::redirectMsg($lang['logout_confirm'], 'index.php' . DS . 'forum', $lang['forum'], 'alert alert-success');
}
/**
 * PAGE DE CONNEXION
 **/
else if(!User::isWorker())
{
	$cur = 'login'; # Indicateur de page
	$out['subtitle'] = (defined('FLATBOARD_PRO'))?'FLATBOARD PRO':'FLATBOARD';

	if(HTMLForm::checkBot() && HTMLForm::check('trip', 0, 50) && User::login($_POST['trip']) && CSRF::check($token) )
	{
		session_regenerate_id(true);
		# Création du cookie (name, value, expires, path, domain, secure, httponly)
		$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
		setcookie('flatboard_trip', $sessionTrip, time() + 3600 * 24, PATH_ROOT . DS, $domain, true, true);	
		# Récupération de l'URL précédente pour rediriger l'utilisateur après connexion
		$referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
		$referer = ($referer === HTML_BASEPATH . DS . 'auth.php') ? 'index.php' : 'javascript:history.go(-1)';
		$redirect = !empty($referer) ? $referer : 'javascript:history.go(-1)';
		$out['content'] .= Plugin::redirectMsg($lang['login_confirm'], $redirect, $lang['previous_page'], 'alert alert-success', false);
	} else {
		$out['content'] .= 
		HTMLForm::form('auth.php',
			# HTMLForm::password($name, $value, $class, $placeholder, $desc)
			HTMLForm::password('trip', '', '', 'your_admin_psw').
			HTMLForm::submit('login', 'btn btn-lg btn-primary btn-block', 'fa fa-check')
		);
	}
}
else 
{
	$out['subtitle'] = (defined('FLATBOARD_PRO'))?'FLATBOARD PRO':'FLATBOARD';
	$out['content'] .= '<div class="card">
  <div class="card-body">
    <h5 class="card-title">' .$lang['already_logged']. '</h5>
    <p class="card-text">' .Util::lang('already_logged_msg', $lang[$_SESSION['role']]). '</p>
    <a href="' .HTML_BASEPATH. '" class="btn btn-primary">' .$lang['back_to_site']. '</a>
    <a class="btn btn-secondary" href="auth.php/logout">' .$lang['logout']. '</a>
  </div>
</div>';
}
require PATH_ROOT . DS . 'footer.php';

?>