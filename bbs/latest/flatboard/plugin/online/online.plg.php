<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * Online
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
function online_install()
{
	$plugin = 'online';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    $data[$plugin.'state']    = false; 
    $data['color']            = '';   
    $data[$plugin.'_display'] = 'icon';         
    flatDB::saveEntry('plugin', $plugin, $data);
    # On créé le fichier pour stocker les stats  
    $online[$_SERVER['REMOTE_ADDR']] = time();             
    flatDB::saveEntry('plugin', $plugin.'_hits', $online);          
}

/**
 * Admin
**/
function online_config()
{   
	   global $lang, $token;
       $plugin = 'online';
       $out ='';
       $color_select = array('primary'=> $lang['blue'], 'secondary'=> $lang['grey'], 'success'=> $lang['green'], 'danger'=> $lang['red'], 'warning'=> $lang['yellow'], 'info'=> $lang['cyan'], 'light'=> $lang['white'], 'dark'=> $lang['dark']);
       $display = array('icon'=> $lang['icon'], 'text'=> $lang['text']);
       if(!empty($_POST) && CSRF::check($token) )
       {
               $data[$plugin.'state']    = Util::isPOST('state') ? $_POST['state'] : ''; 
               $data['color']            = HTMLForm::clean($_POST['color']);   
               $data[$plugin.'_display'] = HTMLForm::clean($_POST[$plugin.'_display']);        
               flatDB::saveEntry('plugin', $plugin, $data);
               $out .= Plugin::redirectMsg($lang['data_save'],'config.php' . DS . 'plugin' . DS . $plugin, $lang['plugin'].'&nbsp;<b>' .$lang[$plugin.'name']. '</b>');
       }
        else
       {
               if (flatDB::isValidEntry('plugin', $plugin))
               $data = flatDB::readEntry('plugin', $plugin);
               $out .= 
               HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin,             
               HTMLForm::checkBox('state', $data[$plugin.'state']). '
			   <div class="form-row">
				    <div class="col-3">
				        ' .HTMLForm::select('color', $color_select, $data['color']). '
				    </div>
				    <div class="col-3">
				        ' .HTMLForm::select($plugin.'_display', $display, $data[$plugin.'_display']). '			        
				    </div>
			   </div>' .                           
               HTMLForm::simple_submit());
       }
       return $out;
}
/**
 * Affichage en pied de page
**/
function online_footer()
{
  $plugin = 'online';
  global $lang;
  $out = '';
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);   
  if ($data[$plugin.'state']) 
  { 
    $crawler = smart_ip_detect_crawler($_SERVER['HTTP_USER_AGENT']);  
	$online = flatDB::readEntry('plugin', $plugin.'_hits');
	foreach((array)$online as $ip => $time)
	{
		if(time() - $time > 300)
			unset($online[$ip]);
	}
	$online[User::getRealIpAddr()] = time();
	flatDB::saveEntry('plugin', $plugin.'_hits', $online);
	
	# On affiche les robots s'il y a
	if ($crawler) return '<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="' .$crawler. '">Bots</button>';		
	# Affichage de tout les visiteurs		
	$out .= '&nbsp;<span class="badge badge-' .$data['color']. '">' .($data[$plugin.'_display']=='icon' ? '<i class="fa fa-user"></i> ': $lang['online']).intval($online);
	# On détermine s'il y a des sessions admins et modos
	$sessionRole = count(array($_SESSION['role']));
  	if($_SESSION['role']!=='')
  		# On affiche le nombre de l'équipe connecté
  		$out .= ' - <a data-toggle="tooltip" data-placement="top" title="' .$lang['staff_online']. ': ' .intval($sessionRole). '"><i class="fa fa-user-plus"></i></a>';			  		
	$out .= '</span>';
  } 
  return $out;
} 

/**
 * Check if the given user agent string is one of a crawler, spider, or bot.
 *
 * @param string $user_agent
 *   A user agent string (e.g. Googlebot/2.1 (+http://www.google.com/bot.html))
 *
 * @return bool
 *   TRUE if the user agent is a bot, FALSE if not.
 */
function smart_ip_detect_crawler($user_agent) {
    $crawlers = array(
    array('Google', 'Google'),
    array('msnbot', 'MSN'),
    array('Rambler', 'Rambler'),
    array('Yahoo', 'Yahoo'),
    array('AbachoBOT', 'AbachoBOT'),
    array('accoona', 'Accoona'),
    array('AcoiRobot', 'AcoiRobot'),
    array('ASPSeek', 'ASPSeek'),
    array('CrocCrawler', 'CrocCrawler'),
    array('Dumbot', 'Dumbot'),
    array('FAST-WebCrawler', 'FAST-WebCrawler'),
    array('GeonaBot', 'GeonaBot'),
    array('Gigabot', 'Gigabot'),
    array('Lycos', 'Lycos spider'),
    array('MSRBOT', 'MSRBOT'),
    array('Scooter', 'Altavista robot'),
    array('AltaVista', 'Altavista robot'),
    array('IDBot', 'ID-Search Bot'),
    array('eStyle', 'eStyle Bot'),
    array('Scrubby', 'Scrubby robot')
    );

    foreach ($crawlers as $c)
    {
        if (stristr($user_agent, $c[0]))
        {
            return($c[1]);
        }
    }

    return false;
}
?>
