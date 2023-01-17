<?php defined('FLATBOARD') or die('Flatboard Community.');
/**
 * Backup
 *
 * @author 		Frédéric K.
 * @copyright	(c) 2015-2020
 * @license		http://opensource.org/licenses/MIT
 * @package		FlatBoard
 * @version		2.6
 * @update		2020-06-23
 */	
define('BACKUP_FOLDER', 'backups');	
define('PATH_BACKUP', 	PATH_ROOT . DS . BACKUP_FOLDER . DS); 
/**
 * On pré-installe les paramètres par défauts.
**/
function backup_install()
{
	$plugin = 'backup';
	if (flatDB::isValidEntry('plugin', $plugin))
		return;

    # Création du dossier qui accueillera nos archives      
	if(!is_dir(PATH_BACKUP)){
		mkdir(PATH_BACKUP);
		chmod(PATH_BACKUP, 0777);
	}

	if (!file_exists(PATH_BACKUP. 'index.html')) {
		$f = fopen(PATH_BACKUP. 'index.html', 'a+');
		fwrite($f, '');
		fclose($f);	
	}
	# Données du plugin
    $data[$plugin.'state']   = true;
	$data['backup_folder']   = PATH_BACKUP;       
	flatDB::saveEntry('plugin', $plugin, $data);
}

	// Archive Content Folder
	function zipData($source, $destination){
		global $lang;
		$plugin = 'backup';
		$out='';		
		$archiveName = 'backup-' .time(). '.zip'; // Archive name
		if (extension_loaded('zip') && file_exists($source)) {
			$zip = new ZipArchive();
			if ($zip->open($destination, ZIPARCHIVE::CREATE) === TRUE) {
				$source = realpath($source);
				if (is_dir($source)) {
                        $iterator = new RecursiveDirectoryIterator($source);
                        // skip dot files while iterating 
                        $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
                        $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
                        foreach ($files as $file) {
                            $file = realpath($file);
                            if (is_dir($file)) {
                             	$zip->addEmptyDir(str_replace($source . DS, '', $file));
                            } else if (is_file($file)) {
                                $zip->addFromString(str_replace($source . DS, '', $file), file_get_contents($file));
                            }
                        }
				} else if (is_file($source)) {
					$zip->addFromString(basename($source), file_get_contents($source));
				}
			}

			if (!$zip->close())
				$out .= Plugin::redirectMsg($lang['there-was-a-problem-writing-the-zip-archive'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-danger');
			else
				$out .= Plugin::redirectMsg($lang['successfully-created-the-zip-archive'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-success');
			// close the zip file
			#$zip->close();
			return $out;
		}

		return false;
	}

	// List Files
	function list_zipfiles($mydirectory) {
		global $lang, $config;	
		$plugin = 'backup';	
		# Action files
		if (isset($_GET['delete'])) return del($_GET['delete']);	
		if (isset($_GET['restore'])) return restore($_GET['restore']);
		$zipfiles = '';	    		
		# return table			
		$html = '
		<table class="table mt-2">
			<tbody>';		
		# directory we want to scan
		$dircontents = scandir($mydirectory);	
		# list the contents
		asort($dircontents);
		foreach ($dircontents as $file) {
			$extension = pathinfo($file, PATHINFO_EXTENSION);
			$filename = pathinfo($file, PATHINFO_FILENAME);
			$filesize = Util::getFilesize($mydirectory.$file);
			$date = filemtime($mydirectory.$file);
			$backupDate = ($config['lang']==='fr-FR') ? strftime($config['date_format'], $date) : date($config['date_format'], $date);
			#clearstatcache();	
			
			# Files list
			$html .= '<tr>';
			if ($extension == 'zip') {
				$html .= '<td><h5 class="lead">' .$backupDate. '</h5></td>';
				$html .= '<td><small class="font-weight-light badge badge-warning">' .$filesize. '</small></td>';
				$html .= '<td>' .backup_manage($file). '</td>';
				$zipfiles .= true;
			} else $zipfiles .= false;
			$html .= '</tr>';	
		}
		$html .= '	</tbody>
		</table>';
		# No files zip?
		if ($zipfiles == false) 
			$html .= '<div class="alert alert-primary" role="alert">' .$lang['there-are-no-backups-for-the moment']. '</div>';	
					
		return $html;
	}

	/**
	 * Recursively deletes a directory
	 *
	 * @paramstringpath to a directory
	 * @return void
	 */
	function removeDir($dir){
		if ($handle = opendir($dir)){
			$array = array(); 
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") { 
					if(is_dir($dir.$file)){
						if(!@rmdir($dir.$file)){ // Empty directory? Remove it
							removeDir($dir . $file . DS); // Not empty? Delete the files inside it
						}
					}else{
						@unlink($dir.$file);
					}
				}
			}

			closedir($handle); 
			@rmdir($dir);
		}
	}

	// Delete a File
	function del($file) {
		global $lang;
		$plugin = 'backup';
		$out='';		
		$file = PATH_BACKUP.$file;	
		if(file_exists($file)) unlink($file);	
		if($file)
			$out .= Plugin::redirectMsg($lang['successfully-deleted-file'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-success');
		else 
			$out .= Plugin::redirectMsg($lang['an-error-occurred-while-deleting-the-file'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-danger');

		return $out;
	}

	// Restore a archive
	function restore($file){
		global $lang;
		$plugin = 'backup';
		$out='';	

		$zip = new ZipArchive;
		$res = $zip->open(PATH_BACKUP.$file);
		$removeDir = removeDir(DATA_DIR);
		if ($res === TRUE) {
			$removeDir; // Y ESO PARA QUE?
			if(!is_dir(DATA_DIR) && (!@mkdir(DATA_DIR) || !@chmod(DATA_DIR, 0777)));
			// extract it to the path we determined above
			$zip->extractTo(DATA_DIR);
			$zip->close();
			
			$out .= Plugin::redirectMsg($lang['archive-is-restored'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-success');
		} else {
			$out .= Plugin::redirectMsg($lang['there-was-a-problem-to-restore-the-zip-archive'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-danger');
		}	
		return $out;
	}
/**
 * Admin
**/
function backup_config()
{
	  global $lang, $token;
	  $plugin = 'backup';
	  # Lecture des données
	  $data = flatDB::readEntry('plugin', $plugin);
	  
	  if ($data[$plugin.'state']) 
	  { 
		$archiveName = 'backup-' .time(). '.zip'; // Archive name  
		$out= '';
	
	     
	       if(!empty($_POST) && CSRF::check($token) )
	       {    
				if(!zipData(DATA_DIR, PATH_BACKUP.$archiveName))
				    $out .= Plugin::redirectMsg($lang['there-was-a-problem-writing-the-zip-archive'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-danger');
				else	           
	               $out .= Plugin::redirectMsg($lang['successfully-created-the-zip-archive'], 'config.php' . DS . 'plugin' . DS . $plugin, $lang['back-to-backup'], 'alert alert-success');
	       }
	        else
	       {
	               $out .= HTMLForm::form('config.php' . DS . 'plugin' . DS . $plugin,     
	               HTMLForm::simple_submit('make-a-backup','btn btn btn-success mt-3','fa fa-play-circle'));
	       }
		       	
		if (file_exists(PATH_BACKUP)) $out .= list_zipfiles(PATH_BACKUP);
	
		return $out;
	  }       
}
/**
 * Admin menu
**/
function backup_core_menu()
{
  $plugin = 'backup';
  global $lang, $cur;
  # Lecture des données
  $data = flatDB::readEntry('plugin', $plugin);  
  $out ='';
  if (User::isAdmin() && $data[$plugin.'state'])
    $out .= '<li class="nav-item">
	            <a class="nav-link' .($cur==$plugin ? ' active' : ''). '" href="config.php' . DS . 'plugin' . DS . $plugin. '">
		            <i class="fa fa-life-ring" aria-hidden="true"></i>&nbsp;&nbsp;
		            ' .$lang[$plugin.'name']. '
		        </a>
	        </li>';
  
  return $out;
}
 /*
** Manage backup menu
*/
function backup_manage($file)  
{ 
            global $lang;
            $plugin = 'backup';
            # Lecture des données
            $data = flatDB::readEntry('plugin', $plugin);
            
            if ($data[$plugin.'state'] && User::isAdmin())          
            return '
			<div class="btn-group float-right">
			  		<a class="btn btn-outline-success btn-sm" href="' .BACKUP_FOLDER . DS . $file. '"><i class="fa fa-download"></i>&nbsp;' .$lang['download']. '</a>
			  		<a class="btn btn-outline-primary btn-sm" href="config.php' . DS . 'plugin' . DS . $plugin . DS . 'restore' . DS . $file. '" onclick = "if(!confirm(\'' .$lang['do-you-want-to-restore-this-backup']. '\')) return false;"><i class="fa fa-rotate-left"></i>&nbsp;&nbsp;' .$lang['restore']. '</a>
			  		<a class="btn btn-outline-danger btn-sm" href="config.php' . DS . 'plugin' . DS . $plugin . DS . 'delete' . DS . $file. '" onclick = "if(!confirm(\'' .$lang['delete-this-backup']. '\')) return false;"><i class="fa fa-trash"></i>&nbsp;&nbsp;' .$lang['delete']. '</a>
			</div>';
}
?>