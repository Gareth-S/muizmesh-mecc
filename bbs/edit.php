<?php

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'edit';
require_once __DIR__  . '/' .  'header.php';
 
/**
 * ÉDITION D’UNE DISCUSSION
 **/
if(Util::isGETValidEntry('topic', 'topic') && (User::isWorker() || User::isAuthor($_GET['topic'],'topic')))
{
	$cur = 'editTopic';
	$topicEntry = flatDB::readEntry('topic', $_GET['topic']);
	$out['subtitle'] = Util::lang('edit topic : %s', $topicEntry['title']);

	if(HTMLForm::sessionTrip() && HTMLForm::check('title', 5, 80) && HTMLForm::check('content', 1, 400000) && CSRF::check($token) )
	{
		$topicEntry['tag'] 	      = isset($_POST['tag']) ? $_POST['tag']. ' ' : '';
		$topicEntry['title']      = HTMLForm::clean($_POST['title']);
		$topicEntry['content']    = HTMLForm::transNL(HTMLForm::clean($_POST['content']));
		$topicEntry['lastedit']   = date('Y-m-d H:i:s');
		$topicEntry['authoredit'] = HTMLForm::trip(HTMLForm::clean(Parser::translitIt($sessionTrip)), $_GET['topic']);
		if(User::isWorker() &&
			Util::isPOST('locked') && ($_POST['locked'] === 'yes' || $_POST['locked'] === 'no') &&
			Util::isPOST('pinned') && ($_POST['pinned'] === 'yes' || $_POST['pinned'] === 'no') &&
			Util::isPOST('forum') && flatDB::isValidEntry('forum', $_POST['forum']))
		{
			$topicEntry['locked'] = $_POST['locked'] === 'yes';

			if($topicEntry['forum'] !== $_POST['forum'])
			{
				$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
				unset($forumEntry['topic'][$_GET['topic']]);
				unset($forumEntry['pinnedTopic'][$_GET['topic']]);
				flatDB::saveEntry('forum', $topicEntry['forum'], $forumEntry);

				$topicEntry['forum'] = $_POST['forum'];
				$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
				$forumEntry['topic'][$_GET['topic']] = $_GET['topic'];
				flatDB::saveEntry('forum', $topicEntry['forum'], $forumEntry);
			}

			$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
			if($_POST['pinned'] === 'yes')
			{
				$forumEntry['pinnedTopic'][$_GET['topic']] = $_GET['topic'];
			}
			else
			{
				unset($forumEntry['pinnedTopic'][$_GET['topic']]);
			}
			flatDB::saveEntry('forum', $topicEntry['forum'], $forumEntry);
		}
		flatDB::saveEntry('topic', $_GET['topic'], $topicEntry);
		$out['content'] .= Plugin::redirectMsg($lang['topic_edited'], 'view.php' . DS . 'topic' . DS . $_GET['topic'], $topicEntry['title']);
	}
	else
	{
		# Liste des tags			
		$tagsList = flatDB::readEntry('config', 'tags');
		$tagsOption = '';
		foreach($tagsList as $tag) {
		  $tagsOption .= (!$tag['hidden_tag'] ? '<option>' .$tag['title']. '</option>' : '');
		} 		
		# Liste des forums ordonnés
		$forums = flatDB::readEntry('config', 'forumOrder');
		asort($forums);
		foreach(array_values($forums) as $key => $forum)
		{
			$forumEntry = flatDB::readEntry('forum', $forum);
			$forumOptions[$forum] = $forumEntry['name'];
		}		
		# Affichage formulaire
		$out['content'] .= HTMLForm::form('edit.php' . DS . 'topic' . DS . $_GET['topic'], '
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
			        ' .HTMLForm::text('title', $topicEntry['title'], 'text'). '
			    </div>
			</div>' .
			HTMLForm::textarea('content', $topicEntry['content']).
			(User::isWorker()? '
			<div class="form-row">
			   	<div class="form-group col-md-2">
			        ' .HTMLForm::select('locked', array('yes' => $lang['yes'], 'no' => $lang['no']), $topicEntry['locked']? 'yes' : 'no'). '
			    </div>
			    <div class="form-group col-md-2">
			        ' .HTMLForm::select('pinned', array('yes' => $lang['yes'], 'no' => $lang['no']), isset($forumEntry['pinnedTopic'][$_GET['topic']])? 'yes' : 'no'). '
			    </div>
			    <div class="form-group col-md-4">
			        ' .HTMLForm::select('forum', $forumOptions, $forumEntry['name']) : ''). '
			    </div>
			</div>'. 			
			HTMLForm::tripCaptcha('submit', 'fa fa-edit') ).
		HTMLForm::preview('content');
	}
}
/**
 * ÉDITION D’UNE RÉPONSE
 **/
else if(Util::isGETValidEntry('reply', 'reply') && (User::isWorker() || User::isAuthor($_GET['reply'],'reply')))
{
	$cur = 'editReply';
	$replyEntry = flatDB::readEntry('reply', $_GET['reply']);
	$out['subtitle'] = Util::lang('edit reply');
		
	if(HTMLForm::sessionTrip() && HTMLForm::check('content', 1, 400000) && CSRF::check($token) )
	{
		$replyEntry['mail'] 	  = HTMLForm::clean($_POST['mail']);
		$replyEntry['content'] 	  = HTMLForm::transNL(HTMLForm::clean($_POST['content']));
		$replyEntry['lastedit']   = date('Y-m-d H:i:s');
		$replyEntry['authoredit'] = HTMLForm::trip(HTMLForm::clean(Parser::translitIt($sessionTrip)), $_GET['reply']);
		flatDB::saveEntry('reply', $_GET['reply'], $replyEntry);
		$topicEntry = flatDB::readEntry('topic', $replyEntry['topic']);
		$out['content'] .= Plugin::redirectMsg($lang['reply_edited'], 'view.php' . DS . 'topic' . DS . $replyEntry['topic']. DS. 'p'. DS. Util::onPage($_GET['reply'], $topicEntry['reply']). '#' .$_GET['reply'], $topicEntry['title']);
	}
	else
	{		
		$out['content'] .= HTMLForm::form('edit.php' . DS . 'reply' . DS . $_GET['reply'],
			(User::isWorker()? 
			HTMLForm::text('mail', isset($replyEntry['mail']) ? $replyEntry['mail'] : '', 'mail') : '').			
			HTMLForm::textarea('content', $replyEntry['content']).
			HTMLForm::tripCaptcha('submit', 'fa fa-edit') ).
		HTMLForm::preview('content');
	}
}
/**
 * ÉDITION D’UN FORUM
 **/
else if(Util::isGETValidEntry('forum', 'forum') && User::isAdmin())
{
	$cur = 'editForum';
	$forumEntry = flatDB::readEntry('forum', $_GET['forum']);
	$out['subtitle'] = Util::lang('edit forum : %s', $forumEntry['name']);			
	if(HTMLForm::check('info', 1, 250) && HTMLForm::check('badge_color') && HTMLForm::check('font_icon') && CSRF::check($token) )
	{
		$forumEntry['info'] 	   	 = HTMLForm::transNL(Parser::htmlDecode($_POST['info']));
		$forumEntry['font_icon']   	 = HTMLForm::clean($_POST['font_icon']);
		$forumEntry['badge_color'] 	 = HTMLForm::clean($_POST['badge_color']);
		$forumEntry['private_forum'] = Util::isPOST('private_forum') ? $_POST['private_forum'] : '';
		flatDB::saveEntry('forum', $_GET['forum'], $forumEntry);
		$out['content'] .= Plugin::redirectMsg($lang['forum_edited'], 'index.php' . DS . 'forum', $lang['forum']);
	}
	else
	{
		$out['content'] .= HTMLForm::form('edit.php' . DS . 'forum' . DS . $_GET['forum'],
			'<div class="form-row">
				<div class="col">
					' .HTMLForm::text('name', $forumEntry['name'], 'text', '', '', '', true). '
				</div>
				<div class="col mt-4">
					' .HTMLForm::checkBox('private_forum', isset($forumEntry['private_forum'])? $forumEntry['private_forum'] : '','private_forum_desc'). '
				</div>
			</div>'.		
			HTMLForm::textarea('info', $forumEntry['info'], '', '', 4). '
			<div class="form-row">
			    <div class="form-group col-8">
			    	<div class="icon-picker" data-pickerid="fa" data-iconsets=\'{"fa":"' .$lang['pick_font']. '"}\' style="color: ' .$forumEntry['badge_color']. '">
			        ' .HTMLForm::text('font_icon', $forumEntry['font_icon'], 'hidden'). '
			        </div>
			    </div>
			    <div class="form-group col-4">
			        ' .HTMLForm::text('badge_color', $forumEntry['badge_color'], 'text', 'color', 'style_placeholder', 'badge_color_desc'). '
			    </div>
			</div>'.	
			HTMLForm::simple_submit());
	}
}
/**
 * ÉDITION D’UN TAG
 **/
else if(Util::isGET('tag') && User::isAdmin())
{
	$cur = 'editTag';
  	$edit = $_GET['tag']; 	
  	$itemEntry = flatDB::readEntry('config', 'tags', $edit);
	$out['subtitle'] = Util::lang('edit : %s', $edit);    	
				   		
	if(!empty($_POST) && CSRF::check($token) )
	{
		$itemEntry[$edit]['title'] = HTMLForm::clean($_POST['title']);
		$itemEntry[$edit]['replace'] = HTMLForm::clean($_POST['replace']);
		$itemEntry[$edit]['hidden_tag'] = isset($_POST['hidden_tag'])? $_POST['hidden_tag'] : '';
		flatDB::saveEntry('config', 'tags', $itemEntry);
		
		$out['content'] .= Plugin::redirectMsg($lang['data_save'], 'config.php' . DS . 'tags', $lang['tags'], 'alert alert-success');
	}
	else
	{
		$out['content'] .= HTMLForm::form('edit.php' . DS . 'tag' . DS . $edit, '
		<div class="columns">
		    <div class="column col-5">'.
		    	HTMLForm::text('title', $itemEntry[$edit]['title']).
		    '</div>
		    <div class="column col-7"><br /><br />'.
		    	HTMLForm::checkBox('hidden_tag', $itemEntry[$edit]['hidden_tag']). 
		    '</div>
		</div>'.
		HTMLForm::textarea('replace', $itemEntry[$edit]['replace'], '', '', 2).
		HTMLForm::simple_submit('submit', '', 'fa fa-tags').
		'<a href="config.php' . DS . 'tags" class="btn btn-primary btn-sm" role="button"><i class="fa fa-sitemap"></i> ' .$lang['manage_tags']. '</a>'
		);					
	}
}
else
{
	Util::redirect('index.php' . DS . '404');
}

require PATH_ROOT . DS . 'footer.php';

?>
