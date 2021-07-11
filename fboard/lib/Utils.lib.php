<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

class Util
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
	public static function isGET($name)
	{
		return isset($_GET[$name]) && is_string($_GET[$name]);
	}
	
	public static function isPOST($name)
	{
		return isset($_POST[$name]) && is_string($_POST[$name]);
	}
	
	public static function isGETValidEntry($type, $name)
	{
		return Util::isGET($name) && flatDB::isValidEntry($type, $_GET[$name]);
	}
	
	public static function isGETValidHook($hook, $name)
	{
		return Util::isGET($name) && Plugin::isValidHook($hook, $_GET[$name]);
	}
	
	public static function fURL()
	{
		$out = array();
		if(isset($_SERVER['PATH_INFO']))
		{
			$info = explode('/', $_SERVER['PATH_INFO']);
			$infoNum = count($info);
			for($i=1; $i<$infoNum; $i+=2)
			{
				if($info[$i] !== '')
					$out[$info[$i]] = isset($info[$i+1])? $info[$i+1] : '';
			}
		}
		return $out;
	}
    /**
      * Gets the base URL
      *
     *  <code>
     *      echo Util::baseURL();
     *  </code>
     *
      * @return string
     */
    public static function baseURL()
    {
	    $siteUrl = str_replace(array('add.php', 'auth.php', 'config.php', 'delete.php', 'edit.php', 'feed.php', 'index.php', 'install.php', 'search.php', 'view.php', 'download.php', 'blog.php', 'forum.php'), '', $_SERVER['SCRIPT_NAME']);
	    $https = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';    
	    $siteUrl = $https . $_SERVER['HTTP_HOST'] . $siteUrl;
	    
	    return $siteUrl;	    	    
    }

    /**
     * Gets current URL
     *
     *  <code>
     *      echo Util::getCurrent();
     *  </code>
     *
     * @return string
     */
    public static function getCurrent()
    {
        return (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }
		
	public static function redirect($loc)
	{
		header('Location: ' .Util::baseURL().$loc);
		exit;
	}
	
	public static function onPage($item, $items)
	{
		return (int) (array_search($item, array_values($items), true) / 8) + 1;
	}
	
	public static function shortNum($int)
	{
		if($int < 1000)
			return intval($int);
		else
			return round(intval($int)/1000, 1). 'K';
	}
	
	public static function toDate($id, $pattern = 'Y/m/d H:i', $cooldate = true)
	{
		global $lang, $config;
		$timestamp = strtotime(substr($id, 0, 16));
		$diff = time() - $timestamp;
		if($pattern === $config['date_format'] && $cooldate && $diff < 604800) //1 week
		{
			$periods = array(86400 => $lang['day'], 3600 => $lang['hour'], 60 => $lang['minute'], 1 => $lang['second']);
			foreach($periods as $key => $value)
			{
				if($diff >= $key)
				{
					$num = (int) ($diff / $key);
					if(TIMESTAMP)
						return $num. ' ' .$value.($num > 1? $lang['plural'] : ''). ' ' .$lang['ago'];
					else
						return $lang['ago']. ' ' .$num. ' ' .$value.($num > 1? $lang['plural'] : '');
				}
			}
		}
		return date($pattern, $timestamp);
	}
	
    /**
     * Check copyright
     *
     *  <code>
     *      echo Util::checkCopy($langFile);
     *  </code>
     *
     * @return string
     */	
	public static function checkCopy($langFile)
	{
		global $lang, $config;
		if (!strpos(file_get_contents($langFile), 'false;">Flatboard'))
			die('<h1><a href="https://github.com/Fred89/flatboard/blob/master/LICENSE">MIT License!</a></h1>Please write to file "<i>'.LANG_DIR . $config['lang']. '.php</i>" this string:'.base64_decode('PGRpdiBzdHlsZT0idGV4dC1hbGlnbjpsZWZ0O2NvbG9yOmJsYWNrOyBiYWNrZ3JvdW5kLWNvbG9yOndoaXRlOyBwYWRkaW5nOjAuNWVtOyBvdmVyZmxvdzphdXRvO2ZvbnQtc2l6ZTpzbWFsbDsgZm9udC1mYW1pbHk6bW9ub3NwYWNlOyAiPjxzcGFuIHN0eWxlPSJjb2xvcjojZGQyNDAwOyI+J3Bvd2VyZWQnPC9zcGFuPiA8c3BhbiBzdHlsZT0iY29sb3I6IzAwNmZmODsiPj0mZ3Q7PC9zcGFuPiA8c3BhbiBzdHlsZT0iY29sb3I6I2RkMjQwMDsiPidDcmVhdGVkIHdpdGggJmx0O2EgaHJlZj0mcXVvdDtodHRwOi8vZmxhdGJvYXJkLmZyZWUuZnImcXVvdDsgb25jbGljaz0mcXVvdDt3aW5kb3cub3Blbih0aGlzLmhyZWYpOyByZXR1cm4gZmFsc2U7JnF1b3Q7Jmd0O0ZsYXRib2FyZCc8L3NwYW4+IDxzcGFuIHN0eWxlPSJjb2xvcjojMDA2ZmY4OyI+Ljwvc3Bhbj4oPHNwYW4gc3R5bGU9ImNvbG9yOiM0MDAwODA7Ij5kZWZpbmVkPC9zcGFuPig8c3BhbiBzdHlsZT0iY29sb3I6I2RkMjQwMDsiPidGTEFUQk9BUkRfUFJPJzwvc3Bhbj4pPzxzcGFuIHN0eWxlPSJjb2xvcjojZGQyNDAwOyI+JyBQcm8nPC9zcGFuPjo8c3BhbiBzdHlsZT0iY29sb3I6I2RkMjQwMDsiPicnPC9zcGFuPik8c3BhbiBzdHlsZT0iY29sb3I6IzAwNmZmODsiPi48L3NwYW4+IDxzcGFuIHN0eWxlPSJjb2xvcjojZGQyNDAwOyI+JyZsdDsvYSZndDsgYW5kICZsdDtpIGNsYXNzPSZxdW90O2ZhIGZhLWhlYXJ0JnF1b3Q7Jmd0OyZsdDsvaSZndDsuJzwvc3Bhbj4sPC9kaXY+').'<p>If you have any questions, please, apply to:<br/>- E-mail: <a href="mailto:stradfred@gmail.com">stradfred@gmail.com</a><br/>- Forum: <a href="http://flatboard.free.fr/view.php/forum/general-questions">support</a></p>');
	}
		
	/**
	 * @param string $file Filepath
	 * @param int $digits Digits to display
	 * @return string|bool Size (KB, MB, GB, TB) or boolean
	 */	
	public static function getFilesize($file,$digits = 2) {
		$bytes = filesize($file);
		if ($bytes < 1024) return $bytes.' B';
		elseif ($bytes < 1048576) return round($bytes / 1024, $digits).' KB';
		elseif ($bytes < 1073741824) return round($bytes / 1048576, $digits).' MB';
		elseif ($bytes < 1099511627776) return round($bytes / 1073741824, $digits).' GB';
		else return round($bytes / 1099511627776, $digits).' TB';	
	}

	public static function sizeConversion($size) {
	    $unit = array('B','KB','MB','GB','TB','PB');
	
	    return round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $unit[$i];
	}
		
	/**
	 * Méthode qui contrôle la mémoire utilisée
	 * @param string $type Type de contrôle de la mémoire (available, peak or current usage)
	 * @return string
	 */
	public static function getMemory($type = 'usage') {
	    if ((string) $type === 'available') {
	        $memoryAvailable = filter_var(ini_get("memory_limit"), FILTER_SANITIZE_NUMBER_INT);
	        $memoryAvailable = $memoryAvailable * 1024 * 1024;
	        $size = (int) $memoryAvailable;
	    } elseif ((string) $type === 'peak') {
	        $size = (int) memory_get_peak_usage(true);
	    } elseif ((string) $type === 'usage') {
	        $size = (int) memory_get_usage(true);
	    } else {
	        $size = 0;
	    }
	
	    return Util::sizeConversion($size);
	}

	/**
	 * Méthode qui vérifie les modules PHP installé sur le serveur (installation)
	 * @param string $modules Modules à contrôler
	 * @return string
	 */
	public static function checkModules($modules = array('mbstring', 'json', 'gd', 'dom')) {
		$bad = false;
		$missing = '';
		foreach ($modules as $module) {
			if (!extension_loaded($module)) {
				$errorText = 'PHP module <b>'.$module.'</b> is not installed.';
				error_log('[ERROR] '.$errorText, 0);
		
				$bad = true;
				$missing .= $errorText.PHP_EOL;
			}
		}
		if ($bad) {
			return 'PHP modules missing:';
			return $missing;
			exit();
		}
	}
				
	public static function lang($format)
	{
		global $lang;
		$argList = func_get_args();
		$wordList = array();
		foreach(explode(' ', $format) as $word)
		{
			$wordList[] = isset($lang[$word])? $lang[$word] : $word;
		}
		return vsprintf(implode($lang['useSpace']? ' ' : '', $wordList), array_slice($argList, 1));
	}	
		
	/**
	 * Méthode qui teste si la fonction php mail est disponible
	 *
	 * @param	io			affiche à l'écran le résultat du test si à VRAI
	 * @param	format		format d'affichage
	 * @return	boolean		retourne vrai si la fonction php mail est disponible
	 **/
	public static function testMail($io=true, $format="<div class=\"alert alert-#color\" role=\"alert\">#symbol #message</div>\n") 
	{
		global $lang;
		if($return=function_exists('mail')) {
			if($io==true) {
				$output = str_replace('#color', 'success', $format);
				$output = str_replace('#symbol', '&#10004;', $output);
				$output = str_replace('#message', $lang['mail_available'], $output);
				return $output;
			}
		} else {
			if($io==true) {
				$output = str_replace('#color', 'danger', $format);
				$output = str_replace('#symbol', '&#10007;', $output);
				$output = str_replace('#message', $lang['mail_not_available'], $output);
				return $output;
			}
		}
		return $return;
	}
	
	/**
	* Méthode d'envoi de mail
	*
	* @param	name	string 			Nom de l'expéditeur
	* @param	from	string 			Email de l'expéditeur
	* @param	to		array/string	Adresse(s) du(des) destinataires(s)
	* @param	subject	string			Objet du mail
	* @param	body	string			contenu du mail
	* @return			boolean			renvoie FAUX en cas d'erreur d'envoi
	**/
	public static function sendMail($name, $from, $to, $subject, $body, $contentType="text", $cc=false, $bcc=false) 
	{
		if(is_array($to))
			$to = implode(', ', $to);
		if(is_array($cc))
			$cc = implode(', ', $cc);
		if(is_array($bcc))
			$bcc = implode(', ', $bcc);

		$headers  = "From: ".$name." <".$from.">\r\n";
		$headers .= "Reply-To: ".$from."\r\n";
		$headers .= 'MIME-Version: 1.0'."\r\n";
		// Content-Type
		if($contentType == 'html')
			$headers .= 'Content-type: text/html; charset="' .CHARSET. '"'."\r\n";
		else
			$headers .= 'Content-type: text/plain; charset="' .CHARSET. '"'."\r\n";

		$headers .= 'Content-transfer-encoding: 8bit'."\r\n";
		$headers .= 'Date: '.date("D, j M Y G:i:s O")."\r\n"; // Sat, 7 Jun 2001 12:35:58 -0700

		if($cc != "")
			$headers .= 'Cc: '.$cc."\r\n";
		if($bcc != "")
			$headers .= 'Bcc: '.$bcc."\r\n";

		return mail($to, $subject, $body, $headers);
	}
	
	/*
	** Ajoute un 's' au pluriel
	** $num = 6;
	** $texte = 'Vous avez acheté ' . $num . ' journ' . Util::pluralize($num, 'aux', 'al') . ' ce jour.<br />';
	** $texte .= 'Vous avez ' . $num . ' commentaire' . Util::pluralize($num) . '<br />';
	** print($texte);
	*/
	public static function pluralize($num, $plural='s', $single='') 
	{
	    if ($num == 0 || $num == 1) return $single; 
	     else return $plural;
	}
			
	public static function Description()
	{
	   global $config, $cur, $out;
	   if($cur === 'home') { 
	        return $config['description']; 
	   } else {
		    return $out['subtitle']; 
	   }
	} 
	# BOUTON D'AIDE
	public static function Help($phrase)
	{
		global $config, $lang;
		# 🐛 Fix null in PHP7.4 version treated as an array.
		$lang['more_info'] = isset($lang['more_info']) ? $lang['more_info'] : null;
		return '&nbsp;<a class="text-primary" data-toggle="tooltip" data-placement="top" title="' .$lang['more_info']. '"><i class="fa fa-info-circle fa-lg" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="right" data-content="' .$phrase. '"></i></a>';
	}
	
	/**
	* Méthode qui suprimme tout les fichiers d'un dossier
	*
	* @param	text	string
	* @param	type	string
    *  <code>
    *      echo Util::deletecache($dir);
    *  </code>	
	**/	
	public static function deletecache($dir)
	{
		global $lang;
		$files = glob($dir. '{,.}*', GLOB_BRACE); // get all file names
		foreach($files as $file){
		  if(is_file($file)) {
			if(@unlink($file))
				Plugin::redirectMsg($lang['cache_clean'], 'config.php', $lang['config'], 'alert alert-success');
			else
				Plugin::redirectMsg($lang['folder_error'], 'config.php', $lang['config'], 'alert alert-danger'); 
		  }
		}		
	}
	/**
	 * Méthode qui retourne le type de compression disponible
	 *
	 * @return	stout
     *  <code>
     *      echo Util::httpEncoding();
     *  </code>	
	 **/
	public static function httpEncoding() {
	    global $HTTP_ACCEPT_ENCODING;
	    if( headers_sent() ){
	        $encoding = false;
	    }elseif( strpos($HTTP_ACCEPT_ENCODING, 'x-gzip') !== false ){
	        $encoding = 'x-gzip';
	    }elseif( strpos($HTTP_ACCEPT_ENCODING,'gzip') !== false ){
	        $encoding = 'gzip';
	    }else{
	        $encoding = false;
	    }
	
	    if( $encoding ){
	        $contents = ob_get_contents();
	        ob_end_clean();
	        header('Content-Encoding: '.$encoding);
	        print("\x1f\x8b\x08\x00\x00\x00\x00\x00");
	        $size = strlen($contents);
	        $contents = gzcompress($contents, 9);
	        $contents = substr($contents, 0, $size);
	        print($contents);
	        exit();
	    }else{
	        ob_end_flush();
	        exit();
	    }
	}		
	/**
	* Méthode de journalisation
	*
	* @param	text	string
	* @param	type	string
    *  <code>
    *      echo Util::journal($text);
    *  </code>	
	**/	
	public static function journal($text, $type=0)
	{
		if (is_array($text) ) {
			error_log('------------------------', $type);
			error_log('Array', $type);
			error_log('------------------------', $type);
			foreach ($text as $key=>$value) {
				error_log($key.'=>'.$value, $type);
			}
			error_log('------------------------', $type);
		}
		error_log('(' .VERSION. ') (' .$_SERVER['REQUEST_URI']. ') ' .$text, $type);
	}					
}