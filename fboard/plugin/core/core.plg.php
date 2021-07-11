<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * Core: include Infinite Ajax Scroll, font awesome 4.7, category icon picker and mini colors JS
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2015-2019
 * @license		http://opensource.org/licenses/MIT
 * @package		FlatBoard
 * @version		2.1
 * @update		2019-03-25
 */	
	
function core_install()
{
	global $lang;
	$plugin = 'core';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    $data[$plugin.'state'] = true;  // Ne pas désactiver !    
    $data['note'] = $lang['write_your_ideas']; 
    $data['cantDisable'] = true;
    flatDB::saveEntry('plugin', $plugin, $data);
}

function core_head()
{
  $plugin = 'core';
  $out  = '';
  $assets = HTML_PLUGIN_DIR . $plugin. DS . 'assets' .DS;
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);
  if ($data[$plugin.'state']) {
	$out .= '	' .base64_decode('ICA8bWV0YSBuYW1lPSJnZW5lcmF0b3IiIGNvbnRlbnQ9IkZsYXRib2FyZA==') .(DEBUG_MODE ? ' '.VERSION : ''). '" />'.PHP_EOL;	
	$out .= '	<link href="' .$assets . 'css' . DS . 'fork-awesome.min.css?ver=1.1.7" rel="stylesheet" type="text/css" />'.PHP_EOL;
	$out .= '	<style type="text/css">.pass_show{position:relative}.pass_show .ptxt{position:absolute;top:50%;right:10px;z-index:1;color:#f36c01;margin-top:-10px;cursor:pointer;transition:.3s ease all}</style>'.PHP_EOL;
	if (User::isWorker()) {			
		$out .= '	<link rel="stylesheet" href="' .$assets . 'css' . DS . 'icon-picker.min.css">'.PHP_EOL;
		$out .= '	<link rel="stylesheet" href="' .$assets . 'minicolors' . DS . 'jquery.minicolors.css">'.PHP_EOL;
		$out .= '	<link rel="stylesheet" href="' .$assets . 'noty' . DS . 'noty.css">'.PHP_EOL;
		$out .= '	<link rel="stylesheet" href="' .$assets . 'noty' . DS . 'themes' . DS . 'sunset.css">'.PHP_EOL;
	}	  
  } 
  return $out;
}

