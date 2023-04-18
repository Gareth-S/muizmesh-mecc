<?php

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'config';
require_once __DIR__  . DIRECTORY_SEPARATOR .  'header.php';

 /**
  * GESTION DES MODÉRATEURS
  **/
if(Util::isGET('worker') && User::isAdmin())
{
	$cur = 'worker'; # Indicateur de page
	$out['subtitle'] = $lang['worker'];
	$out['sub_prefix'] = '<a href="add.php' . DS . 'worker" data-toggle="tooltip" data-placement="top" title="' .$lang['add_worker']. '"><i class="fa fa-plus-circle"></i></a>&nbsp;';
	$out['content'] .= '<ul class="list-group w-50">';
	if($config['worker'])
	{
		foreach($config['worker'] as $key => $mail)
		{
			# Récupération du pseudo sans le hash
			$user = strstr($key, '@', true);
			$out['content'] .= '
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<i class="fa fa-user-o" aria-hidden="true"></i> <a class="text-primary" data-toggle="tooltip" data-placement="top" title="' .$key. '">' .$user. '</a> 
				<i class="fa fa-envelope-o" aria-hidden="true"></i> ' .$mail. '
				<a class="badge badge-danger" href="delete.php' . DS . 'worker' . DS . $key. '" data-toggle="tooltip" data-placement="top" title="' .$lang['delete']. '"><i class="fa fa-trash-o"></i></a>
			</li>';
		}
	}
	else
	{
		$out['content'] .= '<li>' .$lang['none']. '</li>';
	}
	$out['content'] .= '</ul>';
}
 /**
  * GESTION DES PLUGINS
  **/
