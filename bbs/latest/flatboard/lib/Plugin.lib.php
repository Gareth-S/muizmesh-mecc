<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

class Plugin
{
	// (string) directory name, just the name of plugin
	// Ex: core
	public $pluginName;
	// (string) Absoulute database filename and path
	// Ex: /www/flatboard/data/plugin/core.dat.php
	public $pluginDB;	
    /**
     * Protected constructor since this is a static class.
     *
     * @access  protected
     */
    protected function __construct()
    {
        // Nothing here
		// Directory name
		$this->pluginName = basename(dirname(get_class($this)));
		// Init empty database with default values
		$this->pluginDB = DATA_PLUGIN . $this->pluginName. '.dat.php';        
    }	
	
	public static function hook($name, $param = null)
	{
		global $plugins;
		$out = '';
		foreach($plugins as $plugin)
		{
			if(Plugin::isValidHook($name, $plugin))					
				$out .= Plugin::myHook($name, $plugin, $param);
		}
		return $out;
	}
	
	public static function isValidHook($hook, $plugin)
	{
		return function_exists($plugin. '_' .$hook);
	}
	
	public static function myHook($hook, $plugin, $param = null)
	{
		$hookFunc = $plugin. '_' .$hook;
		return $hookFunc($param);
	}
	/**
	 * Méthode qui affiche une notification
	 * $class = alert alert-danger, alert alert-success, alert alert-warning, alert alert-primary, taost
	 **/	
	public static function redirectMsg($title, $url, $destination, $class='', $autoredirect=TRUE)
	{
		global $lang; 
		$class = $class!='' ? ' class="'.$class.'"' : ' class="alert alert-success"';
		if($autoredirect) {
			return '<div id="alert"' .$class. '">
					   <div class="text-center">
						   <strong><i class="fa fa-spinner fa-pulse fa-lg fa-fw"></i> ' .$title. '</strong>
			               <p><a href="'.$url.'">' .$lang['redirect']. '&nbsp;' .$destination.'</a></p>
			               <script>setTimeout(function(){window.location.href = "'.$url.'"; },1000);</script>	 
					  </div>             	
		              <span class="close small"></span>
		            </div>';
		    exit; 			
		} else {
			return '<div id="alert"' .$class. '">
					   <div class="text-center">
						   <strong>' .$title. '</strong>
						   <p><a href="'.$url.'" class="btn btn-outline-primary btn-sm">' .$lang['redirect']. '&nbsp;' .$destination.'</a></p>	 
					  </div>             	
		              <span class="close small"></span>
		            </div>';
		    exit; 			
		} 		        
	}
}