<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * Identicon
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2015-2019
 * @license		http://opensource.org/licenses/MIT
 * @package		FlatBoard
 * @version		1.0.2
 * @update		2016-01-30
 */	
 
define('PATH_AVATARS', 	UPLOADS_DIR . DS . 'avatars' . DS);                 
/**
 * On pré-installe les paramètres par défauts.
**/
function identicon_install()
{
	$plugin = 'identicon';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    # Création du dossier qui accueillera nos avatars      
	if(!is_dir(PATH_AVATARS)){
		mkdir(PATH_AVATARS);
		chmod(PATH_AVATARS, 0777);
	}

	if (!file_exists(PATH_AVATARS. 'index.html')) {
		$f = fopen(PATH_AVATARS. 'index.html', 'a+');
		fwrite($f, '');
		fclose($f);	
	}
	
    $data[$plugin.'state'] = true; 
    $data['taille']        = '70'; 
    $data['forme']         = 'rounded-circle';          
    flatDB::saveEntry('plugin', $plugin, $data);         
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
               $data[$plugin.'state'] 	 = Util::isPOST('state') ? $_POST['state'] : '';  
               $data['taille']           = HTMLForm::clean($_POST['taille']);    
               $data['forme']            = HTMLForm::clean($_POST['forme']); 
               
               flatDB::saveEntry('plugin', $plugin, $data);
               $out .= Plugin::redirectMsg($lang['data_save'],'config.php' . DS . 'plugin' . DS . $plugin, $lang['plugin'].'&nbsp;<b>' .$lang[$plugin.'name']. '</b>');   
       }
        else
       {
               if (flatDB::isValidEntry('plugin', $plugin))
               $data = flatDB::readEntry('plugin', $plugin);
               $out .= HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin,
               	HTMLForm::checkBox('state', $data[$plugin.'state']). '
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
 * Show only in topic view
**/
function identicon_profile($username)
{
  	$plugin = 'identicon';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$identity = '';
	if ($data[$plugin.'state'])
	{	
	  	# Chargement de la class identicons  	
	  	require_once(dirname(__FILE__). DS . 'autoload.php');
	  	$identicon = new \Identicon\Identicon();
	  	$imageDataUri = $identicon->getImageDataUri($username, $data['taille']);
	  	
	  	$avatar = str_replace(array('#','@'), '_', $username);
	  	
	  	if ( file_exists(UPLOADS_DIR . DS . 'avatars' . DS . $avatar. '.png') ) {
	  		$identity .= '<img class="' .$data['forme']. '" src="' .HTML_BASEPATH . DS . 'uploads' . DS . 'avatars' . DS . $avatar. '.png" width="'.$data['taille'].'px" height="'.$data['taille'].'px" alt="' .$avatar. '">'. PHP_EOL; 
	  	} else if (is_numeric($username)) {
	        $identity .= '<img class="' .$data['forme']. '" src="' .HTML_BASEPATH . DS . 'plugin' . DS . $plugin . DS . 'anonymous.png" width="'.$data['taille'].'px" height="'.$data['taille'].'px" alt="anonymous">'. PHP_EOL;
	    } else {
	        $identity .= '<img class="' .$data['forme']. '" src="' .$imageDataUri. '" width="'.$data['taille'].'px" height="'.$data['taille'].'px" alt="identicon">'. PHP_EOL;    
	   	}			    
	}   	
   	return $identity;   
}

?>