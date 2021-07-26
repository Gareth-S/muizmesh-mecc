<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
define('__THEMEDIR__', ossn_route()->themes . 'Flexi/');

ossn_register_callback('ossn', 'init', 'ossn_goblue_theme_init');

function ossn_goblue_theme_init(){	
	//add bootstrap
	ossn_new_css('bootstrap.min', 'css/bootstrap/bootstrap.min.css');
	//ossn_new_js('bootstrap.min', 'js/bootstrap/bootstrap.min.js');
	
	ossn_new_css('ossn.default', 'css/core/default');
	ossn_new_css('ossn.admin.default', 'css/core/administrator');

	//load bootstrap
	ossn_load_css('bootstrap.min', 'admin');
	ossn_load_css('bootstrap.min');

	ossn_load_css('ossn.default');
	ossn_load_css('ossn.admin.default', 'admin');
	
	ossn_extend_view('ossn/admin/head', 'ossn_goblue_admin_head');
	ossn_extend_view('ossn/site/head', 'ossn_goblue_head');
    ossn_extend_view('js/opensource.socialnetwork', 'js/goblue');	
	
	//Sanitizing of latest friends widget #6
	if(ossn_isLoggedin()){
		ossn_add_hook('newsfeed', 'sidebar:right', 'flexi_latest_members_widget');
		ossn_add_hook('newsfeed', 'sidebar:right', 'flexi_latest_friends_widget');	
	}
}
function flexi_latest_members_widget($hook, $type, $return){
	$widget_content = ossn_plugin_view('flexi/members_widget');
	$widget = ossn_plugin_view('widget/view', array(
					'title' => ossn_print('flexi:latest:members'),
					'contents' => $widget_content
	));	
	$return[] = $widget;
	return $return;
}

function flexi_latest_friends_widget($hook, $type, $return){
	$widget_content = ossn_plugin_view('flexi/friends_widget');
	$widget = ossn_plugin_view('widget/view', array(
					'title' => ossn_print('flexi:latest:friends'),
					'contents' => $widget_content
	));	
	$return[] = $widget;
	return $return;
}

function ossn_goblue_head(){
	$head	 = array();
	
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));	
	return implode('', $head);
}
function ossn_goblue_admin_head(){
	$head	 = array();	
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  '//fonts.googleapis.com/css?family=Roboto+Slab:300,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));
	return implode('', $head);
}
