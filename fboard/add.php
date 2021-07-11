<?php

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'add';
require_once __DIR__  . '/' .  'header.php';
 
/**
 * AJOUTE UNE DISCUSSION
 **/
if(Util::isGETValidEntry('forum', 'topic'))
{
	$cur = 'addTopic';
	$getToptic = $_GET['topic'];
	$forumEntry = flatDB::readEntry('forum', $getToptic);
	$out['subtitle'] = Util::lang('add topic : %s', $forumEntry['name']);
	if(HTMLForm::checkBot() && HTMLForm::check('trip', 0, 20) && HTMLForm::check('title', 5, 80) && HTMLForm::check('content', 1, 400000) && CSRF::check($token) )
	{
	    $topicEntry['ip'] = User::getRealIpAddr();
	    $topicEntry['role'] = $_SESSION['role'];	
	    $topicEntry['tag'] = isset($_POST['tag']) ? $_POST['tag']. ' ' : '';	
		$topicEntry['title'] = HTMLForm::clean($_POST['title']);
		$topicEntry['mail'] = HTMLForm::clean($_POST['mail']);
		$topicEntry['content'] = HTMLForm::transNL(HTMLForm::clean($_POST['content']));
		$topicEntry['view'] = 0;
		$topicEntry['forum'] = $getToptic;
		$topicEntry['reply'] = array();
		$topicEntry['locked'] = false;
		$topic = flatDB::newEntry();
		$topicEntry['trip'] = HTMLForm::trip(HTMLForm::clean(Parser::translitIt($_POST['trip'])), $topic);
		flatDB::saveEntry('topic', $topic, $topicEntry);

		$forumEntry['topic'][$topic] = $topic;
		flatDB::saveEntry('forum', $topicEntry['forum'], $forumEntry);

		$_SESSION[$topic] = $topic;	
		$out['content'] .= Plugin::redirectMsg($lang['topic_added'], 'view.php' . DS . 'topic' . DS . $topic, $topicEntry['title']);
	}
	else
	{
		$tagsList = flatDB::readEntry('config', 'tags');
		$tagsOption = '';
		foreach($tagsList as $tag) {
		  	$tagsOption .= (!$tag['hidden_tag'] ? '<option>' .$tag['title']. '</option>' : '');
		} 		
		$out['content'] .= HTMLForm::form('add.php' . DS . 'topic' . DS . $getToptic, '
			<div class="form-row">
				' .($tagsList ? '
			    <div class="form-group col-md-4">	              			    
				    <label>
				    	<i class="fa fa-tags" aria-hidden="true"></i> ' .$lang['tags']. '
				    </label>
				    <select class="custom-select" name="tag">
		                <option disabled selected style="display:none;">' .$lang['no_tag']. '</option>             
						' .$tagsOption. '
		            </select>
			    </div>' : ''). '
			    
			    <div class="form-group col-md-8">
			        ' .HTMLForm::text('title', '', 'text'). '
			    </div>
			</div>
            
			<div class="form-row">
			    <div class="form-group col-md-6">	              			    
			        ' .HTMLForm::text('trip', '', 'text'). '
			    </div>
			    <div class="form-group col-md-6">
			        ' .HTMLForm::text('mail', '', 'mail', '', 'not_required', 'mail_desc'). '
			    </div>
			</div>'. 
			HTMLForm::textarea('content', '', '', '', 10, 'write_post').
			HTMLForm::submit('submit', '', 'fa fa-paper-plane'), '', 'post', true).
		HTMLForm::preview('content');
	}
}
/**
 * AJOUTE UNE RÉPONSE
 **/
