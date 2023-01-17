<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * googleTools
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2015-2019
 * @license		http://opensource.org/licenses/MIT
 * @package		Flatboard
 * @version		2.0
 * @update		2019-02-15
 */	
 
/**
 * On pré-installe les paramètres par défauts.
**/
function googleTools_install()
{
	$plugin = 'googleTools';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    $data[$plugin.'state']    = false;
    $data['trackID']   		  = '';
    $data['data-ad-client']   = '';  
    $data['data-ad-slot']     = '';   
    $data['display_add']      = 'beforeMain';
	flatDB::saveEntry('plugin', $plugin, $data);
}

/**
 * Admin
**/
function googleTools_config()
{    
	   global $lang, $token; 
       $plugin = 'googleTools';
       $out ='';
     
       if(!empty($_POST) && CSRF::check($token) )
       {
               $data[$plugin.'state'] = Util::isPOST('state') ? $_POST['state'] : '';
               $data['trackID'] = HTMLForm::clean($_POST['trackID']);
               $data['data-ad-client'] = HTMLForm::clean($_POST['data-ad-client']);
               $data['data-ad-slot'] = HTMLForm::clean($_POST['data-ad-slot']);
               $data['display_add'] = HTMLForm::clean($_POST['display_add']);                  
               flatDB::saveEntry('plugin', $plugin, $data);
               $out .= Plugin::redirectMsg($lang['data_save'],'config.php' . DS . 'plugin' . DS . $plugin, $lang['plugin'].'&nbsp;<b>' .$lang[$plugin.'name']. '</b>');
       }
        else
       {
               if (flatDB::isValidEntry('plugin', $plugin))
               $data = flatDB::readEntry('plugin', $plugin);
               $out .= HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin,
               HTMLForm::checkBox('state', isset($data)? $data[$plugin.'state'] : '').
               '<div class="alert alert-primary" role="alert">' .$lang['leave_empty_inactiv']. '</div>
               <hr><h6 class="text-center text-uppercase">' .$lang['google_analytics']. '</h6><hr>'. 
               HTMLForm::text('trackID', isset($data)? $data['trackID'] : '', 'text', '', 'trackID_hold'). '
               <hr><h6 class="text-center text-uppercase">' .$lang['adsbygoogle']. '</h6><hr>'. 
               HTMLForm::text('data-ad-client', isset($data)? $data['data-ad-client'] : '', 'text', '', 'data-ad-client-hold'). 
               HTMLForm::text('data-ad-slot', isset($data)? $data['data-ad-slot'] : '', 'text', '', 'data-ad-slot-hold'). 
               HTMLForm::select('display_add', array('beforeMain'=>$lang['beforeMain'], 'afterMain'=>$lang['afterMain'], 'bottomTopic'=>$lang['bottomTopic'], 'bottomReply'=>$lang['bottomReply']), $data['display_add']).   
               HTMLForm::simple_submit());
       }
       return $out;
} 
/**
 * On charge le js en haut de page
**/
function googleTools_head()
{
  $plugin = 'googleTools';
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);
  $config = flatDB::readEntry('config', 'config');
  $out='';
  
  if ($data[$plugin.'state'])
  {	
	if (!$data['data-ad-client']=='' && !$data['data-ad-slot']=='') { 
	$out .='<style>.adsbygoogle_resp { width: 320px; height: 100px; } @media(min-width: 500px) { .adsbygoogle_resp { width: 468px; height: 60px; } } @media(min-width: 800px) { .adsbygoogle_resp { width: 728px; height: 90px; } }</style>'.PHP_EOL;
	}	
	if (!$data['trackID']=='') { 
	$out .='<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script>
	  (function(a,b,c){var d=a.history,e=document,f=navigator||{},g=localStorage,
	  h=encodeURIComponent,i=d.pushState,k=function(){return Math.random().toString(36)},
	  l=function(){return g.cid||(g.cid=k()),g.cid},m=function(r){var s=[];for(var t in r)
	  r.hasOwnProperty(t)&&void 0!==r[t]&&s.push(h(t)+"="+h(r[t]));return s.join("&")},
	  n=function(r,s,t,u,v,w,x){var z="https://www.google-analytics.com/collect",
	  A=m({v:"1",ds:"web",aip:c.anonymizeIp?1:void 0,tid:b,cid:l(),t:r||"pageview",
	  sd:c.colorDepth&&screen.colorDepth?screen.colorDepth+"-bits":void 0,dr:e.referrer||
	  void 0,dt:e.title,dl:e.location.origin+e.location.pathname+e.location.search,ul:c.language?
	  (f.language||"").toLowerCase():void 0,de:c.characterSet?e.characterSet:void 0,
	  sr:c.screenSize?(a.screen||{}).width+"x"+(a.screen||{}).height:void 0,vp:c.screenSize&&
	  a.visualViewport?(a.visualViewport||{}).width+"x"+(a.visualViewport||{}).height:void 0,
	  ec:s||void 0,ea:t||void 0,el:u||void 0,ev:v||void 0,exd:w||void 0,exf:"undefined"!=typeof x&&
	  !1==!!x?0:void 0});if(f.sendBeacon)f.sendBeacon(z,A);else{var y=new XMLHttpRequest;
	  y.open("POST",z,!0),y.send(A)}};d.pushState=function(r){return"function"==typeof d.onpushstate&&
	  d.onpushstate({state:r}),setTimeout(n,c.delay||10),i.apply(d,arguments)},n(),
	  a.ma={trackEvent:function o(r,s,t,u){return n("event",r,s,t,u)},
	  trackException:function q(r,s){return n("exception",null,null,null,null,r,s)}}})
	  (window,"' .$data['trackID']. '",{anonymizeIp:true,colorDepth:true,characterSet:true,screenSize:true,language:true});
	</script>'.PHP_EOL;
	}		
	return $out;	    
  }    
}

