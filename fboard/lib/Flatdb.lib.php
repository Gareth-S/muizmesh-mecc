<?php defined('FLATBOARD') or die('Flatboard Community.');

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

class flatDB
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
    	
	public static function fdir($dir)
	{
    	$ignored = array('.', '..', '.svn', '.git', 'Thumbs.db', 'index.html', '.DS_Store');	
		$files = array();
		$dh = opendir($dir);
		while(false !== ($file = readdir($dh)))
		{
			if (in_array($file, $ignored)) continue;			
			$file = explode('.', $file, 2);
			$files[] = $file[0];
		}
		closedir($dh);
		return $files;
	}
	
	public static function indir($file, $dir, $ext = '')
	{
		return strpos($file, DS) === false && strpos($file, '.') === false && strpos($file, "\0") === false && file_exists($dir. DS .$file .$ext);
	}
	
	public static function readEntry($type, $file)
	{
		# Fix for old forum categories URL'S
		$data = DATA_DIR . $type . DS . $file . '.dat.php';
		if (file_exists($data)) return eval('return ' .file_get_contents(DATA_DIR . $type . DS . $file . '.dat.php', false, NULL, 14). ';');
	}
	
	public static function saveEntry($type, $file, $data)
	{
		return file_put_contents(DATA_DIR . $type. DS . $file . '.dat.php', "<?php exit;?>\n" .
		var_export($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT), LOCK_EX);
	}
	
	public static function deleteEntry($type, $file)
	{
		unlink(DATA_DIR . $type . DS . $file . '.dat.php');
		return true;
	}
	
	public static function listEntry($type)
	{
		return flatDB::fdir(DATA_DIR . $type);
	}
	
	public static function isValidEntry($type, $file)
	{
		return flatDB::indir($file, DATA_DIR . $type, '.dat.php');
	}
	
	public static function newEntry()
	{
		return date('Y-m-dHis').substr(uniqid(), -5);
	}	
	
	/**
	 * Méthode récursive qui supprimes tous les dossiers et les fichiers d'un répertoire
	 **/
	public static function deleteDir($dir){
		if ($handle = opendir($dir)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != '.' && $file != '..') {
					if(is_dir($dir . $file)) {
						if(!rmdir($dir . $file)) // Empty directory? Remove it
						{
							flatDB::deleteDir($dir .'/'. $file . '/'); // Not empty? Delete the files inside it
						}
					} else {
						unlink($dir . $file);
					}
				}
			}
			closedir($handle);
			@rmdir($dir);
		}
	}
}