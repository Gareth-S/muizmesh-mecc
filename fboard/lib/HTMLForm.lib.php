<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

class HTMLForm
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
    /**
     * Méthode qui convertie du html en texte brut
     * HTMLForm::clean('test');
     *
     * @param string $text String
     * @return string
     */    	
	public static function clean($text)
	{		
		return htmlspecialchars(trim($text), ENT_QUOTES, CHARSET);
	}	
	   
	public static function transNL($text)
	{
		return preg_replace('/\n{3,}/', "\n\n", str_replace(array("\r\n", "\r"), "\n", $text));
	}
	
	public static function hide($text)
	{
		return md5($text.sha1($text));
	}
	
	public static function trip($name, $id)
	{
		global $config;
		if ($name === '')
		{
			return substr($id, -8);
		}
		else
		{
			$sign  = '@';
			$parts = explode($sign, $name, 2);
			$first = @$parts[0];
			$last  = @$parts[1];
			$salt  = sha1($config['salt'].md5(trim($last)));
			$trip  = str_replace(array('http://','https://'), '', $first);
			$trip  = preg_replace('/[^A-Za-z0-9\-]/', '', $first);
			return  $trip.(isset($last)? $sign . substr($salt, -8) : '');
		}
	}
	
	public static function err($eid, $msg)
	{
		if (isset($_SESSION[$eid]))
		{
			unset($_SESSION[$eid]);
			return '&nbsp;<span style="color:red; font-weight:500">' .$msg. '</span>';
		}
		return '';
	}
		
	public static function password($name, $class='')
	{
		global $lang;
		
		$class = $class!='' ? ' class="'.$class.'"' : ' class="form-control"';
		return '<div class="form-group pass_show">
					<label for="' .$name. '" class="sr-only">' .$lang[$name]. '</label>
					<input type="password" name="' .$name. '" placeholder="' .$lang[$name]. '"' .$class. ' required autofocus>
				</div>
				<div class="form-group pass_show">		
			      <label for="' .$name. 'Confirm" class="sr-only">' .$lang['confirm_password']. '</label>
			      <input type="password" name="' .$name. 'Confirm" placeholder="' .$lang['confirm_password']. '"' .$class. '>
			    </div>		      
				<small class="form-text text-muted">
				' .HTMLForm::err($name. 'ErrNotMatch', $lang['errNotMatch']). HTMLForm::err('incorrect_password', $lang['incorrect_password']). '
				</small>';
	}
	/**
	 * Méthode qui affiche un zone de saisie
	 *
	 * @param	name		nom de la zone de saisie
	 * @param	value		valeur contenue dans la zone de saisie
	 * @param	type		type du champ (text, password, hidden)
	 * @param	class		class css à utiliser pour formater l'affichage
	 * @param	placeholder valeur du placeholder du champ (html5)
	 * @param	desc 		valeur de la description
	 * @param   disabled	désactivation d'un champ
	 * @return	stdout
	 **/	
	public static function text($name, $default='', $type='text', $class='', $placeholder='', $desc='', $disabled=false)
	{
		global $lang;
		
		$value = Util::isPOST($name) ? HTMLForm::clean($_POST[$name]) : $default;
		$class = $class!='' ? ' class="form-control '.$class.'"' : ' class="form-control"';
		$placeholder = $placeholder!='' ? ' placeholder="' .$lang[$placeholder]. '"' : '';
		$disabled = $disabled===true ? ' disabled' : '';
		$desc = $desc!='' ? '<small class="form-text text-muted">' .$lang[$desc]. '</small>' : '';
		
		return '  <div class="form-group">
				    <label for="' .$name. '">' .$lang[$name]. ' 
				    	' . HTMLForm::err($name. 'ErrLen', $lang['errLen']) . HTMLForm::err($name. 'ErrNb', $lang['errNb']). 
				    		HTMLForm::err($name. 'ErrContentFilter', $lang['ErrContentFilter']). '
				    </label>
				    <input type="' .$type. '" id="' .$name. '" name="' .$name. '" value="' .$value. '"' .$class .$placeholder .$disabled. '>
				    ' .$desc. '
				  </div>';
	}
	
	public static function textarea($name, $default='', $class='', $desc='', $rows='', $placeholder='', $disabled=false)
	{
		global $lang;
		$value = Util::isPOST($name)? HTMLForm::transNL(HTMLForm::clean($_POST[$name])) : $default;
		$class = $class!='' ? ' class="form-control '.$class.'"' : ' class="form-control"';
		$desc = $desc!='' ? '<small class="form-text text-muted">' .$lang[$desc]. '</small>' : '';
		$rows = $rows!='' ? $rows : 10;
		$placeholder = $placeholder!='' ? ' placeholder="' .$lang[$placeholder]. '"' : '';
		$disabled = $disabled===true ? ' disabled' : '';
		return '<div class="form-group">
				    <label for="' .$name. '">' .$lang[$name]. '</label>
					' .Plugin::hook('editor'). '
					<textarea id="' .$name. '" name="' .$name. '" rows="' .$rows. '"' .$class .$placeholder .$disabled. '>' .$value. '</textarea>
					' .$desc. HTMLForm::err($name. 'ErrLen', $lang['errLen']) . HTMLForm::err($name. 'ErrContentFilter', $lang['ErrContentFilter']). '
				</div>';
	}

	public static function submit($button='submit', $class='', $icon='', $cancel=false)
	{	
		global $lang;
		$out = '';
		$class = $class!='' ? ' class="'.$class.'"' : ' class="btn btn-primary btn-lg"';
		$icon = $icon!='' ? '<i class="' .$icon. '"></i>&nbsp;' : '';
		$cancel = $cancel==true ? '&nbsp;<button type="reset" class="btn btn-secondary btn-lg" onclick="$(\'#form\').remove();"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;' .$lang['cancel']. '</button>' : '';	
				
		if(CAPTCHA) {
		    $num1 = mt_rand(1,20);
		    $num2 = mt_rand(1,20);
		    if( mt_rand(0,1) === 1 ) {
		            $math = "$num1 + $num2";
		            $_SESSION['captcha'] = (string) ($num1 + $num2);
		    } else {
		            $math = "$num1 - $num2";
		            $_SESSION['captcha'] = (string) ($num1 - $num2);
		    }			
			$out .= '
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">
				    	' .$math. ' = ?
				    </span>
				  </div>
				  <label for="captcha" class="sr-only">' .$lang['captcha']. '</label>
				  <input name="captcha" type="text" class="form-control" placeholder="' .$lang['math_result']. '">				  
				</div>';						
		} else {
			$out .= '
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">
				    	<img id="cap-img" src="' .HTML_BASEPATH . DS . 'lib' . DS . 'Captcha.lib.php?rand=' .rand(). '" alt="' .$lang['captcha']. '" />
				    </span>
				    <a class="input-group-text" onClick="reload();" data-toggle="tooltip" data-placement="top" title="' .$lang['r_captcha']. '">
				    	<i class="fa fa-refresh" aria-hidden="true"></i>
				    </a>
				  </div>
				  <label for="captcha" class="sr-only">' .$lang['captcha']. '</label>
				  <input name="captcha" type="text" class="form-control" placeholder="' .$lang['enter_code']. '">				  
				</div>';				
		}			
				
		return  $out .HTMLForm::err('ErrToken', $lang['invalid_token']) . HTMLForm::err('ErrBot', $lang['errBot']). '
				<button' .$class. ' type="submit">' . $icon .$lang[$button]. '</button>' .
				$cancel.'
		        <script>function reload(){var img=document.images["cap-img"];img.src=img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;}</script>';
	}	
	
	public static function simple_submit($button='submit', $class='', $icon='', $cancel=false)
	{
		global $lang;
		$class = $class!='' ? ' class="'.$class.'"' : ' class="btn btn-primary"';
		$icon = $icon!='' ? '<i class="' .$icon. '"></i>&nbsp;' : '';
		$cancel = $cancel==true ? '&nbsp;<button type="reset" class="btn btn-secondary btn-lg" onclick="$(\'#form\').remove();"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;' .$lang['cancel']. '</button>' : '';	
		return  HTMLForm::err('ErrToken', $lang['invalid_token']). '<button' .$class. ' type="submit">' . $icon .$lang[$button]. '</button>' .
				$cancel;
	}
	
	public static function select($name, $options, $default = '', $class='', $desc='', $disabled=false)
	{
		global $lang;
		$class = $class!='' ? ' class="form-control '.$class.'"' : ' class="custom-select"';
		$desc = $desc!='' ? '<small class="form-text text-muted">' .$lang[$desc]. '</small>' : '';
		$disabled = $disabled==true ? ' disabled' : '';
		$selected = Util::isPOST($name) && isset($options[$_POST[$name]])? $_POST[$name] : $default;
		$out = '<div class="form-group">
				  <label class="form-label" for="' .$name. '">' .$lang[$name]. '</label>
                  <select id="' .$name. '" name="' .$name. '"' .$class . $disabled. '>';
				  foreach($options as $value => $option)
				  {
				  	$out .= '<option value="' .$value. '"' .($value == $selected? ' selected="selected"' : ''). '>' .$option. '</option>';
				  }
		$out .= '</select>
				' .$desc. '
                </div>';
		return $out;
	}

	public static function checkBox($name, $default='', $desc='')
	{
		global $lang;
		$value = Util::isPOST($name) ? HTMLForm::clean($_POST[$name]) : $default;
		$desc = $desc!='' ? '<small class="form-text text-muted">' .$lang[$desc]. '</small>' : '';
		
		return '<div class="form-group">
			<div class="custom-control custom-switch">
			  <input class="custom-control-input" id="' .$name. '" name="' .$name. '" type="checkbox"' .($value ? ' checked' : ''). '>
			  <label class="custom-control-label" for="' .$name. '">
			  		' .$lang[$name]. '
			  </label>
			</div>
	        ' .$desc. '
	    </div>';
	}
			
	public static function form($action, $controls, $class='', $method='post', $enctype=false)
	{
		global $token;
		$class = $class!='' ? ' class="' .$class. '"' : '';
		$enctype = $enctype ? ' enctype="multipart/form-data"' : '';
		$form  = '<form id="form" action="' .$action. '" method="'.$method.'"' . $class . $enctype. '>
						<input type="hidden" name="_token" value="' .$token. '">';
		$form .= 		$controls;
		$form .= '</form>';
		return $form;
	}

	public static function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
	{
	   	# Test1: fichier correctement uploadé
	    if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;	
		# Test2: taille limite
	    if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
		# Test3: extension
	    $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
	    if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
		# Déplacement
	    return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);	
	}
		
	public static function preview($name)
	{
		return Util::isPOST($name)? '<div class="alert alert-warning" role="alert">' .Parser::content(HTMLForm::transNL(HTMLForm::clean($_POST[$name]))). '</div>' : '';
	}
	
	public static function check($name, $min = 1, $max = 40)
	{		
		if (!Util::isPOST($name))
			return false;
		# CONTENT FILTER
		if (preg_match(CONTENT_FILTER, $_POST[$name])) {
			$_SESSION[$name. 'ErrContentFilter'] = 1;
			return false;
		}
		$len = strlen(trim($_POST[$name]));
		if($len >= $min && $len <= $max)
			return true;
		$_SESSION[$name. 'ErrLen'] = 1;
		return false;
	}
	
	public static function checkPass($name)
	{
		if(HTMLForm::check($name) && Util::isPOST($name. 'Confirm') && $_POST[$name] === $_POST[$name. 'Confirm'])
			return true;
		$_SESSION[$name. 'ErrNotMatch'] = 1;
		return false;
	}
	
	public static function checkNb($name)
	{	
		$num = $_POST[$name];	
		if(ctype_digit($num) && $num > 0)	
			return true;
		$_SESSION[$name. 'ErrNb'] = 1;
		return false;
	}

	public static function checkMail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    		
	public static function checkBot()
	{
		if(!Util::isPOST('captcha'))
			return false;
		if(isset($_SESSION['captcha']) && $_POST['captcha'] === $_SESSION['captcha'])
			return true;
		$_SESSION['ErrBot'] = 1;
		return false;
	}
}