else if(Util::isGET('plugin') && User::isAdmin())
{
	if(Plugin::isValidHook('config', $_GET['plugin']))
	{
		$cur = (isset($_GET['plugin']) ? $_GET['plugin'] : null); # Indicateur de page
		$out['subtitle'] = $lang['config']. ' ' .$lang[$_GET['plugin'].'name'];
	    $plugin = $_GET['plugin'];
		$out['content'] .= '     
    <div class="row">	
	    	    			   
	    <div class="col-12">	
		    <ul class="breadcrumb">
		        <li class="breadcrumb-item"><i class="fa fa-plug" aria-hidden="true"></i> <a href="config.php' . DS . 'plugin">' .$lang['plugin'].$lang['plural']. '</a></li>
		        <li class="breadcrumb-item">' .$lang[$_GET['plugin'].'name']. '</li>
			</ul>	    			    
	    	' .Plugin::myHook('config', $_GET['plugin']). '
	    </div>	    
	    	    
	</div>';					
	}
	 /**
	  * TABLEAU RETOURNANT LA LISTE DES PLUGINS
	  **/	
	else
	{
		$cur = 'plugin'; # Indicateur de page
		$out['subtitle'] = $lang['manage_plugin'];
		
		$out['content'] .= '
		<h2 class="mb-5">
			' .$lang['plugin']. Util::pluralize(count($plugins)) . ' <small class="badge badge-secondary">' .count($plugins). '</small>
		</h2>  
   		
        <div class="row">
				        
            <div class="col-12">
            	<div class="card-columns">';
		        sort($plugins);
		        $nb = PLUGS_PAGINATION;
			    $total = Paginate::countPage($plugins, $nb);
			    $p = Paginate::pid($total);                      	                            
				if($plugins)
				{
				    foreach(Paginate::viewPage($plugins, $p, $nb) as $plugin)
					{
						$infoLANG = PLUGIN_DIR . $plugin . DS . 'lang' . DS . $config['lang']. '.php';
					    # Fichier langue qui contient les infos du plugins
					    if (file_exists($infoLANG)) require_once $infoLANG;
							else require_once PLUGIN_DIR . $plugin . DS . 'lang' . DS . 'en-US.php';
	
					    $data = flatDB::readEntry('plugin', $plugin);
					    $statut = ($data[$plugin.'state'] ? 'success' : 'secondary');
					    $statutLang = ($data[$plugin.'state'] ? '<i class="fa fa-cog" aria-hidden="true"></i> ' .$lang['config'] : 
					    '<i class="fa fa-plus-square" aria-hidden="true"></i> ' .$lang['install']);
					    $statutCheckbox = ($data[$plugin.'state'] ? 'checked' : '');
					    $updateInfo = ($lang[$plugin.'update']? ' <button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="' .$lang['update']. ': ' .$lang[$plugin.'update']. '"><i class="fa fa-info" aria-hidden="true"></i></button>' : '');	
					    // DEBUGGED !			  
					    $disablePlug = (is_array($data) && array_key_exists('cantDisable',$data) && $data['cantDisable']);
					    $cantDisable = $disablePlug ? 'disabled' : '';
					    if($disablePlug)
					    	$langStat = $lang['cantDisable'];
					    else
					    	$langStat = (!$data[$plugin.'state'] ? $lang['click_to_active'] : $lang['click_to_disable']);
					    
						$out['content'] .= '
					  <div id="plugin-' .$statut. '" class="card border-' .$statut. '" data-pluginid="'.$plugin.'" data-plugincardroot="true">
					  
						<div class="card-header">
							<div class="custom-control custom-switch float-right" data-toggle="tooltip" data-placement="top" title="' .$langStat. '" data-plugincardtooltip="true">
							  <input type="checkbox" class="custom-control-input" id="switch_' .$plugin. '" ' .$statutCheckbox. ' data-corepluginswitch="true" data-corepluginid="' .$plugin. '" ' .$cantDisable. '>
							  <label class="custom-control-label" for="switch_' .$plugin. '"></label>
							</div>
						    <h6>' .$lang[$plugin.'name']. '</h6>
						</div>
										    
					    <div class="card-body" style="min-height:180px;max-height:180px;overflow:auto">
							<figure class="figure float-right">
							  <figcaption class="figure-caption">
							  		' .($lang[$plugin.'author_mail']? User::protect_email($lang[$plugin.'author_mail'], $lang['mail']) : ''). '
							  		<span class="badge badge-info">v.' .$lang[$plugin.'version']. '</span>
							  </figcaption>
							  <hr>							
							  <img src="' .HTML_PLUGIN_DIR . $plugin . DS . 'icon.png" class="img-thumbnail" alt="icone" style="width:80px">
							</figure>					    

						    <p class="text-uppercase small text-primary">
					                ' .$lang['author']. ' ' .(!$lang[$plugin.'author_site']? $lang[$plugin.'author'] : '<a href="' .$lang[$plugin.'author_site']. '">' .$lang[$plugin.'author']. '</a>'). '<br/> 					  			
					        </p>	
					          			     					      
						    <p class="card-text text-muted">' .$lang[$plugin.'description']. '</p>			  					  
					    </div>
	
					    <div class="card-footer" data-plugincardbutton="true">
					      	' .(Plugin::isValidHook('config', $plugin)? '<a href="config.php' . DS . 'plugin' . DS . $plugin. '" class="btn btn-' .$statut. '">' .$statutLang. '</a>' : '') . $updateInfo. '					      						      		      	
						</div>
						  				    
					  </div>';
					}
				}
				else		{
					$out['content'] .= '<p>' .$lang['none']. '</p>';
				}
		$out['content'] .= ' 
            	</div>
            </div><!-- /.column col-12 -->
        </div>       
        <!-- /.row -->'.
          # PAGINATION
          Paginate::pageLink($p, $total, 'config.php' . DS . 'plugin' . DS . 'o'); 
	}
}
/**
 * CENTRE DE NOTIFICATIONS (DASHBOARD)
 **/
else if(Util::isGET('notifications') && User::isAdmin())
{
	$cur = 'notifications'; # Indicateur de page
	$out['subtitle'] = $lang['dashboard'];
	
    # On vérifie la présence éventuelle du fichier d'installation
	if(is_file('install.php')) $out['content'] .= '<div class="alert alert-danger" role="alert"><i class="fa fa-warning"></i> ' .$lang['warning_installation_file']. '</div>';
	
	$memory = '';
	if (function_exists('sys_getloadavg')) {
        $load = sys_getloadavg();
        $stats = implode(', ', $load);
        $memory .= '<tr>
			<td>Memory</td>
			<td>
				Current memory usage is ' .Util::getMemory('usage'). ' (' .Util::getMemory('peak'). ') out of ' .Util::getMemory('available'). ' allocated.
				<br />Current CPU load is ' .$stats. '
			</td>
		</tr>';
	}

	if (defined('FLATBOARD_PRO'))
		$flatboardEdition = '<span class="text-primary">' .$lang['pro_edition']. '</span>';
	else 
		$flatboardEdition = '<span class="text-warning">' .$lang['standard_edition']. '</span>';
	
	$out['content'] .= '
	<div class="table-responsive-md">
	<table class="table table-striped">
	<thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col"></th>
	    </tr>
	</thead>	
	<tbody>

		<tr>
			<td>Flatboard edition</td>
			<td>' .$flatboardEdition. '</td>
		</tr>
		<tr>
			<td>Flatboard version</td>
			<td>'.VERSION.'</td>
		</tr>		
		<tr>
			<td>Flatboard codename</td>
			<td>'.CODENAME.'</td>
		</tr>
		<tr>
			<td>Flatboard build</td>
			<td>' .BUILD. ' <small class="text-muted">(' .DateTime::createFromFormat('ymd', BUILD)->format('F j, Y'). ')</small></td>
		</tr>			
		<tr>
			<td>CHARSET</td>
			<td>' .CHARSET. '</td>
		</tr>
	
		<tr>
			<td>PHP version</td>
			<td>' .phpversion(). '</td>
		</tr>

		<tr>
			<td>SERVER SOFTWARE</td>
			<td>' .(!empty($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : ''). '</td>
		</tr>
			
		<tr>
			<td>PHP modules</td>
			<td>' .implode(', ',get_loaded_extensions()). '</td>
		</tr>
		
		' .	# Vérifie si la fonction mail existe
			Util::testMail(true,'<tr><td>PHP mail</td><td>#message</td></tr>').
			$memory. '				
	</tbody>
	</table>
	</div>';		
}
/**
 * SUPRESSION DU FICHIER D'INSTALLATION
 **/
