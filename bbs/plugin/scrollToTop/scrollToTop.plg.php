<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * scrollToTop
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2015-2019
 * @license		http://opensource.org/licenses/MIT
 * @package		FlatBoard
 * @version		2.0
 * @update		2019-02-15
 */	
                
/**
 * On pré-installe les paramètres par défauts.
**/
function scrollToTop_install()
{
	$plugin = 'scrollToTop';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    $data[$plugin.'state']  = false; 
    $data['design']         = 'up-arrow';           
    flatDB::saveEntry('plugin', $plugin, $data);         
}

/**
 * Admin
**/
function scrollToTop_config()
{    
	   global $lang, $token; 
       $plugin = 'scrollToTop';
       # Je spécifie la page page pour n'afficher qu'une partie du css
       $cur = 'scrollToTop';
       $out ='';
			       
       if(!empty($_POST) && CSRF::check($token) )
       {
               $data[$plugin.'state'] = Util::isPOST('state') ? $_POST['state'] : '';    
               $data['design']        = HTMLForm::clean($_POST['design']);   
               
               flatDB::saveEntry('plugin', $plugin, $data);
               $out .= Plugin::redirectMsg($lang['data_save'],'config.php' . DS . 'plugin' . DS . $plugin, $lang['plugin'].'&nbsp;<b>' .$lang[$plugin.'name']. '</b>');   
       }
        else
       {
               if (flatDB::isValidEntry('plugin', $plugin))
               $data = flatDB::readEntry('plugin', $plugin);
               
               # Lecture du dossier des images
		       $design = flatDB::fdir(PLUGIN_DIR. $plugin. DS. 'assets');
		       # On met en place un compteur pour notre ID unique de chaque image
			   $i=0;
		       $allTypes = '<ul class="picSelect">';
			   foreach($design as $type)
			   {
				  $info = pathinfo($type);
				  $filename = $info['filename'];
				  $allTypes .= '<li><input name="design" value="' .$type. '" type="radio" id="cb'.$i.'"' .($data['design']==$type ? ' checked="checked"' : ''). ' />
				  <label for="cb'.$i.'"><img src="' .HTML_PLUGIN_DIR. $plugin. DS. 'assets' . DS . $type. '.png" alt="' .$lang[$type]. '" /></label></li>';
				  $i++;
			   }
			   $allTypes .= '</ul>'; 
	                  
               $out .= HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin,
               HTMLForm::checkBox('state', isset($data)? $data[$plugin.'state'] : '').
               '<h6>' .$lang['design']. '</h6>'.
               $allTypes.               
               #HTMLForm::select('design', array_combine($design, $design), $data['design']).        
               HTMLForm::simple_submit());
       }
       return $out;
} 

/** 
 * Ajoute la css en haut de page du thème (header.html)
 */
function scrollToTop_head()
{
	global $cur;
  	$plugin = 'scrollToTop';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out = '';
  	if (User::isAdmin() && $cur=='scrollToTop') $out .= '<style type="text/css">
ul.picSelect {
  width: 100%;
  margin: 0;
  list-style-type: none;
}

.picSelect li {
  display: inline-block;
}

.picSelect input[type="radio"][id^="cb"] {
  display: none;
}

.picSelect label {
  border: 1px solid #fefefe;
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
}

.picSelect label:before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid #5764C6;
  position: absolute;
  top: -10px;
  left: -10px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 23px;
  transition-duration: 0.4s;
  transform: scale(0);
}

.picSelect label img {
  height: 48px;
  width: 48px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

.picSelect :checked + label {
  border-color: #5764C6;
}

.picSelect :checked + label:before {
  content: "✓";
  background-color: #5764C6;
  transform: scale(1);
}

.picSelect :checked + label img {
  transform: scale(0.9);
  box-shadow: 0 0 5px #333;
  z-index: -1;
} 	
  	</style>';
  	if ($data[$plugin.'state'])	$out .= '  <style type="text/css">.to-top{display:inline-block;height:40px;width:40px;position:fixed;bottom:40px;right:10px;overflow:hidden;text-indent:100%;white-space:nowrap;background:url(' .HTML_PLUGIN_DIR. $plugin. DS. 'assets' . DS . $data['design']. '.png) center 50% no-repeat;visibility:hidden;opacity:0;-webkit-transition:all .3s;-moz-transition:all .3s;transition:all .3s}.to-top.top-is-visible{visibility:visible;opacity:1}.to-top.top-fade-out{opacity:.5}.no-touch .to-top:hover{background-color:#e86256;opacity:1}@media only screen and (min-width:768px){.to-top{right:20px;bottom:20px}}@media only screen and (min-width:1024px){.to-top{height:60px;width:60px;right:30px;bottom:30px}}</style>'.PHP_EOL;
  
  	return $out;
}

/** 
 * Ajoute du Javascript en pied de page du thème (footer.html)
 */
 function scrollToTop_footerJS() { 
	global $lang;
  	$plugin = 'scrollToTop';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin); 
  	$out = '';

	if ($data[$plugin.'state']) {  	
	# javascript
	$out .= '	<a href="#0" class="to-top" title="' .$lang['top']. '">' .$lang['top']. '</a>'.PHP_EOL;
    $out .= '	<script>$(document).ready(function(t){var o=t(".to-top");t(window).scroll(function(){300<t(this).scrollTop()?o.addClass("top-is-visible"):o.removeClass("top-is-visible top-fade-out"),1200<t(this).scrollTop()&&o.addClass("top-fade-out")}),o.on("click",function(o){o.preventDefault(),t("body,html").animate({scrollTop:0},700)})});</script>'.PHP_EOL;
	}
	return $out;  
}
?>