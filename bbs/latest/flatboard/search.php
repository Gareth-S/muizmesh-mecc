<?php

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'search';
require_once __DIR__  . '/' .  'header.php';

$cur = 'search'; # Indicateur de page
$out['subtitle'] = $lang['search'];

	function getQVar($key){
	     return isset($_GET[$key]) ? HTMLForm::clean($_GET[$key]) : (isset($_POST[$key]) ? HTMLForm::clean($_POST[$key]) : null); 
	}
	
	if(HTMLForm::sessionTrip() && HTMLForm::check('topic') && CSRF::check($token) )
	{
		$wordSearch = getQVar('topic');
		$foundTopics = array();
		foreach(flatDB::listEntry('topic') as $topic)
		{
			# Chargement des sujets et des forums
			$topicEntry = flatDB::readEntry('topic', $topic);
			$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
			$tag = isset($topicEntry['tag']) ? $topicEntry['tag'] : '';
			# La recherche se fait sur les : titres, contenus, auteurs et mots clés.
			if(mb_stripos($topicEntry['title'], $wordSearch) !== false || mb_stripos($topicEntry['content'], $wordSearch) !== false || mb_stripos($topicEntry['trip'], $wordSearch) !== false || mb_stripos($tag, $wordSearch) !== false)
			{
				$foundTopics[$topic] = $topicEntry['title'];
			}
		}
		$out['content'] .= '
		<div class="row">
		    <div class="col">';
			if($foundTopics)
			{
				$out['content'] .= '<h6>' .$lang['search_term_found']. '</h6>
				<div class="divider"></div>
		    	<ol>';				
				foreach($foundTopics as $topic => $title)
				{
					$out['content'] .= '
					<li>' .entryLink::manageTopic($topic). '
						<a href="view.php' . DS . 'topic' . DS . $topic. '">
							' .Parser::title($title). '
						</a>
					</li>';
				}
				$out['content'] .= '</ol>';
			}
			else
			{
				$out['content'] .= '<div class="alert alert-primary" role="alert"><h5>' .$lang['none']. '</h5></div>';
			}
			$out['content'] .= '
			</div>
		</div>';
	}
		# Liste des tags
		$tagsList = flatDB::readEntry('config', 'tags');
		$tagsOption = '';
		foreach($tagsList as $tag) {
		  	$tagsOption .= (!$tag['hidden_tag'] ? '<button type="button" class="btn btn-outline-primary btn-sm m-1" onclick="document.forms[\'form\'][\'topic\'].value += \'' .$tag['title']. '\'">' .$tag['title']. '</button>' : '');
		} 
		# Fix pour récupérer le hash s'il y a
		$url = HTMLForm::clean(isset($_REQUEST['topic']) ? $_REQUEST['topic'] : null);

		# Template search.tpl.php
		require THEME_DIR . $config['theme'] . DS . 'search.tpl.php';
		require PATH_ROOT . DS . 'footer.php';
?>