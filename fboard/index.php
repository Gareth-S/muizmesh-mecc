<?php

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'index';
require_once __DIR__  . '/' .  'header.php';

/**
 * LISTE DES FORUMS
 **/
if(Util::isGET('forum'))
{
    $cur = 'forum'; # Indicateur de page
	$out['subtitle'] = $lang['forum'];
	$out['sub_prefix'] = User::isAdmin()? '<a href="add.php' . DS . 'forum" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="' .$lang['add_forum']. '"><i class="fa fa-plus"></i></a> ' : '';
	$forums = flatDB::readEntry('config', 'forumOrder');
	$options = '';
	if($forums)
	{
		if(User::isAdmin() && !empty($_POST) && CSRF::check($token))
		{
			foreach($forums as $forum)
			{
				$order[$forum] = Util::isPOST($forum)? $_POST[$forum] : '0';
			}
			asort($order);
			$order = array_keys($order);
			$forums = array_combine($order, $order);
			flatDB::saveEntry('config', 'forumOrder', $forums);
		}

		$num = range(1, count($forums));
		$options = array_combine($num, $num);

		$controlStr = '';
		# Template forum.tpl.php
		require THEME_DIR . $config['theme'] . DS . 'forum.tpl.php';		
	}
	else
	{
		$out['content'] .= $lang['start'];
	}
}
/*
** AFFICHE LA PAGE D’ERREUR 404
*/
else if(Util::isGET('404'))
{
    $cur = 'error'; # Indicateur de page
	$out['subtitle'] = 'HTTP 404';
	$out['content'] .= '<p>' .$lang['notFound']. '</p>';
}
/**
 * PAGE D’ACCUEIL/NOUVEAUX MESSAGES
 **/
else
{
	/*
	** Homepage
	*/
	if($config['homepage'] !== 'index.php')
	{
		Util::redirect($config['homepage']);
	} 
	else 
	{
	    $cur = 'home'; # Indicateur de page
		$out['subtitle'] = $lang['new'];
		$out['sub_prefix'] = '';
		$config = flatDB::readEntry('config', 'config');
	
		$mixes = array_merge(flatDB::listEntry('topic'), flatDB::listEntry('reply'));
		$nb = $config['ItemByPage'];
		$total = Paginate::countPage($mixes, $nb);
		$p = Paginate::pid($total);
			
		if($mixes)
		{
			rsort($mixes);
			$topic = $mixes[0];
			if(!flatDB::isValidEntry('topic', $topic))
			{
				$replyEntry = flatDB::readEntry('reply', $topic);
				$topic = $replyEntry['topic'];
			}
			$topicEntry = flatDB::readEntry('topic', $topic);
			$count = count($topicEntry['reply'])+1;
			$width = $count <= 4 ? 12/$count : 3;
			$tag = (isset($topicEntry['tag']) ? $topicEntry['tag']. ' ' : '');
			# Template lastposts.tpl.php
			require THEME_DIR . $config['theme'] . DS . 'lastposts.tpl.php';								
		}
		else
		{
			$out['content'] .= $lang['start'];
		}		
	}
}

require PATH_ROOT . DS . 'footer.php';

?>