<?php 
  	# Récupération du pseudo sans le hash
  	$user = strstr($sessionTrip, '@', true);
	# Taille de l'avatar en config
	$size	  	 = 65; 
	$username	 = HTMLForm::trip($sessionTrip, '');
	# Convertion du nom de l'utilisateur
	$h1	=	hash('crc32',$username);
	$h2	=	hash('crc32b',$username);
	# Points ou carrés ?
	$d	=	flatDB::readEntry('plugin', 'identicon')['dots'] ? 'dot' : '';
	# Génération du nom d'utilisateur
	$s	=	$h1 . $h2[0] . $d;
	$file_path = PATH_GEN_AVATAR . $s . 'x' .$size;
	$file_html = HTML_GEN_AVATAR . $s . 'x' .$size;
	# On créé des points au lieu des carré par défault et on l'ajoute 
	# dans l'url pour récupérer le paramètre.
	$dots	   =  flatDB::readEntry('plugin', 'identicon')['dots'] ? '&d=dot' : '';
	# Lien de génération de l'avatar avec paramètres
	$pic 	   =  HTML_PLUGIN_AVATAR . 'avatar.php?f=' .urlencode(PATH_GEN_AVATAR). '&u=' .$username. '&sz=' .$size. $dots;
	
	
	/**
	 * GENERATION EST AFFICHAGE DE L'AVATAR
	**/					  	
  	$identity  = '';
	# Avatar personalisé placer dans uploads/avatars/ sans l'arobase
	# Exemple: pseudo@motdepasse = pseudo_motdepasse.png
  	$avatar = str_replace(array('#','@'), '_', $username);	  	  	
  	if ( file_exists(PATH_IDENTICON_AVATAR . $avatar. '.png') ) 
  	{
  		$identity .= '<img class="rounded-circle" src="' .HTML_AVATAR . $avatar. '.png" width="'.$size.'" height="'.$size.'" alt="' .$user. '">'. PHP_EOL; 
  	} 
  	# Si le pseudo est numéric, on place un avatar anonymous.png fpourni avec le plugin
  	else if (is_numeric($username)) 
  	{
        $identity .= '<img class="rounded-circle" src="' .HTML_PLUGIN_AVATAR . 'anonymous.png" width="'.$size.'" height="'.$size.'" alt="anonymous">'. PHP_EOL;
    }
    # Si l'avatar est déjà généré, dans ce cas on le prends en cache
    else if ( file_exists($file_path . '.png') ) 
  	{
  		$identity .= '<img class="rounded-circle" src="' .$file_html . '.png" width="'.$size.'" height="'.$size.'" alt="' .$user. '">'. PHP_EOL; 
  	} 
  	# Sinon on donne l'URL de génération
    else 
    {
        $identity .= '<img class="rounded-circle" src="' .$pic. '" width="'.$size.'" height="'.$size.'" alt="' .$user. '">'. PHP_EOL;    
   	}			     

	$identity = $sessionTrip!='' ? $identity : '<svg class="rounded-circle" width="' .$size. '" height="' .$size. '" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="avatar"><rect width="100%" height="100%" fill="#868e96" fill-opacity="0.2"></rect></svg>';
	
	$welcomeBack = $sessionTrip!='' ? 
		'Welcome back ' .$user. ', ' .$lang['reply_this_topic']. ' <a class="btn btn-link" href="auth.php/logout" role="button">[' .$lang['logout']. ']</a>'
		 : 
		'<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">' .$lang['reply_this_topic']. '</button>';
	   	
	# Reply Form collapse	
    $out['content'] .= '	   
	<div id="replyform" class="accordion">
	  <div class="card">
	  
	    <div class="card-header" id="headingOne">
	    	<i class="mt-4 float-right fa fa-caret-down" aria-hidden="true"></i>
	        <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseReply" aria-expanded="true" aria-controls="collapseReply">
	        	' .$identity. '
				<span class="h6 ml-3">&nbsp;' . $welcomeBack. '</span>
	        </a>
	    </div>';
	    
	$sessionTrip!='' ? $out['content'] .= '
	    <div id="collapseReply" class="collapse" aria-labelledby="headingReply" data-parent="#replyform">
	      <div class="card-body">' .
	    	HTMLForm::form('add.php' . DS . 'reply' . DS . $_GET['topic'],'
			<div class="form-row">
			    <div class="form-group col-md-6">
			        ' .HTMLForm::password('trip', $sessionTrip). '
			    </div>
			    <div class="form-group col-md-6">
			        ' .HTMLForm::text('mail', $sessionMail, 'mail', 'form-control form-control-sm', 'not_required', 'mail_desc'). '			        
			    </div>
			</div>'. 
			HTMLForm::textarea('content', Util::isGETValidEntry('reply', 'q')? '[quote]' .$_GET['q']. '[/quote]' : '', 'form-control form-control-sm', '', 5, 'write_post').
			HTMLForm::tripCaptcha() ).
			HTMLForm::preview('content'). '
	      </div>
	    </div>':null;
	$out['content'] .= '    
	  </div>
	</div>';
?>