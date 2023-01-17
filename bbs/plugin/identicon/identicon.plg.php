<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * Identicon
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2020
 * @license		http://opensource.org/licenses/MIT
 * @package		FlatBoard
 * @version		3.0
 * @update		2020-06-05
 */	
 
define('PATH_IDENTICON_AVATAR', UPLOADS_DIR . 'avatars' . DS);
define('PATH_GEN_AVATAR', 	 	PATH_IDENTICON_AVATAR . 'generates' . DS);
define('HTML_AVATAR', 		 	HTML_BASEPATH . DS . 'uploads' . DS . 'avatars' . DS);
define('HTML_GEN_AVATAR', 	 	HTML_AVATAR . 'generates' . DS);  
define('HTML_PLUGIN_AVATAR', 	HTML_BASEPATH . DS . 'plugin' . DS . 'identicon' . DS);  
define('IDENTICON_ONLINE', 		TRUE);                 
/**
 * On pré-installe les paramètres par défauts.
**/
function identicon_install()
{
	$plugin = 'identicon';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;
	
    # Création du dossier qui accueillera nos avatars 
    $folders = array(PATH_IDENTICON_AVATAR, PATH_GEN_AVATAR);
    foreach($folders as $folder) {    
		if(!is_dir($folder)){
			mkdir($folder, 0777, true);
		}	
		if (!file_exists($folder. 'index.html')) {
			$f = fopen($folder. 'index.html', 'a+');
			fwrite($f, '');
			fclose($f);	
		}
	}
    $data[$plugin.'state'] = true; 
    $data['taille']        = '50'; 
    $data['forme']         = 'rounded-circle'; 
    $data['dots']          = true;         
    flatDB::saveEntry('plugin', $plugin, $data);         
}
/**
 * On pré-installe les paramètres par défauts.
**/
function pluginIsHere($plugin) 
{
	if(flatDB::isValidEntry('plugin', $plugin))
    	return true;
    else 
    	return false;
}
/**
 * Admin
**/
function identicon_config()
{    
	   global $lang, $token; 
       $plugin = 'identicon';
       $out ='';
           
       if(!empty($_POST) && CSRF::check($token) )
       {
               $data[$plugin.'state'] 	= Util::isPOST('state') ? $_POST['state'] : '';  
               $data['taille']          = HTMLForm::clean($_POST['taille']);    
               $data['forme']           = HTMLForm::clean($_POST['forme']);
               $data['dots'] 	 		= Util::isPOST('dots') ? $_POST['dots'] : '';  
               
               flatDB::saveEntry('plugin', $plugin, $data);
               $out .= Plugin::redirectMsg($lang['data_save'],'config.php' . DS . 'plugin' . DS . $plugin, $lang['plugin'].'&nbsp;<b>' .$lang[$plugin.'name']. '</b>');   
       }
        else
       {
               if (flatDB::isValidEntry('plugin', $plugin))
               $data = flatDB::readEntry('plugin', $plugin);
               $out .= HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin,'
				<div class="row"> 
					<div class="col">'.
					HTMLForm::checkBox('state', $data[$plugin.'state']). '
					</div>				              	
					<div class="col">'.
					HTMLForm::checkBox('dots', $data['dots']). '
					</div>
				</div>						               	
				<div class="row">				
				    <div class="col">'.
				    HTMLForm::text('taille', isset($data)? $data['taille'] : '', 'number', '', '', 'pixel').
				    '</div>
					<div class="col">'.
					HTMLForm::select('forme', array('rounded-circle'=>$lang['rounded-circle'], 'rounded'=>$lang['rounded'], 'img-thumbnail'=>$lang['img-thumbnail']), $data['forme']). '
					</div>				
				</div>'.       
               HTMLForm::simple_submit());
       }
       return $out;
} 
/**
 * Un peu de css
**/
function identicon_head()
{
  $plugin = 'identicon';
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);
  if ($data[$plugin.'state'])
  	return '	<style>.avatar-status {border-radius: 50%; width: 15px;height: 15px; margin-left: -15px; position: absolute; border: 2px solid #fff;}.avatar-status.green{background: rgba(51, 217, 178, 1);box-shadow: 0 0 0 0 rgba(51, 217, 178, 1);animation: pulse-green 2s infinite}@keyframes pulse-green{0%{transform: scale(0.95);box-shadow: 0 0 0 0 rgba(51, 217, 178, 0.7)}70%{transform: scale(1);box-shadow: 0 0 0 10px rgba(51, 217, 178, 0)}100%{transform: scale(0.95);box-shadow: 0 0 0 0 rgba(51, 217, 178, 0)}}.avatar-status.red{background: rgba(255, 82, 82, 1);box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);animation: pulse-red 2s infinite}@keyframes pulse-red{0%{transform: scale(0.95);box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7)}70%{transform: scale(1);box-shadow: 0 0 0 10px rgba(255, 82, 82, 0)}100%{transform: scale(0.95);box-shadow: 0 0 0 0 rgba(255, 82, 82, 0)}}figure:hover img {box-shadow: #e3e3e3 0 0 0 0.5rem;}figure img {transition: box-shadow 300ms ease-out;}</style>'.PHP_EOL;
}
function checkOnline2($username)
{
  $plugin = 'online';
  global $sessionTrip, $cur;
  $out = '';
  $users = array();
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);   
  if ($data[$plugin.'state']) 
  { 			
	$online = flatDB::readEntry('plugin', $plugin.'DB');
	foreach((array)$online as $ip => $time)
	{
		# On check si c'est une IP
		$validIP  = filter_var($ip, FILTER_VALIDATE_IP);
		# Mais on ne filtrera que les membres
		$users[] = $validIP ? '' : $ip;
	}
	# On crypte le pseudo en session
	$trip = HTMLForm::trip($sessionTrip, $username);

	# Liste des utilisateurs connecté uniquement
	$users = $validIP ? '' : $users;
	
	# Online mode
	#if($username === $users || $username === $trip)	
	if($username === $users)
	    $users = '<span class="avatar-status green"></span>';
	else
		$users = '<span class="avatar-status red"></span>';
								
	# Sortie du status de l'icône en excluant la page d'accueil		
	$out .= $cur!=='home' && IDENTICON_ONLINE ? $users : '';
  } else {
	$out .=''; 
  }
  	
  return $out;
}
/**
 * On check les membres connectés via le plugin online
**/
function checkOnline($username)
{
	global $sessionTrip, $cur;
  	$plugin = 'online';
  	# On test si le plugin "online" est installé
  	if(pluginIsHere($plugin)) {
	  	$users = array();
	  	# Lecture des données
	  	$data = flatDB::readEntry('plugin', $plugin);
	  	if ($data[$plugin.'state']) {
			$online = flatDB::readEntry('plugin', $plugin.'DB');
			foreach((array)$online as $ip => $time)
			{
				# On check si c'est une IP
				$validIP  = filter_var($ip, FILTER_VALIDATE_IP);
				# Mais on ne filtrera que les membres
				$users[] = $validIP ? '' : $ip;			
				# Online mode
				$trip = HTMLForm::trip($sessionTrip, $username);	
				if($username === $users || $username === $trip)
				    $usersStat = '<span class="avatar-status green"></span>';
				else
					$usersStat = '<span class="avatar-status red"></span>';									
			}	
					
			$currentUsers = $cur!=='home' && IDENTICON_ONLINE ? $usersStat : '';	
			#$online = IDENTICON_ONLINE ? $usersStat : '';
	  	}
  	} 
  	else 
  	{
	  	$currentUsers = '';
  	}
  	return $currentUsers;
}
/**
 * Show avatar
**/
function identicon_profile($username)
{
	global $sessionTrip, $cur;
  	$plugin = 'identicon';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	# Récupération du pseudo sans le hash
	$user = strstr($username, '@', true);
	# Taille de l'avatar en config
	$size	  	 = $data['taille']; 
	# Convertion du nom de l'utilisateur
	$h1	=	hash('crc32',$username);
	$h2	=	hash('crc32b',$username);
	# Points ou carrés ?
	$d	=	$data['dots'] ? 'dot' : '';
	# Génération du nom d'utilisateur
	$s	=	$h1 . $h2[0];
	$file_path = PATH_GEN_AVATAR . $s . 'x' . $size . $d;
	$file_html = HTML_GEN_AVATAR . $s . 'x' . $size . $d;
	# On créé des points au lieu des carré par défault et on l'ajoute 
	# dans l'url pour récupérer le paramètre.
	$dots	   =  $data['dots'] ? '&d=dot' : '';
	# Lien de génération de l'avatar avec paramètres
	$pic 	   =  HTML_PLUGIN_AVATAR . 'avatar.php?f=' . urlencode(PATH_GEN_AVATAR) . '&u=' . urlencode($username) . '&sz=' . $size . $dots;
		
	/**
	 * INDICATEUR DE STATUS EN LIGNE / HORSD LIGNE (work in progress......)
	**/	
  	# On test si le plugin "online" est installé
  	if(pluginIsHere($plugin) && IDENTICON_ONLINE) {	
		$trip = HTMLForm::trip($sessionTrip, $username);
		if($username === $trip)
		    $usersStat = '<span class="avatar-status green"></span>';
		else
			$usersStat = '<span class="avatar-status red"></span>';	

		$online = $cur!=='home' && IDENTICON_ONLINE ? $usersStat : '';
	} else $online = '';

	/**
	 * GENERATION EST AFFICHAGE DE L'AVATAR
	**/					  	
  	$identity  = '';
	if ($data[$plugin.'state'])
	{	
		# Avatar personalisé placer dans uploads/avatars/ sans l'arobase
		# Exemple: pseudo@motdepasse = pseudo_motdepasse.png
	  	$avatar = str_replace(array('#','@'), '_', $username);	  	  	
	  	if ( file_exists(PATH_IDENTICON_AVATAR . $avatar. '.png') ) 
	  	{
	  		$identity .= '<img class="' .$data['forme']. '" src="' .HTML_AVATAR . $avatar. '.png" width="'.$size.'" height="'.$size.'" alt="' .$user. '">' .$online. PHP_EOL; 
	  	} 
	  	# Si le pseudo est numéric, on place un avatar anonymous.png fpourni avec le plugin
	  	else if (is_numeric($username)) 
	  	{
	        $identity .= '<img class="' .$data['forme']. '" src="' .HTML_PLUGIN_AVATAR . 'anonymous.png" width="'.$size.'" height="'.$size.'" alt="anonymous">' .$online. PHP_EOL;
	    }
	    # Si l'avatar est déjà généré, dans ce cas on le prends en cache
	    else if ( file_exists($file_path . '.png') ) 
	  	{
	  		$identity .= '<img class="' .$data['forme']. '" src="' .$file_html . '.png" width="'.$size.'" height="'.$size.'" alt="' .$user. '">' .$online. PHP_EOL; 
	  	} 
	  	# Sinon on donne l'URL de génération
	    else 
	    {
	        $identity .= '<img class="' .$data['forme']. '" src="' .$pic. '" width="'.$size.'" height="'.$size.'" alt="' .$user. '">' .$online. PHP_EOL;    
	   	}			    
	}   	
   	return $identity;   
}
?>