else if(Util::isGETValidEntry('topic', 'reply'))
{
	$cur = 'addReply';
	$getReply = $_GET['reply'];
	$topicEntry = flatDB::readEntry('topic', $getReply);
	if($topicEntry['locked']) exit;
	# Page du formulaire
	$out['subtitle'] = Util::lang('add reply : %s', $topicEntry['title']);		
	if(HTMLForm::checkBot() && HTMLForm::check('trip', 0, 20) && HTMLForm::check('content', 1, 400000) && CSRF::check($token))
	{
	    $replyEntry['ip'] = User::getRealIpAddr();
	    $replyEntry['role'] = $_SESSION['role'];	
		$replyEntry['content'] = HTMLForm::transNL(HTMLForm::clean($_POST['content']));
		$replyEntry['topic'] = $getReply;
		$reply = flatDB::newEntry();
		$replyEntry['trip'] = HTMLForm::trip(HTMLForm::clean(Parser::translitIt($_POST['trip'])), $reply);
		$replyEntry['mail'] = HTMLForm::clean($_POST['mail']);
		flatDB::saveEntry('reply', $reply, $replyEntry);

		$topicEntry['reply'][$reply] = $reply;
		flatDB::saveEntry('topic', $replyEntry['topic'], $topicEntry);

		$_SESSION[$reply] = $reply;
		$out['content'] .= Plugin::redirectMsg($lang['reply_added'], 'view.php' . DS . 'topic' . DS . $_GET['reply']. DS. 'p' .DS. Util::onPage($reply, $topicEntry['reply']). '#' .$reply, $topicEntry['title']);
	} else {	
		$out['content'] .= HTMLForm::form('add.php' . DS . 'reply' . DS . $getReply,'
			<div class="form-row">
			    <div class="form-group col-md-6">
			        ' .HTMLForm::text('trip', '', 'text'). '
			    </div>
			    <div class="form-group col-md-6">
			        ' .HTMLForm::text('mail', '', 'mail', '', 'not_required', 'mail_desc'). '			        
			    </div>
			</div>'. 
			HTMLForm::textarea('content', Util::isGETValidEntry('reply', 'q')? '[quote]' .$_GET['q']. '[/quote]' : '', '', '', 10, 'write_post').
			HTMLForm::submit('reply', '', 'fa fa-comments-o', true)).
		HTMLForm::preview('content');
	}
}
/**
 * AJOUTE UN FORUM
 **/
else if(Util::isGET('forum') && User::isAdmin())
{
	$cur = 'addForum';
	$out['subtitle'] = Util::lang('add forum');
	if(HTMLForm::check('name', 5, 80) && HTMLForm::check('info', 1, 250) && HTMLForm::check('badge_color') && HTMLForm::check('font_icon') && CSRF::check($token) )
	{
		$forumEntry['name'] = HTMLForm::clean($_POST['name']);
		$forumEntry['info'] = HTMLForm::transNL(Parser::htmlDecode($_POST['info']));
		$forumEntry['font_icon'] = HTMLForm::clean($_POST['font_icon']);
		$forumEntry['badge_color'] = HTMLForm::clean($_POST['badge_color']);
		$forumEntry['topic'] = array();
		$forumEntry['pinnedTopic'] = array();
		$forum = Parser::safeString($_POST['name']);
		flatDB::saveEntry('forum', $forum, $forumEntry);

		$forums = flatDB::readEntry('config', 'forumOrder');
		$forums[$forum] = $forum;
		
		flatDB::saveEntry('config', 'forumOrder', $forums);
		$out['content'] .= Plugin::redirectMsg($lang['forum_added'], 'index.php' . DS . 'forum', $lang['forum']);
	}
	else
	{
		$out['content'] .= HTMLForm::form('add.php' . DS . 'forum',
			HTMLForm::text('name', '', 'text').
			HTMLForm::textarea('info', '', '', '', 4). '
			<div class="form-row">
				<div class="form-group col-md-8">
			        <div class="icon-picker" data-pickerid="fa" data-iconsets=\'{"fa":"' .$lang['pick_font']. '"}\'>
			        ' .HTMLForm::text('font_icon', 'fa fa-folder', 'hidden'). '
			        </div>
			    </div>
			    <div class="form-group col-md-4">
			        ' .HTMLForm::text('badge_color', '', 'text', 'color', 'style_placeholder', 'badge_color_desc'). '			        
			    </div>
			</div>'.			
			HTMLForm::simple_submit('add', '', 'fa fa-plus'));
	}
}
/**
 * AJOUTE UN MODÉRATEUR
 **/
else if(Util::isGET('worker') && User::isAdmin())
{
	$cur = 'addWorker';
	$out['subtitle'] = Util::lang('add worker');
	if(!empty($_POST) && HTMLForm::check('password') && CSRF::check($token) )
	{
		$pass = HTMLForm::hide($_POST['password']);
		$config['worker'][$pass] = User::simple_crypt($_POST['password'],'e');
		flatDB::saveEntry('config', 'config', $config);
		$out['content'] .= Plugin::redirectMsg($lang['modo_added'], 'config.php' . DS . 'worker', $lang['worker']);
	}
	else
	{
		$out['content'] .= HTMLForm::form('add.php' . DS . 'worker',
			HTMLForm::text('password').
			HTMLForm::simple_submit('add'));
	}
}
/**
 * SIGNALE UNE DISCUSSION/RÉPONSE
 **/
