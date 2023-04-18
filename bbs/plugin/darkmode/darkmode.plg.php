<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * Darkmode
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2019-2020
 * @license		http://opensource.org/licenses/MIT
 * @package		Flatboard
 * @version		1.1
 * @update		2020-01-16
 */	
 
/**
 * On pré-installe les paramètres par défauts.
**/
function darkmode_install()
{
	global $lang; 	
	$plugin = 'darkmode';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;
	# Activation de certains paramètres
    $data[$plugin.'state']				= false;
    $data[$plugin.'saveInCookies'] 		= true; 	// default: true
    $data[$plugin.'autoMatchOsTheme'] 	= false;   	// default: true
    $data[$plugin.'right']  	   		= true;  
    # Données de personnalisation 
    $data[$plugin.'bottom']   	   		= 64;
    $data[$plugin.'rightORleft']  	   	= 32;		// default: 32px
    $data[$plugin.'time']  	  	   		= 3; 		// default: 0.3s
    $data[$plugin.'buttonLabel']  	  	= '🌓';  	// default: 🌓
    # Données de couleur  
    $data[$plugin.'mixColor'] 			= 'fff';   	// default: #fff
    $data[$plugin.'backgroundColor'] 	= 'fff';   	// default: #fff
    $data[$plugin.'buttonColorDark'] 	= '100f2c'; // default: #100f2c
    $data[$plugin.'buttonColorLight'] 	= 'fff'; 	// default: #fff
    # On sauvegarde la configuration par défault du plugin      
	flatDB::saveEntry('plugin', $plugin, $data);
}

/**
 * Admin
**/
function darkmode_config()
{    
	   global $lang, $token; 
       $plugin = 'darkmode';
       $out ='';    
       if(!empty($_POST) && CSRF::check($token) )
       {
       	   # Activation de certains paramètres
           $data[$plugin.'state'] 			= Util::isPOST('state') ? $_POST['state'] : '';   
           $data[$plugin.'saveInCookies'] 	= Util::isPOST('saveInCookies') ? $_POST['saveInCookies'] : '';    
           $data[$plugin.'autoMatchOsTheme']= Util::isPOST('autoMatchOsTheme') ? $_POST['autoMatchOsTheme'] : '';
           $data[$plugin.'right']			= Util::isPOST('right') ? $_POST['right'] : ''; 
           # Données de personnalisation
           $data[$plugin.'bottom']			= HTMLForm::clean($_POST['bottom']); 
           $data[$plugin.'rightORleft']		= HTMLForm::clean($_POST['rightORleft']);  
           $data[$plugin.'time']			= HTMLForm::clean($_POST['time']);
           $data[$plugin.'buttonLabel']		= HTMLForm::clean($_POST['buttonLabel']);
           # Données de couleur
           $data[$plugin.'mixColor']		= HTMLForm::clean($_POST['mixColor']);
           $data[$plugin.'backgroundColor']	= HTMLForm::clean($_POST['backgroundColor']);
           $data[$plugin.'buttonColorDark']	= HTMLForm::clean($_POST['buttonColorDark']);
           $data[$plugin.'buttonColorLight']= HTMLForm::clean($_POST['buttonColorLight']);                          
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
			    	HTMLForm::checkBox('state', $data[$plugin.'state']).
			    '</div>
			    <div class="col">'.
			    	HTMLForm::checkBox('saveInCookies', $data[$plugin.'saveInCookies'], 'Cookies_Desc'). 
			    '</div>
			    <div class="col">'.
			    	HTMLForm::checkBox('autoMatchOsTheme', $data[$plugin.'autoMatchOsTheme'], 'autoOsTheme_Desc').
			    '</div>
			    <div class="col">'.
			    	HTMLForm::checkBox('right', $data[$plugin.'right'], 'rightDesc'). 
			    '</div>
			</div>  
			             
			<div class="row">
			    <div class="col">'.
			    	HTMLForm::text('bottom', isset($data)? $data[$plugin.'bottom'] : '', 'number').
			    '</div>
			    <div class="col">'.
			    	HTMLForm::text('rightORleft', isset($data)? $data[$plugin.'rightORleft'] : '', 'number'). 
			    '</div>
			    <div class="col">'.
			    	HTMLForm::text('time', isset($data)? $data[$plugin.'time'] : '', 'number').
			    '</div>
			    <div class="col">'.
			    	HTMLForm::text('buttonLabel', isset($data)? $data[$plugin.'buttonLabel'] : '').
			    '</div>				    
			</div>
			
			<div class="row">
			    <div class="col">'.
			    	HTMLForm::text('mixColor', isset($data)? $data[$plugin.'mixColor'] : '', 'text', 'color').
			    '</div>
			    <div class="col">'.
			    	HTMLForm::text('backgroundColor', isset($data)? $data[$plugin.'backgroundColor'] : '', 'text', 'color'). 
			    '</div>
			    <div class="col">'.
			    	HTMLForm::text('buttonColorDark', isset($data)? $data[$plugin.'buttonColorDark'] : '', 'text', 'color').
			    '</div>
			    <div class="col">'.
			    	HTMLForm::text('buttonColorLight', isset($data)? $data[$plugin.'buttonColorLight'] : '', 'text', 'color'). 
			    '</div>
			</div>'.               
           HTMLForm::simple_submit());
       }
       return $out;
} 
/**
 * On charge la minification avant
**/
function darkmode_head()
{
  $plugin = 'darkmode';
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);
  $config = flatDB::readEntry('config', 'config');
  $out='';
  $assets = HTML_PLUGIN_DIR. $plugin. DS. 'assets' . DS;
  
  if ($data[$plugin.'state']) {
	$out .='	<link rel="stylesheet" type="text/css" href="' .$assets. 'darkmode.min.css?ver=1.0" />'.PHP_EOL;			    
  }  
  return $out;   
}

