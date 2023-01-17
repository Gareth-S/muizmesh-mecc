<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * signature
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2015-2019
 * @license		http://opensource.org/licenses/MIT
 * @package		Flatboard
 * @version		2.1
 * @update		2019-04-01
 */	
 
/**
 * On pré-installe les paramètres par défauts.
**/
function signature_install()
{
	$plugin = 'signature';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    $data[$plugin.'state']  = false;
	flatDB::saveEntry('plugin', $plugin, $data);
	flatDB::saveEntry('plugin', 'signs_list', array());
}

/**
 * Admin
**/
function signature_config()
{    
	   global $lang, $token; 
       $plugin = 'signature';
       $out ='';
     
       if(!empty($_POST) && CSRF::check($token) )
       {
               $data[$plugin.'state'] = Util::isPOST('state') ? $_POST['state'] : '';               
               flatDB::saveEntry('plugin', $plugin, $data);
               $out .= Plugin::redirectMsg($lang['data_save'],'config.php' . DS . 'plugin' . DS . $plugin, $lang['plugin'].'&nbsp;<b>' .$lang[$plugin.'name']. '</b>');
       }
        else
       {
               if (flatDB::isValidEntry('plugin', $plugin))
               $data = flatDB::readEntry('plugin', $plugin);
               $out .= ($data[$plugin.'state'] ? '<a href="view.php' . DS . 'plugin' . DS . $plugin. DS . 'manage" class="btn btn-primary btn-lg" role="button"><i class="fa fa-sitemap"></i> ' .$lang['manage_sign']. '</a>' : '').
               HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin,
               HTMLForm::checkBox('state', isset($data)? $data[$plugin.'state'] : '').  
               HTMLForm::simple_submit());
       }
       return $out;
} 
function signature_afterTopic($topic) { 
	global $config;
  	$plugin = 'signature';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';	
  	if ($data[$plugin.'state'])
  	{	
	  	$topicEntry = flatDB::readEntry('topic', $_GET['topic']);	  	
	  	$user = isset($topicEntry['trip']) ? $topicEntry['trip'] : null; 
		$signs = flatDB::readEntry('plugin', 'signs_list');
		foreach($signs as $sign)
		{		
			$signUser 	 = $sign['user'];
			$signContent = $sign['user_sign'];	
			if($signUser===$user) $out .= '<blockquote class="mt-4 mb-3" style="border-left-color:' .$config['style']. '; border-right-color:' .$config['style']. '">' . Parser::htmlDecode($signContent). '</blockquote>'. PHP_EOL;
		} 				    
  	}  
  	return $out;
}
function signature_afterReply($reply) { 
	global $config;
  	$plugin = 'signature';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';	
  	if ($data[$plugin.'state'])
  	{  	
	  	$replyEntry = flatDB::readEntry('reply', $reply);
	  	$user = isset($replyEntry['trip']) ? $replyEntry['trip'] : null; 
		$signs = flatDB::readEntry('plugin', 'signs_list');
		foreach($signs as $sign)
		{		
			$signUser 	 = $sign['user'];
			$signContent = $sign['user_sign'];	
			if($signUser===$user) $out .= '<blockquote class="mt-4 mb-3" style="border-left-color:' .$config['style']. '; border-right-color:' .$config['style']. '">' . Parser::htmlDecode($signContent). '</blockquote>'. PHP_EOL;
		} 				    	    
  	}
  	return $out; 
}
 /*
** Page
*/
function signature_view($subtitle)
{
  $plugin = 'signature';
  global $lang, $subtitle, $token; 
  $out ='';
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin); 
  $subtitle = '';

  if ($data[$plugin.'state']) 
  {
	   /**
	   * GESTION DES SIGNATURES
	   **/
	   if(Util::isGET('manage') && User::isAdmin())
	   {
	   		$cur = 'manage'; # Indicateur de page
	   		$subtitle = $lang['manage_sign'];
	   		$items = flatDB::readEntry('plugin', 'signs_list');		   
		
			if(!empty($_POST) && CSRF::check($token) )
			{
				$itemEntry['user'] = HTMLForm::clean($_POST['user']);
				$itemEntry['user_sign'] = HTMLForm::clean($_POST['user_sign']);
				$itemEntry['id'] = flatDB::newEntry();
				$id = $itemEntry['id'];
		
				$items[$id] = $itemEntry;
				flatDB::saveEntry('plugin', 'signs_list', $items);
				
				$out .= Plugin::redirectMsg($lang['data_save'], 'view.php' . DS . 'plugin' . DS . $plugin. DS. 'manage', $lang['sign'], 'alert alert-success');
			}
			else
			{
				$out .= '<div class="alert alert-primary" role="alert">' .$lang[$plugin.'help']. '</div>'.
					HTMLForm::form('view.php' . DS . 'plugin' . DS . $plugin. DS. 'manage', 
				    HTMLForm::text('user', '', 'text').
				    HTMLForm::textarea('user_sign', '', '', '', 4).
					HTMLForm::simple_submit('add', '', 'fa fa-plus'));
				
				if($items){	
				$out .= '
				<table class="mt-3 table table-striped">
					<thead>
						<tr>
						<th class="col-4">' .$lang['user']. '</th>
						<th class="col-8">' .$lang['user_sign']. '</th>
						</tr>
					</thead>
					<tbody>';		
					foreach($items as $item)
					{
						$out .= '
						<tr>
							<td>' .signature_manage($item['id']). $item['user']. '</td>
							<td class="small">' . Parser::htmlDecode($item['user_sign']). '</td>
						</tr>';
					} 
					$out .= '
					</tbody>
				</table>';
				} else {
					$out .= '<div class="alert">' .$lang['sign_empty']. '</div>';
				}						
			}
		}
	    /**
	    * EDIT A SIGN
	    **/ 
	  	else if(Util::isGET('edit') && User::isAdmin())
	  	{
		  	$edit = $_GET['edit'];
		  	$itemEntry = flatDB::readEntry('plugin', 'signs_list', $edit);
			$out .= '<h5>' .Util::lang('edit sign : %s', $edit). '</h5>';    	
	   				   		
			if(!empty($_POST) && CSRF::check($token) )
			{
				$itemEntry[$edit]['user'] = HTMLForm::clean($_POST['user']);
				$itemEntry[$edit]['user_sign'] = HTMLForm::clean($_POST['user_sign']);
				flatDB::saveEntry('plugin', 'signs_list', $itemEntry);
				
				$out .= Plugin::redirectMsg($lang['data_save'], 'view.php' . DS . 'plugin' . DS . $plugin. DS. 'manage', $lang['sign'], 'alert alert-success');
			}
			else
			{
				$out .= HTMLForm::form('view.php' . DS . 'plugin' . DS . $plugin. DS. 'edit' . DS . $_GET['edit'], 
				    HTMLForm::text('user', $itemEntry[$edit]['user'], 'text').
				    HTMLForm::textarea('user_sign', $itemEntry[$edit]['user_sign'], '', '', 4).
					HTMLForm::simple_submit('edit','','fa fa-floppy-o').
					'<a href="view.php' . DS . 'plugin' . DS . $plugin. DS . 'manage" class="ml-3 btn btn-secondary" role="button"><i class="fa fa-sitemap"></i> ' .$lang['manage_sign']. '</a>'
					);					
			}
	   	}		
	    /**
	    * DELETE A SIGN
	    **/ 
	  	else if(Util::isGET('delete') && User::isAdmin())
	  	{
		  	$delete = $_GET['delete'];
			$out .= '<h5>' .Util::lang('delete sign : %s', $delete). '</h5>';    	
			if(!empty($_POST) && CSRF::check($token) )
			{
				$items = flatDB::readEntry('plugin', 'signs_list');
				unset($items[$delete]);
				flatDB::saveEntry('plugin', 'signs_list', $items);
		          
				$out .= Plugin::redirectMsg($lang['data_save'], 'view.php' . DS . 'plugin' . DS . $plugin. DS. 'manage', $lang['sign']);
			}
			else
			{
				$out .= HTMLForm::form('view.php' . DS . 'plugin' . DS . $plugin. DS. 'delete' .DS. $delete,
						HTMLForm::simple_submit('delete','','fa fa-trash'));
			}
	   	}  	
	} else {
		$out .= '<p class="alert">' .$lang['none']. '</p>';
	}// plugin state
	return $out;       
}

 /*
** Manage signature
*/
function signature_manage($sign)  
{ 
            global $lang;
            $plugin = 'signature';
            # Lecture des données
            $data = flatDB::readEntry('plugin', $plugin);
            
            if ($data[$plugin.'state'] && User::isAdmin())          
            return '
			<div class="btn-group">
			  <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class="fa fa-cog"></i>
			  </button>
			  <div class="dropdown-menu">
			  		<a class="dropdown-item" href="view.php' . DS . 'plugin' . DS . $plugin. DS. 'edit' .DS. $sign. '"><i class="fa fa-edit"></i> ' .$lang['edit']. '</a>
			  		<a class="dropdown-item" href="view.php' . DS . 'plugin' . DS . $plugin. DS. 'delete' .DS. $sign. '"><i class="fa fa-times"></i> ' .$lang['delete']. '</a>
			  </div>
			</div>  '.Plugin::hook('manageSign', $sign);
}
