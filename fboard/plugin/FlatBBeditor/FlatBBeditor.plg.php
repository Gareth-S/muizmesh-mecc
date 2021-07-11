<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * FlatBBeditor
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2019
 * @license		http://opensource.org/licenses/MIT
 * @package		FlatBoard
 * @version		2.2
 * @update		2019-12-15
 */	
   
/**
 *  Liste des boutons à paramètrer
**/
function btnBBcode_list()
{
	return array('font_size', 'font_color', 'bold', 'italic', 'underline', 'strike', 'code', 'quote', 'align_center', 'align_right', 'insert_picture_width', 'insert_picture', 'insert_link', 'insert_youtube_video', 'insert_dailymotion_video', 'upload_picture', 'fullscreen_editor');
}            	
/**
 * On pré-installe les paramètres par défauts.
**/
function FlatBBeditor_install()
{
	global $lang;
	$plugin = 'FlatBBeditor';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;
	$data[$plugin.'state'] 	 	= true;
	foreach(btnBBcode_list() as $feature)
	{
		$data[$feature] = true;
	}                  
    flatDB::saveEntry('plugin', $plugin, $data);          
}
/**
 *  Admin
**/
function FlatBBeditor_config()
{     
	   global $config, $lang, $token;
       $plugin = 'FlatBBeditor';
       $out ='';      
       if(!empty($_POST) && CSRF::check($token) )
       {
	       	$data[$plugin.'state']		= Util::isPOST('state') ? $_POST['state'] : '';
			foreach(btnBBcode_list() as $feature)
			{
				$data[$feature] 		= Util::isPOST($feature) ? HTMLForm::clean($_POST[$feature]) : '';
			}                      
            flatDB::saveEntry('plugin', $plugin, $data);
            $out .= Plugin::redirectMsg($lang['plugin'].'&nbsp;<b>'.$lang[$plugin.'name']. '</b>','config.php' . DS . 'plugin' . DS . $plugin, $lang['data_save']);
       }
        else
       {
            if (flatDB::isValidEntry('plugin', $plugin))
            $data = flatDB::readEntry('plugin', $plugin);
			$controlStr = '';
			foreach(btnBBcode_list() as $feature)
			{
				$controlStr .= HTMLForm::checkBox($feature, isset($data)? $data[$feature] : '');
			}            
            $out .= HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin, 
            HTMLForm::checkBox('state', isset($data)? $data[$plugin.'state'] : ''). 
            '<h5>' .$lang['btn_toolbar']. '</h5>'.  
            $controlStr.        
            HTMLForm::simple_submit());
       }
       return $out;
}
/**
 *  Css
**/
function FlatBBeditor_head()
{
  global $config, $cur;
  $plugin = 'FlatBBeditor';
  # Lecture des données
  $PluginActivate = FlatDB::readEntry('plugin',$plugin)[$plugin.'state'];
  if($PluginActivate) {
	if ($config['editor'] == 'markdown')
	    return '	<link rel="stylesheet" type="text/css" href="' .HTML_PLUGIN_DIR . $plugin . DS . 'simpleMDE' . DS . 'simplemde.min.css">'.PHP_EOL; 
	else 
	    return '	<link rel="stylesheet" type="text/css" href="' .HTML_PLUGIN_DIR . $plugin . DS . 'css' . DS . 'FlatBBeditor.css">'.PHP_EOL; 
  }      
}
/**
 * Textarea
**/
function FlatBBeditor_editor()
{
  global $config, $cur, $lang;
  $plugin = 'FlatBBeditor';
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);  
  $html  = '';
  if ($data[$plugin.'state'] && in_array($cur, array('addTopic', 'addReply', 'editTopic', 'editReply', 'viewTopic', 'viewForum')))
  {	  
   	if ($config['editor'] == 'markdown')
	   # Markdown	
	   include_once(__DIR__  . DS .  'work' . DS . 'markdown.php');   
	else
	   # BBcode
	   include_once(__DIR__  . DS .  'work' . DS . 'bbcode.php');		   	   
  }
  return $html;       
}
/**
 *  JavaScript
**/
function FlatBBeditor_footerJS()
{
  global $config, $lang;
  $plugin = 'FlatBBeditor';
  # Lecture des données
  $PluginActivate = FlatDB::readEntry('plugin',$plugin)[$plugin.'state'];  
  $html  = '';
  if($PluginActivate)
  {
	$html .= '	<script src="' .HTML_PLUGIN_DIR . $plugin . DS . 'js' . DS . 'FlatBBeditor.min.js"></script>'.PHP_EOL;
	$html .= '	<script src="' .HTML_PLUGIN_DIR . $plugin . DS . 'js' . DS . 'emojiPicker.js"></script>'.PHP_EOL;
	$html .= '	<script>'.PHP_EOL;
  $html .= '		function reload(){var img=document.images["cap-img"];img.src=img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;}
    $(document).ready(function(){ 
      $(\'.btn[href^="add.php/topic"],.btn[href^="add.php/reply"],.btn[href^="add.php/report"]\').click(function(event) {
        event.preventDefault();
        if($(this).siblings("#form").length > 0) {
          $(this).siblings("#form").slideUp("slow", function(){ $(this).remove(); });
        } else {
          $("#form").remove();
          $(\'<div id="form" class="card fixed-bottom p-3 bg-light fixed-modal"></div>\').hide().insertAfter(this).load($(this).attr("href") + " form", function() {
          if(typeof bbcode == "function") bbcode();
            $(\'[data-toggle="tooltip"]\').tooltip();
            $(\'[data-toggle="popover"]\').popover();						
            $(this).slideDown("slow");
          });
        }
      });																				
    });		  																		
  </script>'.PHP_EOL;	  	   
  }
  return $html;    
}
?>