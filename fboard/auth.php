<?php

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
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
	if(!empty($_POST) && HTMLForm::checkPass('password') && CSRF::check($token) )
	{
		# suppression de la clé actuelle
		if(file_exists(DATA_DIR.'key.php')) @unlink(DATA_DIR.'key.php');
	    # création de la clé
	    $key = password_hash($_POST['password'], PASSWORD_DEFAULT);
		# sauvegarde la clé du mot de passe dans un fichier
		@file_put_contents(DATA_DIR. 'key.php', "<?php define('KEY', '$key'); ?>", 0666);	
			
		# Nouveau hash Flatboard 2.0 	        		
		$config['admin'] = hash_hmac('sha1', $_POST['password'], KEY);
		flatDB::saveEntry('config', 'config', $config);
		$_SESSION['role'] = '';
		$out['content'] .= Plugin::redirectMsg($lang['password_changed'], 'auth.php', $lang['login'], 'alert alert-success');			
	}
	else
	{
		$out['content'] .= 
		HTMLForm::form('auth.php' . DS . 'password', 
			HTMLForm::password('password').
			HTMLForm::simple_submit('submit', 'btn btn-lg btn-primary btn-block', 'fa fa-check')
		);
	}
}
/**
 * ON QUITTE LA SESSION
 **/
else if(Util::isGET('logout') && User::isWorker())
{
	session_unset();
	session_destroy();
	$_SESSION['role'] = '';
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
	# Protection anti brute force
	$maxlogin['counter'] = MAX_LOGIN_ATTEMPT; # nombre de tentative de connexion autorisé dans la limite de temps autorisé
	$maxlogin['timer'] = MAX_LOGIN_ATTEMPT * BLOCK_TIMEOUT; # temps d'attente limite si nombre de tentative de connexion atteint (en minutes)	

	# Initialisation variable erreur
	$error = '';
	$msg = '';

	if(isset($_SESSION['maxtry'])) {
		if( intval($_SESSION['maxtry']['counter']) >= $maxlogin['counter'] AND (time() < $_SESSION['maxtry']['timer'] + $maxlogin['timer']) ) 
		{
			# écriture dans les logs du dépassement des 3 tentatives successives de connexion
			@error_log('Flatboard: Max login failed. IP : '.User::getRealIpAddr());
			# message à affiche sur le mire de connexion
			$msg = Util::lang('error_maxlogin', ($maxlogin['timer']/BLOCK_TIMEOUT));
			$out['content'] .= Plugin::redirectMsg($msg, 'index.php', $lang['home'], 'alert alert-danger', FALSE);
			$error = true;
		}
		if( time() > ($_SESSION['maxtry']['timer'] + $maxlogin['timer']) ) {
			# on réinitialise le control brute force quand le temps d'attente limite est atteint
			$_SESSION['maxtry']['counter'] = 0;
			$_SESSION['maxtry']['timer'] = time();
		}
	} else {
		# initialisation de la variable qui compte les tentatives de connexion
		$_SESSION['maxtry']['counter'] = 0;
		$_SESSION['maxtry']['timer'] = time();
	}
	# on incremente la variable de session qui compte les tentatives de connexion		
	$_SESSION['maxtry']['counter']++;	
	
	$connected = false;	
	if(HTMLForm::checkBot() && HTMLForm::checkPass('password') && User::login($_POST['password']) && CSRF::check($token) && $error=='' )
	{
		session_regenerate_id(true);	
		$connected = true;
	}
	if($connected) {
		unset($_SESSION['maxtry']);
		$out['content'] .= Plugin::redirectMsg($lang['login_confirm'], 'index.php', $lang['home'], 'alert alert-success');
		#exit;
	} else {
		if($error) {
			$out['content'] .='';
		} else {	
		$out['content'] .= 
				HTMLForm::form('auth.php',
					HTMLForm::password('password').
					HTMLForm::submit('login', 'btn btn-lg btn-primary btn-block', 'fa fa-check')
				);
		}
	}
		

}
else 
{
	$out['subtitle'] = (defined('FLATBOARD_PRO'))?'FLATBOARD PRO':'FLATBOARD';
	$out['content'] .= '<div class="card">
  <div class="card-body">
    <h5 class="card-title">' .$lang['already_logged']. '</h5>
    <p class="card-text">' .Util::lang('already_logged_msg', $lang[$_SESSION['role']]). '</p>
    <a href="javascript:history.back()" class="btn btn-primary">' .$lang['back_to_site']. '</a>
    <a class="btn btn-secondary" href="auth.php/logout">' .$lang['logout']. '</a>
  </div>
</div>';
}
require PATH_ROOT . DS . 'footer.php';

?>