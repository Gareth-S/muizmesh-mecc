<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * gitter
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2015-2017
 * @license		http://opensource.org/licenses/MIT
 * @package		FlatBoard
 * @version		1.3.2
 * @update		2018-01-23
 */	
                
/**
 * On pré-installe les paramètres par défauts.
**/
function gitter_install()
{
	$plugin = 'gitter';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    $data[$plugin.'state']     = false; 
    $data['room']              = 'Fred89/flatboard'; 
    #$data['activationElement'] = false;   
    #$data['targetElement']     = '';        
    flatDB::saveEntry('plugin', $plugin, $data);         
}

/**
 * Admin
**/
function gitter_config()
{    
	   global $lang, $token; 
       $plugin = 'gitter';
       $out ='';
		       
       if(HTMLForm::check('room') && CSRF::check($token) )
       {
               $data[$plugin.'state'] 	  = Util::isPOST('state') ? $_POST['state'] : ''; 
               $data['room']        	  = HTMLForm::clean($_POST['room']); 
               #$data['activationElement'] = isset($_POST['activationElement'])? $_POST['activationElement'] : '';  
               #$data['targetElement']     = HTMLForm::clean($_POST['targetElement']);   
               
               flatDB::saveEntry('plugin', $plugin, $data);
               $out .= Plugin::redirectMsg($lang['data_save'],'config.php/plugin/'.$plugin, $lang['plugin'].'&nbsp;<b>'.$plugin. '</b>');   
       }
        else
       {
               if (flatDB::isValidEntry('plugin', $plugin))
               $data = flatDB::readEntry('plugin', $plugin);
               $out .= HTMLForm::form('config.php/plugin/'.$plugin,
               HTMLForm::checkBox('state', isset($data)? $data[$plugin.'state'] : '').
               HTMLForm::text('room', isset($data)? $data['room'] : ''). 
               #HTMLForm::checkBox('activationElement', isset($data)? $data['activationElement'] : ''). 
               #HTMLForm::text('targetElement', isset($data)? $data['targetElement'] : '').      
               HTMLForm::simple_submit());
       }
       return $out;
} 
/** 
 * Ajoute du Javascript en pied de page du thème (footer.html)
 */
 function gitter_footerJS() { 
	global $lang;
  	$plugin = 'gitter';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';
  	
  	if ($data[$plugin.'state']) {
	# javascript
	$out .= '
		<script>
		  ((window.gitter = {}).chat = {}).options = {
		    room: "' .$data['room']. '"	    
		  };
		</script>
		<script src="' .HTML_PLUGIN_DIR. $plugin. DS. 'sidecar.v1.js" async defer></script>'.PHP_EOL;
	}
	return $out;  
}
?>