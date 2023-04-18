<?php if(!session_id())session_start();
/*
 * Project name: Flatboard
 * Package: Flatboard Unpack
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/	

/*
 *---------------------------------------------------------------
 * LANGUAGE DETECTION
 *---------------------------------------------------------------
 */
$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);
$language = str_replace(',', '-', $language);
$language = explode('-', $language);
$language = $language[0]. '-' .strtoupper($language[1]);
/*
 *---------------------------------------------------------------
 * CONSTANTES AND DEFINES
 *---------------------------------------------------------------
 */		
# Define the path to the root directory (with trailing slash). 
const DS = '/'; 
const PATH_ROOT = __DIR__ . DS;
# Build and version.	
const VERSION 	= '3.1';
const BUILD 	= '2023-02-25';	
if (!defined('LANG')) 			define('LANG', $language);
if (!defined('APP')) 			define('APP', 'flatboard');
if (!defined('COUNTDOWN')) 		define('COUNTDOWN', 3);
# Mode de déboguage: NULL, FALSE & TRUE
if (!defined('DEBUG_MODE')) 	define('DEBUG_MODE', FALSE);
if (defined('DEBUG_MODE')) {
    ini_set('error_log', PATH_ROOT . 'error.log');
    if (DEBUG_MODE === true) {
        error_reporting(E_ALL | E_STRICT | E_NOTICE);
        ini_set('display_errors', true);
        ini_set('display_startup_errors', true);
        ini_set("track_errors", 1);
        ini_set('html_errors', 1);
    } else if (DEBUG_MODE === false) {
        error_reporting(0);
        ini_set('display_errors', false);
        ini_set('display_startup_errors', false);
    }
}
/*
 *---------------------------------------------------------------
 * PHP VERIFICATIONS
 *---------------------------------------------------------------
 */
// Check PHP version
if(!version_compare(phpversion(), '5.3', '>=')) 
    die('Current PHP version '.phpversion().', you need > 5.3. (ERR_202)');