function core_init(){
	// Chargement en backend uniquement
	// Pour éviter les effets de bord
	if(User::isAdmin()){
	  global $lang;
	  $plugin = "core";
	  $data = flatDB::readEntry('plugin', $plugin);
	  if(is_array($data) && !array_key_exists("cantDisable",$data)){
	    $data["cantDisable"] = true;
	    FlatDB::saveEntry('plugin',$plugin,$data);
	  }
	  if (Util::isPOST('coreNote') && User::isAdmin()) {
	    $data["note"] = HTMLForm::transNL(HTMLForm::clean($_POST['coreNote']));
	    flatDB::saveEntry('plugin',$plugin,$data);
	    exit();
	  } 
	  elseif (Util::isPOST('corePluginSwitch') && User::isAdmin())
	  {
	    try {
	      $ajaxData = json_decode($_POST['corePluginSwitch'],true);
	    } catch (Exception $e) {
	      exit(json_encode([
	        'good' => false
	      ]));
	    }
	    //Vérification que toutes les valeurs sont bien là
	    if(is_array($ajaxData) && array_key_exists('pluginId',$ajaxData) && array_key_exists('isEnable', $ajaxData)){
	      try{
	        $plugin = $ajaxData['pluginId'];
	        $pluginData = flatDB::readEntry('plugin',$plugin);
	        if (is_array($pluginData) && array_key_exists('cantDisable', $pluginData) && $pluginData['cantDisable']){
	          exit(json_encode([
	            "good" => false
	          ]));
	        }
		      $pluginData[$plugin.'state'] = $ajaxData['isEnable'];
		      flatDB::saveEntry('plugin',$plugin,$pluginData);
	      }catch(Exception $e){
	        exit(json_encode([
		        'good' => false
		      ]));
	      }
	      $updateInfo = ($lang[$plugin.'update']? ' <button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="' .$lang['update']. ': ' .$lang[$plugin.'update']. '"><i class="fa fa-info" aria-hidden="true"></i></button>' : '');	
		  $statut = ($pluginData[$plugin.'state'] ? 'success' : 'secondary');
		  $statutLang = ($pluginData[$plugin.'state'] ? 
		  '<i class="fa fa-cog" aria-hidden="true"></i> ' .$lang['config'] : '<i class="fa fa-plus-square" aria-hidden="true"></i> ' .$lang['install']);
	      exit(json_encode([
	        'good' => true,
	        'img' => HTML_PLUGIN_DIR.$plugin.DS.'icon.png',
	        'id' => $plugin,
	        'msg' => Util::lang($ajaxData['isEnable'] ? 'plugin_enabled' : 'plugin_disabled', $lang[$plugin.'name']),
	        'newTooltip' => (!$pluginData[$plugin.'state'] ? $lang['click_to_active'] : $lang['click_to_disable']),
	        'newStatut' => $statut,
	        'newButton' => (Plugin::isValidHook('config', $plugin)? '<a href="config.php' . DS . 'plugin' . DS . $plugin. '" class="btn btn-' .$statut. '">' .$statutLang. '</a>' : '') . $updateInfo
	      ]));
	    }
	    exit(json_encode([
	      'good' => false
	    ]));
	  }
	}
}
function core_adminAfterMain()
{
	return '<div id="pluginNotification"></div>';
}               
function core_footerJS()
{
	global $lang, $cur, $config, $token;
	$plugin = 'core';
	$out='';
	$assets = HTML_PLUGIN_DIR . $plugin. DS . 'assets' .DS;
	# Lecture des données
	$data = flatDB::readEntry('plugin', $plugin);
	if ($data[$plugin.'state']) {
		$out .= (User::isWorker()? '
		<div class="fa-set icon-set"><ul id="awesome"></ul></div>		
		<script type="text/javascript" src="' . $assets . 'js' . DS . 'icon-picker.min.js"></script>
		<script type="text/javascript">$.getJSON("'.$assets.'font-awesome.json",function(s){var n=[];$.each(s,function(s,a){n.push("<li data-class=\'fa "+s+"\' class=\'fa "+s+"\'></li>")}),$("<div/>",{class:"icons",html:n.join("")}).appendTo("#awesome")}),function(s){s(document).ready(function(){s(".icon-picker").qlIconPicker({save:"class"})})}(jQuery);</script>
		<script src="' . $assets . 'minicolors' . DS . 'jquery.minicolors.min.js"></script> 
	    <script>var VERSION = "'.VERSION.'";var BUILD = "'.BUILD.'";var tokenCSRF = "'.$token.'";$(document).ready(function(){$(".color").each(function(){$(this).minicolors({control:$(this).attr("data-control")||"hue",defaultValue:$(this).attr("data-defaultValue")||"",format:$(this).attr("data-format")||"hex",keywords:$(this).attr("data-keywords")||"",inline:"true"===$(this).attr("data-inline"),letterCase:$(this).attr("data-letterCase")||"lowercase",opacity:$(this).attr("data-opacity"),position:$(this).attr("data-position")||"bottom left",swatches:$(this).attr("data-swatches")?$(this).attr("data-swatches").split("|"):[],change:function(t,a){t&&(a&&(t+=", "+a),"object"==typeof console&&console.log(t))},theme:"bootstrap"})})});</script>
	    <script src="' . $assets . 'noty' . DS . 'noty.min.js"></script>
	    <script src="' . $assets . 'js' . DS . 'version.js"></script>
	    <script src="' . $assets . 'js' . DS . 'pluginswitch.js"></script>' : '').PHP_EOL;   	
	    // Infinite Ajax Scroll : http://infiniteajaxscroll.com/ 
	    if($cur=='home' || $cur=='blog') {
		    $out .= '	<script src="' . $assets . 'js' . DS . 'jquery-ias.min.js?ver=2.2.2"></script>'.PHP_EOL; 
		    $out .= '	<script>var ias = $.ias({container: "#timeline",item: ".scroll,.media,.card",pagination: ".pagination",next: "#next a",delay: 600});ias.extension(new IASSpinnerExtension({html: \'<p class="mt-3 text-center"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i><span class="sr-only">' .$lang['loading']. '</span></p>\'}));ias.extension(new IASTriggerExtension({html: \'<div class="ias-trigger ias-trigger-next text-center mt-3 mb-3"><button class="btn btn-outline-primary btn-sm"><i class="fa fa-refresh"></i> ' .$lang['load_more']. '</button></a></div>\',offset: ' .$config['nb_page_scroll_infinite']. '}));ias.extension(new IASNoneLeftExtension({html: \'<div class="ias-noneleft text-center mt-3 mb-3"><button class="btn btn-outline-primary btn-sm disabled">' .$lang['no_more_load']. '</button></div>\'}));</script>' .PHP_EOL;
		}
		$out .= '	<script>$(document).ready(function(){$(".pass_show").append(\'<span class="ptxt">' .$lang['show']. '</span>\')});$(document).on("click",".pass_show .ptxt",function(){$(this).text($(this).text()=="' .$lang['show']. '"?"' .$lang['hide']. '":"' .$lang['show']. '");$(this).prev().attr("type",function(index,attr){return attr=="password"?"text":"password"})})</script>'.PHP_EOL; 
	}
	return $out;
}

?>