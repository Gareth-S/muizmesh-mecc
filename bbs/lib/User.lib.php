<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

class User
{
    /**
     * Protected constructor since this is a static class.
     *
     * @access  protected
     */
    protected function __construct()
    {
        // Nothing here
    }
	/**
	 * Droits administrateur
	 * User::isAdmin();
	 **/	    	
	public static function isAdmin()
	{
		return $_SESSION['role'] === 'admin';
	}
	/**
	 * Droits modérateur
	 * User::isWorker();
	 **/	  	
	public static function isWorker()
	{
		return $_SESSION['role'] === 'worker' || $_SESSION['role'] === 'admin';
	}
	/**
	 * Droits pour l'auteur (Flatboard 3)
	 * User::isAuthor($entry, 'reply');
	 **/	  		
	public static function isAuthor($entry, $data=false)
	{	
		global $sessionTrip;
		$output = '';
		# Vérification de la session par rapport au pseudo dans les discussions		
	    if( $data == 'topic' ) {
			$topicEntry    = flatDB::readEntry('topic', $entry);
			$tripCrypt	   = HTMLForm::trip($sessionTrip, $entry);
			$authorLogin   = isset($sessionTrip) ? $tripCrypt === $topicEntry['trip'] : FALSE;
			# On vérifie que l'auteur utilise bien la syntaxe user@pass 
			if(strpos($tripCrypt, '@') !== false)
			    $output = $authorLogin;
			# Sans quoi on utilisera uniquement la session de création du message (durée donc limitée).
			else
			    $output = isset($_SESSION[$entry]);
	    }
	    # Vérification de la session par rapport au pseudo dans les réponses	
	    else if( $data == 'reply' ) {
			$replyEntry    = flatDB::readEntry('reply', $entry);
			$tripCrypt	   = HTMLForm::trip($sessionTrip, $entry);
			$authorLogin   = isset($sessionTrip) ? $tripCrypt === $replyEntry['trip'] : FALSE;		    
			# On vérifie que l'user utilise bien un mot de passe 
			if(strpos($tripCrypt, '@') !== false)
			    $output = $authorLogin;
			# Sans quoi on utilisera uniquement la session de création du message (durée donc limitée).
			else
			    $output = isset($_SESSION[$entry]);
	    }
	    # Non renseigné, une simple session de créateur suffit ;)
	    else {
		    $output = isset($_SESSION[$entry]);
		}
		# Résultat de tout ça.
	    return $output;		
	}
	/**
	 * Fonction qui permet de determiner la session
	 * Revision Flatboard 3
	 * User::login($password);
	 **/	  	
	public static function login($trip)
	{	
		global $config, $lang;
		$tripNocrypt= HTMLForm::clean(Parser::translitIt($trip));
		$tripCrypt 	= HTMLForm::trip($tripNocrypt, $trip);
		# Session Admin
		if($tripCrypt == $config['admin'])
		{
			$_SESSION['role'] = 'admin';
			$_SESSION['trip'] = $tripNocrypt;
			$_SESSION['mail'] = $config['mail'];
			return true;
		}
		# Session Modérateur
		else if(isset($config['worker'][$tripCrypt]))
		{
			$_SESSION['role'] = 'worker';
			$_SESSION['trip'] = $tripNocrypt;
			$_SESSION['mail'] = $config['worker'][$tripCrypt];		
			return true;
		}
		# Session utilisateur (on exige l'arobase)
		else if (strpos($tripCrypt, '@'))
		{
			$_SESSION['trip'] = $tripNocrypt;
			return true;
		}
		# Erreur d'identification après check de @
		# Honneypot for bot :)
		else 
		{
			$_SESSION['bad_user_syntax'] = 1;
			return false;			
		}
	}
	/**
	 * Fonction qui regénère le fichier KEY
	 * Revision Flatboard 3
	 * User::generateKey($trip);
	 **/	  	
	public static function generateKey($trip)
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
	}	
	/**
	 * Encrypt and decrypt
	 * 
	 * @author Nazmul Ahsan <n.mukto@gmail.com>
	 * @link http://nazmulahsan.me/simple-two-way-function-encrypt-decrypt-string/
	 *
	 * @param string $string string to be encrypted/decrypted
	 * @param string $action what to do with this? e for encrypt, d for decrypt
	 */
	public static function simple_crypt( $string, $action = 'e' ) {
	    // you may change these values to your own
	    $secret_key = KEY;
	    $secret_iv  = KEY;
	
	    $output = false;
	    $encrypt_method = "AES-256-CBC";
	    $key = hash( 'sha256', $secret_key );
	    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
	
	    if( $action == 'e' ) {
	        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
	    }
	    else if( $action == 'd' ){
	        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
	    }
	
	    return $output;
	}	
	/**
	 * Protège l'affichage du mot de passe d'un modérateur
	 * User::get_starred('password');
	 **/	
	public static function get_starred($password) {
	    $len = strlen($password);	
	    return substr($password, 0, 1).str_repeat('*', $len - 2).substr($password, $len - 1, 1);
	}	
	/**
	 * Protège le mail via un affichage js
	 * User::protect_email("youremail@here.com");
	 **/
	public static function protect_email($email,$word)
	{
		$pieces = explode("@", $email);
		return '<script>
					var a = "<a href=\'mailto:";
					var b = "' . $pieces[0] . '";
					var c = "' . $pieces[1] .'";
					var d = "\' class=\'badge badge-dark\'><i class=\'fa fa-envelope\'></i> ";
					var e = "' . $word .'";
					var f = "</a>";
					document.write(a+b+"@"+c+d+e+f);
			</script>
			<noscript>Activer JavaScript pour afficher le mail</noscript>
		';
	}
	/**
	 * RÉCUPÈRE L’IP REEL
	 **/
	public static function getRealIpAddr()
	{
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
	    {
	      $ip = $_SERVER['HTTP_CLIENT_IP'];
	    }
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
	    {
	      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    else
	    {
	      $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}		
	/**
	 * AJOUTE ET VÉRIFIE SI UNE ADRESSE IP EST BANNIE
	 **/
	public static function is_ban($ip) 
	{ 	  
	  $IPlist = BAN_FILE;
	  if (file_exists($IPlist)) {
	    $blacklist = file_get_contents($IPlist);
			if ($blacklist != '')
				return strpos($ip."\n", $blacklist) === false ? false : true.
				exit();  
	  }	
	}	
	/**
	 * BLOQUAGE D’UNE LISTE D’IP.	
	 * SI L’IP EST BANNI, ON RENVOIS LE VISITEUR SUR UNE PAGE SPÉCIALE
	 **/
	public static function checkIP()
	{
	    global $lang, $config;	    	    
	    $ip = User::getRealIpAddr();
	    $list = file(BAN_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		foreach ($list as $line)
		{
		 	if(strpos($ip, $line)!==false)
			 require THEME_DIR . $config['theme'] . DS . 'banned.tpl.php'.
			 exit();			 			 	
		}	    
	}

}