// Check PHP modules 
$modules = array('mbstring', 'json', 'gd', 'dom'); 
$bad = false;
$missing = '';
foreach ($modules as $module) {
	if (!extension_loaded($module)) {
		$errorText = 'PHP module <b>'.$module.'</b> is not installed.';
		error_log('[ERROR] '.$errorText, 0);
		$bad = true;
		$missing .= $errorText.PHP_EOL;
	}
}
if ($bad) {
	echo 'PHP modules missing:';
	echo $missing;
	exit();
}
/*
 *---------------------------------------------------------------
 * TRANSLATIONS
 *---------------------------------------------------------------
 */
	# Français
	$translation['fr-FR'] = array(
	  "Flatboard unpacking" => "Décompression de Flatboard",
	  "Because is more faster to upload just 2 files." => "Parce qu’il est plus facile et rapide de n’envoyer que 2 fichiers.",
	  "UNPACK" => "DÉCOMPRESSER",
	  "UNPACKED !" => "TERMINÉ !",
	  "Select language" => "Sélectionnez une langue",
	  "English" => "Anglais",
	  "French" => "Français",
	  "Russian" => "Russe",
	  'Oups! I couldn\'t open %file' => 'Oups! Impossible d’ouvrir %file',
	  'YEAH! Archive properly extracted to %path.<br />You will be redirected in <span id="counter">%count</span> second(s).' => 'Cool ! Archive extraite vers %path.<br />Vous allez être redirigé dans <span id="counter">%count</span> seconde(s).',
	  "Hello %name" => "Bonjour %name",
	);
	# Russe / Russian / Русский
	$translation['ru-RU'] = array(
	  "Flatboard unpacking" => "Распаковка Flatboard",
	  "Because is more faster to upload just 2 files." => "Поскольку быстрее просто распаковать, чем устанавливать.",
	  "UNPACK" => "Распаковать",
	  "UNPACKED !" => "РАСПАКОВКА!",
	  "Select language" => "Выберите язык",
	  "English" => "Английский",
	  "French" => "Французский",
	  "Russian" => "Русский",
	  'Oups! I couldn\'t open %file' => 'Уууупс! Не удалось открыть файл %file',	
	  'YEAH! Archive properly extracted to %path.<br />You will be redirected in <span id="counter">%count</span> second(s).' => 'Ура! Всё извлечено в %path.<br />Вы будете перенаправлены через <span id="counter">%count</span> секунд(ы).',  
	  "Hello %name" => "Привет %name",
	);	
	# Chinese
	$translation['zh-CN'] = array(
	  "Flatboard unpacking" => "解压 Flatboard",
	  "Because is more faster to upload just 2 files." => "因为只上传两个文件会更快。",
	  "UNPACK" => "解压",
	  "UNPACKED !" => "开始搭建 Flatboard",
	  "Select language" => "选择语言",
	  "Chinese" => "简体中文By Arley",
	  "English" => "英语",
	  "French" => "法语",
	  "Russian" => "俄语",
	  'Oups! I couldn\'t open %file' => '哎呀！不能打开 %file',
	  'YEAH! Archive properly extracted to %path.<br />You will be redirected in <span id="counter">%count</span> second(s).' => '好啦 ! 额外的文件和 %path.<br />您将被转到 <span id="counter">%count</span> seconde(s).',
	  "Hello %name" => "你好 %name",
	);
	
	// On filtre les $GET_
	$d 	  = filter_input(INPUT_GET, 'download');	
	$download = (isset($d) ? $d : null);
	// Look for l in query string and set as language.
	$l 	  = filter_input(INPUT_GET, 'l');
	$lang = isset($l) ? $l : LANG;

	if(isset($_SESSION['msg'])) {
	    $msg = $_SESSION['msg'];
	    session_unset($_SESSION['msg']);
	} else {
	    $msg = '';
	}		
	
	function unpack_() {
		// assuming flatboard.zip is in the same directory as the executing script.
		$app = APP .'.zip';	
		// get the absolute path to $file
		$path = pathinfo(realpath($app), PATHINFO_DIRNAME);
					
		$zip = new ZipArchive;
		$res = $zip->open($app);
		if ($res === TRUE) {
		  // extract it to the path we determined above
		  $zip->extractTo($path);
		  $zip->close();
		  
		  recurse_copy(APP,'./'); 
		  
		  removeDirectory(APP);
		   
		  	flash( 'msg', t('YEAH! Archive properly extracted to %path.<br />You will be redirected in <span id="counter">%count</span> second(s).', array('%path' => $path, '%count' => COUNTDOWN)) );
		  	// Flatboard is extracted, delete the archive now.
		  	unlink(dirname(__FILE__) . DS . $app);
		} else {
			flash( 'msg', t('Oups! I couldn\'t open %file', array('%file' => $app)), 'warning' );
		}
	}

	function recurse_copy($src, $dst) {
	    $dir = opendir($src);
	    @mkdir($dst);
	    while(false !== ( $file = readdir($dir)) ) {
	        if (( $file != '.' ) && ( $file != '..' )) {
	            if ( is_dir($src . DS . $file) ) {
	                recurse_copy($src . DS . $file, $dst . DS . $file);
	            }
	            else {
	                copy($src . DS . $file, $dst . DS . $file);
	            }
	        }
	    }
	    closedir($dir);
	}
	
	function removeDirectory($path) {
		$files = glob($path . '/*');
		foreach ($files as $file) {
			is_dir($file) ? removeDirectory($file) : unlink($file);
		}
		rmdir($path);
		return;
	}
	/**
	 * Function to create and display error and success messages
	 * @access public
	 * @param string session name
	 * @param string message
	 * @param string display class
	 * @return string message
	 */
	function flash( $name = '', $message = '', $class = 'success' )
	{
	    //We can only do something if the name isn't empty
	    if( !empty( $name ) )
	    {
	        //No message, create it
	        if( !empty( $message ) && empty( $_SESSION[$name] ) )
	        {
	            if( !empty( $_SESSION[$name] ) )
	            {
	                unset( $_SESSION[$name] );
	            }
	            if( !empty( $_SESSION[$name.'_class'] ) )
	            {
	                unset( $_SESSION[$name.'_class'] );
	            }
	
	            $_SESSION[$name] = $message;
	            $_SESSION[$name.'_class'] = $class;
	        }
	        //Message exists, display it
	        elseif( !empty( $_SESSION[$name] ) && empty( $message ) )
	        {
	            $class = !empty( $_SESSION[$name.'_class'] ) ? $_SESSION[$name.'_class'] : 'success';
	            echo '<div class="msg '.$class.'"><span class="msg-close">&times;</span><h3 class="msg-title">Information</h3><p class="msg-message">'.$_SESSION[$name].'</p></div>';
	            unset($_SESSION[$name]);
	            unset($_SESSION[$name.'_class']);
	        }
	    }
	}
	/**
	 * Translate a string
	 * Use the $translate variable to define your set of language translations.
	 *
	 * @param $string
	 *  The string that is to be translated.
	 * @param $args
	 *  An array of placeholders that will populate the translated string.
	 * @param $langcode
	 *  The language you wish to translate the string to.
	 */
	function t($string, $args = array(), $langcode = NULL) {
	  global $lang, $translation;
	  
	  // Set language code.
	  $langcode = isset($langcode) ? $langcode : $lang;
	  
	  // Search for a translated string.
	  if ( isset($translation[$langcode][$string]) ) {
	    $string = $translation[$langcode][$string];
	  }
	  
	  // Replace arguments if present.
	  if ( empty($args) ) {
	    return $string;
	  } else {
	    foreach ( $args as $key => $value ) {
	      switch ( $key[0] ) {
	        case '!':
	        case '@':
	        case '%':
	        default: $args[$key] = $value; break;
	      }
	    }
	    
	    return strtr($string, $args);
	  }
	}