else if(Util::isGET('delinstallfile') && User::isAdmin())
{
    @unlink('install.php');
	Util::redirect('config.php' . DS . 'notifications');
	exit();
}
/**
 * SUPRESSION DU CACHE DES FICHIERS CSS DU THEME
 **/
else if(Util::isGET('deletecache') && User::isAdmin())
{
	$out['subtitle'] = '';
	$out['content'] = '';
	$css = PATH_ROOT . DS . 'theme' . DS . $config['theme'] . DS . 'cache' . DS . 'style.min.css';
	if(@unlink($css))
		$out['content'] .= Plugin::redirectMsg($lang['cache_clean'], 'config.php', $lang['config'], 'alert alert-success');
	else
		$out['content'] .= Plugin::redirectMsg($lang['folder_error'], 'config.php', $lang['config'], 'alert alert-danger');    	
}
/**
 * LISTE DES UTILISATEUR BANNIS
 **/
else if(Util::isGET('ban') && User::isAdmin())
{
	$cur = 'ban'; # Indicateur de page
	$out['subtitle'] = $lang['ban_list'];
	
    if (!file_exists(BAN_FILE)) {
       @mkdir(BAN_FILE, 0777, true);
       $fp = fopen(BAN_FILE, 'w');
	   fwrite($fp, '');
	   fclose($fp);
    }
    $ips = file_get_contents(BAN_FILE, true);
	$adresses = explode("\n", $ips);
    $nbr = count($adresses);
     
	$out['content'] .= '<ol>';
	if($adresses)
	{
		foreach($adresses as $key => $value)
		{
		    if ($value != '')
			  $out['content'] .= '<li>' .entryLink::userBan($value). ' ' .$value. '</li>';
		}
	} else {		 
		$out['content'] .= '<li>' .$lang['none']. '</li>';
	}
	$out['content'] .= '</ol>';	
}
/**
 * GESTION DES TAGS
 **/
