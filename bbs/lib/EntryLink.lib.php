<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
class entryLink
{
    /**
     * Protected constructor since this is a static class.
     *
     * @access  protected
     */
    protected function __construct()
    {
        // Nothing here
    }	
	# Généralisation du lien avec paramètres
	# $direction: tooltip-right, tooltip-bottom or tooltip-left
	public static function createLink($link, $lang_hint, $icon, $class='', $space='', $direction='')
	{
	    global $lang;
	    $space = $space!='' ? $space : '&nbsp;';
	    $direction = $direction!='' ? $direction : 'top';
	    $class = $class!='' ? $class : 'primary';
		return '<a href="' .$link. '" class="badge badge-' .$class. '" data-toggle="tooltip" data-placement="' .$direction. '" title="' .$lang[$lang_hint]. '"><i class="' .$icon. '"></i></a>' .$space;
	}
	# ÉDITION/SUPPRESSION D’UNE DISCUSSSION
	public static function manageTopic($topic)
	{		
		return (User::isWorker() || User::isAuthor($topic,'topic')? 
			entryLink::createLink('edit.php' . DS . 'topic' . DS . $topic, 'edit', 'fa fa-pencil-square-o').
			entryLink::createLink('delete.php' . DS . 'topic' . DS . $topic, 'delete', 'fa fa-trash-o', 'danger') : '').
			Plugin::hook('manageTopic', $topic);
	}
	# ÉDITION/SUPPRESSION D’UNE RÉPONSE	
	public static function manageReply($reply)
	{
		return (User::isWorker() || User::isAuthor($reply,'reply') ? 
			entryLink::createLink('edit.php' . DS . 'reply' . DS . $reply, 'edit', 'fa fa-pencil-square-o').
			entryLink::createLink('delete.php' . DS . 'reply' . DS . $reply, 'delete', 'fa fa-trash-o', 'danger') : '').
			Plugin::hook('manageReply', $reply);
	}
	# ÉDITION/SUPPRESSION D’UN FORUM
	public static function manageForum($forum)
	{
		return (User::isAdmin()? 
			entryLink::createLink('edit.php' . DS . 'forum' . DS . $forum, 'edit', 'fa fa-pencil-square-o').
			entryLink::createLink('delete.php' . DS . 'forum' . DS . $forum, 'delete', 'fa fa-trash-o', 'danger') : '').
			Plugin::hook('manageForum', $forum);
	}
	# ÉDITION D’UN PLUGIN
	public static function managePlugin($plugin)
	{
		return (User::isAdmin()? 
			entryLink::createLink('config.php' . DS . 'plugin' . DS . $plugin, 'edit', 'fa fa-pencil-square-o') : '').
			Plugin::hook('managePlugin', $plugin);
	}	
	# AJOUT/SUPPRESSION D’UNE IP
	public static function userBan($user)
	{
		return (User::isAdmin()? 
			entryLink::createLink('add.php' . DS . 'ban' . DS . $user, 'ban_user', 'fa fa-ban').
			entryLink::createLink('delete.php' . DS . 'ban' . DS . $user, 'unban_user', 'fa fa-circle-o', 'danger') : '').
			Plugin::hook('userBan', $user);
	}
	# SUPPRESSION D’UN TAG
	public static function manageTag($tag)
	{
		return (User::isAdmin()? 
			entryLink::createLink('edit.php' . DS . 'tag' . DS . $tag, 'edit', 'fa fa-pencil-square-o').
			entryLink::createLink('delete.php' . DS . 'tag' . DS . $tag, 'delete', 'fa fa-trash-o', 'danger') : '');
	}	
	# ÉDITION DU MOT DE PASSE D'UN MODERATEUR
	public static function manageWorker($password)
	{
		global $config;
		return ($_SESSION['worker'] === isset($config['worker'][$password]) ? 
			entryLink::createLink('edit.php' . DS . 'worker' . DS . $password, 'edit', 'fa fa-pencil-square-o') : '').
			Plugin::hook('manageWorker', $password);
	}	
}