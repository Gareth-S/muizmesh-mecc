<?php
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
if(!isset($out)) exit; 
if ($config['private'] && !User::isWorker()) {
	Util::redirect('auth.php');
	exit();
}
header('Content-Type: application/atom+xml; charset='.CHARSET);
?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:base="<?php echo $out['baseURL'] ?>">
		<id><?php echo $out['baseURL'] ?>feed.php<?php echo DS . $out['type'] ?></id>
		<title><?php echo $out['subtitle'] ?> - <?php echo $config['title'] ?></title>
		<subtitle><?php echo $config['description'] ?></subtitle>
		<updated><?php echo date('c') ?></updated>
		<link href="feed.php<?php echo DS . $out['type'] ?>" rel="self"/>
        <author>
                <name>Flatboard</name>
                <email><?php echo $config['mail'] ?></email>
        </author>
		<?php echo $out['content'] ?>
</feed>