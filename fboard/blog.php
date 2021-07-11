<?php

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'blog';
# ON AJOUTE TOUT CE DONT FLATBOARD A BESOIN
require_once __DIR__  . '/' .  'header.php';

	# Extrait la première image d'un post
	function catch_that_image($content) {
	  $out = '';
	  preg_match("/\[img\](.*?)\[\/img\]/is", $content, $img);
	  $img = str_replace('./', HTML_BASEPATH . DS, $img);
	  if($img)
	    $out .= '<img class="card-img-top" src="' .$img[1]. '" alt="picture">';
	  
	  return $out;
	}
	# Enlève  l'image d'un post
	function del_that_image($content) {
	  $out = '';
	  $out = preg_replace("/\[img\](.*?)\[\/img\]/is",'',$content,1); 	  
	  return $out;
	}	
	
	# PARAMÈTRES
	$cur 		= 	'blog'; 		 		# Indicateur de page
	$forumID 	= 	$config['blog_new']; 	# Your forum ID to list posts
	$nb 		= 	$config['ItemByPage'];	# Number posts to list (config by default)
	# RÉCUPÉRATION DES DONNÉES	
	$forumEntry = 	flatDB::readEntry('forum', $forumID);
	$topics = $forumEntry['topic'];	
	# PAGINATION
	$total = Paginate::countPage($topics, $nb);
	$p = Paginate::pid($total);
	# S'IL Y A DES SUJETS, ON LES LISTES
	if($topics)
	{
		$out['subtitle'] = 'BLOG: ' .$forumEntry['name'];
		$out['sub_prefix'] = entryLink::manageForum($forumID);
		
		# Template blog.tpl.php
		require THEME_DIR . $config['theme'] . DS . 'blog.tpl.php';	
									
	# SINON ON AFFICHE UNE ERREUR
	} else {
		$out['subtitle'] = 'ERROR';
		$out['sub_prefix'] = '';			
		$out['content'] .= '<p>' .$lang['none']. '</p>';
	}
# ON RETRANSMET TOUT ÇA DANS UN TEMPLATE
require PATH_ROOT . DS . 'footer.php';
?>