else if(Util::isGET('tags') && User::isAdmin())
{
	$cur = 'tags'; # Indicateur de page
	$out['subtitle'] = $lang['manage_tags'];
	$tags = flatDB::readEntry('config', 'tags');
	
	if(HTMLForm::check('title') && HTMLForm::check('replace',0,250) && CSRF::check($token) )
	{
		$tagEntry['title'] = HTMLForm::clean($_POST['title']);
		$tagEntry['replace'] = HTMLForm::clean($_POST['replace']);
		$tagEntry['hidden_tag'] = isset($_POST['hidden_tag'])? $_POST['hidden_tag'] : '';
		$tagEntry['id'] = flatDB::newEntry();
		$id = $tagEntry['id'];
		
		$tags[$id] = $tagEntry;
		flatDB::saveEntry('config', 'tags', $tags);
		
		$out['content'] .= Plugin::redirectMsg($lang['data_save'], 'config.php' . DS . 'tags', $lang['tags'], 'alert alert-success');
	}
	else
	{
		$out['content'] .= HTMLForm::form('config.php' . DS . 'tags', '
		<div class="row">
			<div class="col-12">
		    	<div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-3" aria-hidden="true"></i> ' .$lang['tags_help']. '</div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-5">'.
		    	HTMLForm::text('title', '', 'text', '', 'title_tag').
		    '</div>
		    <div class="col-7"><br /><br />'.
		    	HTMLForm::checkBox('hidden_tag', isset($tagEntry['hidden_tag'])? $tagEntry['hidden_tag'] : ''). 
		    '</div>
		</div>'.
		HTMLForm::textarea('replace', '', '', '', 2).
		HTMLForm::simple_submit('add', '', 'fa fa-tags'));
		
		if($tags){	
			$out['content'] .= '
			<table class="table table-striped">
				<thead>
					<tr>
					<th scope="col">' .$lang['tags']. '</th>
					<th scope="col">' .$lang['replace']. '</th>
					<th scope="col">' .$lang['tags_result']. '</th>
					<th scope="col"></th>
					</tr>
				</thead>
				<tbody>';		
				foreach($tags as $tagEntry)
				{
					$out['content'] .= '
					<tr>
						<td>' .entryLink::manageTag($tagEntry['id']). '<pre>' .$tagEntry['title']. '</pre></td>
						<td><code>' .$tagEntry['replace']. '</code></td>
						<td>' .Parser::htmlDecode($tagEntry['replace']). '</td>
						<td>' .($tagEntry['hidden_tag'] ? '<i style="color:red" class="fa fa-eye-slash fa-2x" aria-hidden="true"></i>' : '<i class="fa fa-eye fa-2x" aria-hidden="true"></i>'). '</td>
					</tr>';
				} 
				$out['content'] .= '
				</tbody>
			</table>';
		} else {
			$out['content'] .= '<div class="alert alert-light" role="alert"><i class="fa fa-tag"></i> ' .$lang['tags_empty']. '</div>';
		}
		$out['content'] .= '
			<script>
			window.onload = function () {
			    var myswitch = document.getElementById("hidden_tag");
			    var mytextarea = document.getElementById("replace");
			    var myinput = document.getElementById("title");
			    myswitch.onchange = function () {
			        if (this.checked) {
			            mytextarea.value = \'<span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="' .$lang['user_checked']. '"><i class="fa fa-certificate"></i></span> ' .$lang['user']. '\';
			            myinput.value = \'' .$lang['username_check']. '\';
			        } else {
			            mytextarea.value = \'\';
			            myinput.value = \'' .$lang['title_tag']. '\';
			        }
			    }
			}					
			</script>';								
	}

}
 /**
  * PAGE DES PARAMÈTRES DU FORUM
  * UNIQUEMENT ACCESSIBLE PAR L'ADMINISTRATEUR
  **/ 