/*
 *---------------------------------------------------------------
 * UNPACK HTML RENDER
 *---------------------------------------------------------------
 */									
?>
<!DOCTYPE html>
<html lang="<?php echo LANG ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description ?>">
    <title><?php echo t('Flatboard unpacking') ?></title>
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Raleway">
	<style type="text/css">*{box-sizing:border-box}html{background-color:#333;text-align:center;font-family:"Raleway";color:#fff}.header{margin-top:100px}.btn{width:150px;height:50px;background-color:#F34D35;color:#fff;border-radius:30px;display:flex;align-items:center;justify-content:center;font-family:"Raleway";position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);cursor:pointer;transition:background-color .5s}.btn:hover{background-color:#ECF0F1;color:#F34D35}.bar{width:200px;height:8px;border-radius:8px;background-color:#34495e;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);display:none}.bar .p{width:0;border-radius:8px;height:100%;background-color:#F34D35}.container{position:absolute;transform:translate(-50%,-50%);left:50%;top:35%;width:450px}.msg{max-width:450px;width:100%;border-radius:6px;box-shadow:.0625rem .0625rem .0925rem #2d794b;padding:1px;margin:10px auto;position:relative}.msg .msg-close{position:absolute;top:10px;right:10px;cursor:pointer;font-size:18px;border-radius:50px;width:18px;height:18px;line-height:15px;text-align:center}.msg .msg-title,.msg .msg-message,.msg .msg-message a{color:#fff;font-family:'Raleway',sans-serif}.msg .msg-title{font-size:18x;font-weight:600}.msg .msg-message,.msg .msg-message a{font-weight:300;font-size:14px}.success{background:#5ed490}.success .msg-close{border:1px solid #2d794b;color:#2d794b}.warning{background:#f56668}.warning .msg-close{border:1px solid #ba4849;color:#ba4849}.info{background:#2a7ac0}.info .msg-close{border:1px solid #08345b}.danger{background:#e5a300}.danger .msg-close{border:1px solid #996d00}.footer{padding-top:10px;font-style: oblique;font-size:12px;color:#ffffff}.select{margin:0 auto;position:relative;height:47.5px;width:250px;box-shadow:0 3px 0 rgba(0,0,0,.5)}.select:after,.select:before{position:absolute;content:'';pointer-events:none}.select:after{top:0;width:0;height:0;right:10px;bottom:0;margin:auto;border-style:solid;border-width:5px 5px 0;border-color:#000 transparent transparent}.select:before{width:30px;top:1px;right:1px;bottom:1px;background:#f5f5f5}.select:hover:before{background:#1abc9c}.select select{font-size:16px;color:#fff!important;box-shadow:none;border-radius:0;background:#333;height:100%;width:100%;cursor:pointer;outline:0;padding-right:35px;padding-left:15px;border:1px solid #000;-moz-appearance:none;-webkit-appearance:none}.select select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}.select select::-ms-expand{display:none}.select select:focus{border-color:#1abc9c}@media all and (min-width:0\0) and (min-resolution:0.001dpcm){.select select{padding-right:0}.select:after,.select:before{display:none}}</style>
</head>

<body>
	<div class="header">		
		<h1><?php echo t('Flatboard unpacking') ?></h1>
		<h3><?php echo t('Because is more faster to upload just 2 files.') ?></h3>
		<form class="select">
		  	<?php 
				$options = array(''=>t('Select language'),'en-US'=>t('English'),'fr-FR'=>t('French'),'ru-RU'=>t('Russian'),'zh-CN'=>t('Chinese') );
				$selected = (isset($_GET['l'])) ? $_GET['l'] : LANG;			  
		  	?>	
		  	<select onChange="document.location.href='index.php?l=' + this.value"> 
			<?php 
				foreach($options as $value => $option) {
					echo '<option value="' .$value. '"' .($value == $selected? ' selected="selected"' : ''). '>' .$option. '</option>';		  
				} 
			?>
			</select>
		</form> 			
	</div>
	
	<div class="container">		
		<?php 
			if ($download) unpack_().
			sleep(1).
			flash('msg'); 
		?>
	</div>
	
	<div class="btn">
	  <span><?php echo t('UNPACK') ?></span>
	</div>
	
	<div class="bar">
	  <div class="p"></div>
	</div>
	
	<div class="footer">Version: <?php echo VERSION;?> - Build: <?php echo BUILD;?></div>
	
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script>
	$(".btn").click(function(){  /*When user click the button*/
	  window.location = "index.php?l=<?php echo $lang ?>&download=true";
	  $("span").fadeOut(); /*Fadeout the download span*/
	  $(".btn").animate({  
	    width: "50px", /*Animate the width*/
	  },function(){
	    $(".btn").animate({
	      top: "40%", 
	    },function(){
	      $(".bar").css("display","block"); 
	      $(".btn").html('…');
	      $(".p").animate({width:"100%"},4500,function(){
	        $(".btn").html('✔');
	        $(".bar").fadeOut();
	        $(".btn").animate({top:"50%"},function(){
	          $(".btn").animate({width:"150px"},function(){
	            $(".btn").html("<span><?php echo t('UNPACKED !') ?></span>");
	            $(".p").css("width","0%");
	            /*$(".btn").hide();*/
	          })
	        });
	      });
	    })
	  });
	});
	function countdown() {
	    var i = document.getElementById('counter');
	    if (parseInt(i.innerHTML)<=0) {
	        location.href = 'index.php';
	    }
	    i.innerHTML = parseInt(i.innerHTML)-1;
	}
	setInterval(function(){ countdown(); },1000);	
	</script>
</body>
</html>