else if(Util::isGET('report'))
{
	$cur = 'addReport';
	$report = $_GET['report'];
	if(flatDB::isValidEntry('topic', $report)) {
		$topicEntry = flatDB::readEntry('topic', $report);
		$title		= $topicEntry['title'];
		$link		= HTML_BASEPATH . DS . 'view.php' . DS . 'topic' . DS . $report;
	} else {
		$topicEntry = flatDB::readEntry('reply', $report);
		$title		= $topicEntry['topic'];
		$link		= HTML_BASEPATH . DS . 'view.php' . DS . 'topic' . DS . $title;
	}		
		
	$out['subtitle'] = Util::lang('report : %s', $title);
		
	if(HTMLForm::check('mail') && HTMLForm::check('description', 1, 250) && CSRF::check($token) )
	{		
		    $mail = HTMLForm::clean($_POST['mail']);
		    $description = '<h3>'.$topicEntry['title'].'</h3>';
		    $description .= '<p>Topic ID: '.$report.' by '.$topicEntry['trip'].'</p>';
			$description .= '<p>Report raison: ' .HTMLForm::transNL(HTMLForm::clean($_POST['description'])).'</p>';
			$description .= '<p><a href="' .$link.'">' .$lang['click_to_view_post']. '</a></p>';
			$subject = $out['subtitle'];
			$destinataire = $config['mail'];
			
			$send_mail = Util::sendMail($config['title'], $mail, $destinataire, $subject, $description, 'html');				
			if ($send_mail)
				$out['content'] .=Plugin::redirectMsg($lang['email_sent'], 'index.php', $lang['new'], 'alert alert-success');
			else
				$out['content'] .=Plugin::redirectMsg($lang['email_nosent'], 'index.php', $lang['new'], 'alert alert-danger');
	}
	else
	{
		$out['content'] .= HTMLForm::form('add.php' . DS . 'report' . DS . $_GET['report'],
				HTMLForm::text('mail', '', 'email', '', 'your_email', 'report_desc').
				HTMLForm::textarea('description', '', '', '', 4).
				HTMLForm::simple_submit('report','btn btn-dark btn-lg','fa fa-bell',true));
	}
}
/**
 * AJOUTE UNE IP À BANIR http//kb.site5.com/security/how-to-automatically-block-someone-using-a-php-script/
 * https//eksith.wordpress.com/2010/12/26/blocking-ips-from-file-list-php/
 **/
else if(Util::isGET('ban') && User::isAdmin())
{
	$cur = 'addBan';
    $getBan = $_GET['ban'];
	$out['subtitle'] = Util::lang('ban_user : %s', $getBan);
	$msg = '';
	if(HTMLForm::check('ban') && CSRF::check($token) )
	{
	      $user_ban = HTMLForm::clean($_POST['ban']);
          if ($user_ban != false && $user_ban != -1) {
               # Si l'IP est valide
               $webpage = $_SERVER['SCRIPT_NAME'];
			   $timestamp = date('d/m/Y h:i:s');
			   $browser = $_SERVER['HTTP_USER_AGENT'];
               if (!User::is_ban(long2ip((int) $user_ban))) {
                    $fichier = fopen(BAN_FILE, 'a') or die("can't open file"); //On ouvre en mode 'a'
                    #fwrite($fichier, '['.$timestamp.']: ' .$user_ban. ' '.$browser. "\n"); //On ajoute la ligne avec l'IP
                    fwrite($fichier, $user_ban . "\n"); //On ajoute la ligne avec l'IP
                    fclose($fichier); //On ferme le fichier    
                    $msg = $lang['ban_ok'];
               }
               else
                    $msg = $lang['ban_fail'];
          }
          $out['content'] .= Plugin::redirectMsg($msg, 'config.php' . DS . 'ban', $lang['ban_list']);
	}
	else
	{
		$out['content'] .= HTMLForm::form('add.php' . DS . 'ban' . DS . $getBan,
		    HTMLForm::text('ban', $getBan).
			HTMLForm::simple_submit());
	}

}
/**
 * PAGE 404
 **/
else
{
	Util::redirect('index.php' . DS . '404');
}

require PATH_ROOT . DS . 'footer.php';
?>