else
{
	if(User::isAdmin()) {
		$cur = 'config'; # Indicateur de page
		$out['subtitle'] = $lang['config'];
		if(HTMLForm::check('title') && HTMLForm::check('description',0,250) &&
			Util::isPOST('theme') && flatDB::indir($_POST['theme'], THEME_DIR) && HTMLForm::check('style',3,120) && 
			Util::isPOST('lang') && flatDB::indir($_POST['lang'], LANG_DIR, '.php') && HTMLForm::check('date_format') && HTMLForm::check('short_date_format') && HTMLForm::check('mail') && HTMLForm::check('footer_text', 1, 250) && HTMLForm::checkNb('ItemByPage') && HTMLForm::checkNb('nb_page_scroll_infinite') && CSRF::check($token) )
		{
			$config['title'] = HTMLForm::clean($_POST['title']);
			$config['description'] = HTMLForm::transNL(HTMLForm::clean($_POST['description']));
			$config['theme'] = $_POST['theme'];
			$config['style'] = HTMLForm::clean($_POST['style']);
			$config['lang'] = HTMLForm::clean($_POST['lang']);
			$config['editor'] = isset($_POST['editor'])? HTMLForm::clean($_POST['editor']) : '';
			$config['date_format'] = HTMLForm::clean($_POST['date_format']);
			$config['short_date_format'] = HTMLForm::clean($_POST['short_date_format']);
			$config['mail'] = HTMLForm::clean($_POST['mail']);
			$config['footer_text'] = HTMLForm::transNL(Parser::htmlDecode($_POST['footer_text']));
			$config['announcement'] = HTMLForm::transNL(Parser::htmlDecode($_POST['announcement']));
			$config['ItemByPage'] = HTMLForm::clean($_POST['ItemByPage']);
			$config['nb_page_scroll_infinite'] = HTMLForm::clean($_POST['nb_page_scroll_infinite']);
			$config['private'] = isset($_POST['private'])? $_POST['private'] : '';
			$config['math_captcha'] = isset($_POST['math_captcha'])? $_POST['math_captcha'] : '';
			$config['homepage'] = HTMLForm::clean($_POST['homepage']);
			$config['blog_new'] = HTMLForm::clean($_POST['blog_new']);
			$config['post_summary'] = HTMLForm::clean($_POST['post_summary']);
			flatDB::saveEntry('config', 'config', $config);
			$out['content'] .= Plugin::redirectMsg($lang['data_save'], 'config.php', $lang['config']);
		}
		else
		{
			$themes = flatDB::fdir('theme');
			# Sélection du forum à afficher pour le blog
			$forums = flatDB::readEntry('config', 'forumOrder');
			foreach(array_values($forums) as $key => $forum)
			{
				$forumEntry = flatDB::readEntry('forum', $forum);
				$forumOptions[$forum] = $forumEntry['name'];
			}
			$forumOptions[''] = $lang['disable_blog'];
						
			$out['content'] .= HTMLForm::form('config.php', '
			<div class="row">
			    <div class="col-8">'.
			    HTMLForm::text('title', $config['title'], 'text').
			    '</div>
			    <div class="col-4">'.
			    HTMLForm::text('style', $config['style'], 'text', 'color'). 
			    '</div>
			</div>'.
				HTMLForm::textarea('description', $config['description'], '', '', 3). '
			<hr class="my-2">
			<div class="row">
			    <div class="col">'.
			    HTMLForm::select('theme', array_combine($themes, $themes), $config['theme'], '', 'theme_desc').
			    '</div>
			    <div class="col">'.
			    HTMLForm::select('lang', langpack(), $config['lang']). 
			    '</div>
			    <div class="col">'.
			    HTMLForm::select('editor', array('bbcode'=> $lang['bbcode'], 'markdown'=> $lang['markdown']), $config['editor'], '', 'editor_desc', false). '
			    </div>
			</div>
			<div class="row">
			    <div class="col">'.
			    HTMLForm::text('date_format', $config['date_format'], 'text', '', 'default_date_format', 'date_format_desc'). 
			    '</div>
			    <div class="col">'.
			    HTMLForm::text('short_date_format', $config['short_date_format'], 'text', '', 'date_format_placeholder', 'date_format_desc'). 
			    '</div>			    
			    <div class="col">'.
			    HTMLForm::text('ItemByPage', $config['ItemByPage'], 'number'). 
			    '</div>
			    <div class="col">'.
			    HTMLForm::text('nb_page_scroll_infinite', $config['nb_page_scroll_infinite'], 'number', '', '', 'nb_page_scroll_desc'). 
			    '</div>
			</div>
			
			<hr class="my-2">			
			<div class="row">
			    <div class="col">'.
			    HTMLForm::checkBox('private', $config['private'], 'restrict_access').
			    '</div>
			    <div class="col">'.
			    HTMLForm::checkBox('math_captcha', isset($config['math_captcha'])? $config['math_captcha'] : '').
			    '</div>
			</div>
			<hr class="my-2">
						
			<div class="row">
			    <div class="col">'.
			    HTMLForm::select('homepage', array('index.php'=> $lang['last_post'], 'index.php/forum'=> $lang['forum'], 'blog.php'=> $lang['blog']), $config['homepage']).
			    '</div>
			    <div class="col">'.
			    HTMLForm::text('mail', $config['mail'], 'email').
			    '</div>
			</div>'.	
				HTMLForm::textarea('footer_text', $config['footer_text'], '', '', 4).
				HTMLForm::textarea('announcement', $config['announcement'], '', 'announcement_desc', 5). '
				
			<hr class="my-2">		
				<h6 class="small text-center text-uppercase">' .$lang['blog']. '</h6>
			<hr class="my-2">
			
			<div class="row">
			    <div class="col">'.
			    HTMLForm::select('blog_new', $forumOptions, isset($config['blog_new'])? $config['blog_new'] : '').
			    '</div>
			    <div class="col">'.
			    HTMLForm::text('post_summary', $config['post_summary'], 'number'). 
			    '</div>
			</div>'.
				HTMLForm::simple_submit('save','btn btn-success btn-lg btn-block mt-3 mb-2','fa fa-floppy-o'));
		}
	
	} 
	/**
	 * Si non connecté on quitte
	 **/	
	else {	
		Util::redirect('auth.php' );
		exit();
	}
}

require PATH_ROOT . DS . 'footer.php';
?>
