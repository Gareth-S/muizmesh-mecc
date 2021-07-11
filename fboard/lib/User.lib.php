<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
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
    	
	public static function isAdmin()
	{
		return $_SESSION['role'] === 'admin';
	}
	
	public static function isAuthor($entry)
	{
		return isset($_SESSION[$entry]);
	}
	
	public static function isWorker()
	{
		return $_SESSION['role'] === 'worker' || $_SESSION['role'] === 'admin';
	}
	
	public static function login($password)
	{	
		global $config, $lang;
		# Nouveau hash Flatboard 2.0
		$hashed_password = password_verify($password, KEY);
		if($hashed_password == $config['admin'])
		{
			$_SESSION['role'] = 'admin';
			return true;
		}
		else if(isset($config['worker'][HTMLForm::hide($password)]))
		{
			$_SESSION['role'] = 'worker';
			return true;
		} 
		else 
		{
			$_SESSION['incorrect_password'] = 1;
			return false;
		}
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
	    $secret_iv = KEY;
	
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
	 * Usage:
	 * User::get_starred('password');
	 **/	
	public static function get_starred($password) {
	    $len = strlen($password);	
	    return substr($password, 0, 1).str_repeat('*', $len - 2).substr($password, $len - 1, 1);
	}	
	/**
	 * Protège le mail via un affichage js
	 * Usage:
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