/** 
 * Ajoute du Javascript en pied de page du thème
 */
function googleTools_footerJS() { 
	global $lang;
  	$plugin = 'googleTools';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';
  	
	if ($data[$plugin.'state']) {	 
		$out .=''.PHP_EOL;			    
	}
	return $out;  
}

/** 
 * Ajoute le code des annonces google
 */
function adsbygoogle($adClient, $adSlot) { 
	$plugin = 'googleTools';
  	return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle adsbygoogle_resp"
			style="display:inline-block"
			data-ad-client="' .$adClient. '"
			data-ad-slot="' .$adSlot. '"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script><!--img src="' .HTML_PLUGIN_DIR. $plugin. DS. 'ads.jpg" alt"ads" /-->'.PHP_EOL; 
}

function googleTools_beforeMain() { 
	global $lang;
  	$plugin = 'googleTools';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';	
  	if ($data[$plugin.'state'])
  	{	
		if (!$data['data-ad-client']=='' && !$data['data-ad-slot']=='' && $data['display_add']=='beforeMain') { 
		$out .= adsbygoogle($data['data-ad-client'], $data['data-ad-slot']);
		}		
		return $out;	    
  	}  
}

function googleTools_afterMain() { 
	global $lang;
  	$plugin = 'googleTools';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';	
  	if ($data[$plugin.'state'])
  	{	
		if (!$data['data-ad-client']=='' && !$data['data-ad-slot']=='' && $data['display_add']=='afterMain') { 
		$out .= adsbygoogle($data['data-ad-client'], $data['data-ad-slot']);
		}		
		return $out;	    
  	}  
}

function googleTools_bottomTopic() { 
	global $lang;
  	$plugin = 'googleTools';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';	
  	if ($data[$plugin.'state'])
  	{	
		if (!$data['data-ad-client']=='' && !$data['data-ad-slot']=='' && $data['display_add']=='bottomTopic') { 
		$out .= adsbygoogle($data['data-ad-client'], $data['data-ad-slot']);
		}		
		return $out;	    
  	}  
}

function googleTools_bottomReply() { 
	global $lang;
  	$plugin = 'googleTools';
  	# Lecture des données
  	$data = flatDB::readEntry('plugin', $plugin);
  	$out='';	
  	if ($data[$plugin.'state'])
  	{	
		if (!$data['data-ad-client']=='' && !$data['data-ad-slot']=='' && $data['display_add']=='bottomReply') { 
		$out .= adsbygoogle($data['data-ad-client'], $data['data-ad-slot']);
		}		
		return $out;	    
  	}  
}