/** 
 * Ajoute du Javascript en pied de page du thème (footer.html)
 */
function darkmode_footerJS() { 
	global $lang;
  	$plugin = 'darkmode';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';
  	$status = '';
  	$assets = HTML_PLUGIN_DIR. $plugin. DS. 'assets' . DS;
  	
    if ($data[$plugin.'right']){
        $status .= 'right: "'.$data[$plugin.'rightORleft'].'px",'.PHP_EOL;
        $status .= 'left: "unset",'.PHP_EOL;
    }else{
        $status .= 'right: "unset",'.PHP_EOL;
        $status .= 'left: "'.$data[$plugin.'rightORleft'].'px",'.PHP_EOL;
    }
    if($data[$plugin.'saveInCookies'])
    	$saveInCookies = 'true';
  	else
  		$saveInCookies = 'false';
  		
    if($data[$plugin.'autoMatchOsTheme'])
    	$autoMatchOsTheme = 'true';
  	else
  		$autoMatchOsTheme = 'false'; 
  		 		
	if ($data[$plugin.'state']) {	
		$out .='	<script src="' .$assets. 'darkmode.min.js?ver=1.0"></script>'.PHP_EOL;
		$out .='	<script>'.PHP_EOL;
		$out .='
		var options = {
		  bottom: "'.$data[$plugin.'bottom'].'px",
		  ' .$status. '
		  time: "0.'.$data[$plugin.'time'].'s",
		  mixColor: "'.$data[$plugin.'mixColor'].'",
		  backgroundColor: "'.$data[$plugin.'backgroundColor'].'",
		  buttonColorDark: "'.$data[$plugin.'buttonColorDark'].'",
		  buttonColorLight: "'.$data[$plugin.'buttonColorLight'].'",
		  saveInCookies: '.$saveInCookies.',
		  label: "'.$data[$plugin.'buttonLabel'].'",
		  autoMatchOsTheme: '.$autoMatchOsTheme.'
		}
        const darkmode = new Darkmode(options);
        darkmode.showWidget();'.PHP_EOL;
		$out .='	</script>'.PHP_EOL;				        
	} 
	return $out; 
}