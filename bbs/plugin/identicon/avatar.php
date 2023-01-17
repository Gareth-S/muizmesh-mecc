<?php 
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
 *
 * @string	?f=[folderpath] (requis)
 * @string  ?u=[username] 	(requis)
 * @integer	?sz=[size]	  	(optionnel)
 * @option	?d=dot		  	(optionnel) carré par défaut
 *
 * Exemple : avatar.php?f=folderpath&u=username&sz=80&d=dot
*/

###############################
#                             #
#  ░░░░  ░   ░░  ░░░░  ░░░░░░ #
#   ░░   ░░  ░░   ░░   ░ ░░ ░ #
#   ░░   ░░░ ░░   ░░     ░░   #
#   ░░   ░░░░░░   ░░     ░░   #
#   ░░   ░░ ░░░   ░░     ░░   #
#   ░░   ░░  ░░   ░░     ░░   #
#  ░░░░  ░░   ░  ░░░░   ░░░░  #
#                             #
###############################
$avatar_filename='';
# Path des avatars
if (!empty($_GET['f']))
	$f=strip_tags($_GET['f']);

# Taille en px
if (!empty($_GET['sz']))
	$size=intval(strip_tags($_GET['sz']));
else
	$size=80;
	
# Point ou carré
if (!empty($_GET['d']))
	$d=strip_tags($_GET['d']);

# Si $d est renseigné, on affiche des points au lieu de carrés
$d=isset($d) ? 'dot' : '';
	
# Nom de fichier une fois généré
$avatar_filename = 'x' . $size . $avatar_filename . $d . '.png';

# On réduit la taille des points
$dotsize=$size/9;
##################################################################
#                                                                #
# ░░░░░░ ░░  ░░ ░   ░░  ░░░░  ░░░░░░  ░░░░   ░░░░  ░   ░░  ░░░░  #
# ░░     ░░  ░░ ░░  ░░ ░░  ░░ ░ ░░ ░   ░░   ░░  ░░ ░░  ░░ ░░  ░░ #
# ░░     ░░  ░░ ░░░ ░░ ░░       ░░     ░░   ░░  ░░ ░░░ ░░  ░░    #
# ░░░░░  ░░  ░░ ░░░░░░ ░░       ░░     ░░   ░░  ░░ ░░░░░░   ░░   #
# ░░     ░░  ░░ ░░ ░░░ ░░       ░░     ░░   ░░  ░░ ░░ ░░░    ░░  #
# ░░     ░░  ░░ ░░  ░░ ░░  ░░   ░░     ░░   ░░  ░░ ░░  ░░ ░░  ░░ #
# ░░      ░░░░  ░░   ░  ░░░░   ░░░░   ░░░░   ░░░░  ░░   ░  ░░░░  #
#                                                                #
##################################################################
function separatRGB($color){
    $color=str_replace('#','',$color);
    if (strlen($color)==3){
        $color=$color[0].$color[0].$color[1].$color[1].$color[2].$color[2];
    }
    $RGB=array();
    $RGB['r']=hexdec(substr($color, 0,2));
    $RGB['g']=hexdec(substr($color, 2,2));
    $RGB['b']=hexdec(substr($color, 4,2));  
    return $RGB;
}
function drawLine($linenb,$pattern,$size,$dots=false){
	global $image,$couleur_avatar,$couleur_fond;
	for ($i=0;$i<9;$i++){
		$x=$i*$size;
		$y=$linenb*$size;
		if ($pattern[$i]==1){
			if (!$dots)
				imagefilledrectangle ( $image , $x,$y  , $x+$size ,$y+$size , $couleur_avatar );
			else
				imagefilledellipse ( $image , $x+($size/2),$y+($size/2)  , $size ,$size , $couleur_avatar );
		}else{
			imagefilledrectangle ( $image , $x,$y  , $x+$size ,$y+$size ,$couleur_fond);
		}
	}
}
###########################################################
#                                                         #
#  ░░░░  ░░░░░░ ░   ░░ ░░░░░░ ░░░░░   ░░░░  ░░░░░░ ░░░░░░ #
# ░░  ░░ ░░     ░░  ░░ ░░     ░░  ░░ ░░  ░░ ░ ░░ ░ ░░     #
# ░░     ░░     ░░░ ░░ ░░     ░░  ░░ ░░  ░░   ░░   ░░     #
# ░░ ░░░ ░░░░░  ░░░░░░ ░░░░░  ░░░░░  ░░░░░░   ░░   ░░░░░  #
# ░░  ░░ ░░     ░░ ░░░ ░░     ░░  ░░ ░░  ░░   ░░   ░░     #
# ░░  ░░ ░░     ░░  ░░ ░░     ░░  ░░ ░░  ░░   ░░   ░░     #
#  ░░░░  ░░░░░░ ░░   ░ ░░░░░░ ░░  ░░ ░░  ░░  ░░░░  ░░░░░░ #
#                                                         #
###########################################################
if (!empty($_GET['u'])){
	$username = urldecode($_GET['u']);
	# Formatage numérique du pseudo
	$h1=hash('crc32',$username);
	$h2=hash('crc32b',$username);
	# Génération des couleurs de fond et de l'avatar
	$c1 = separatRGB($h1);
	$c2 = separatRGB($h2);
	# Pseudo formaté
	$s  = $h1 . $h2[0];
	# Path du fichier formatté
	$file = urldecode($f) . $s . $avatar_filename;
	
	# Si l'image est déjà générée, envoi au navigateur
	if (is_file($file)){
		header ("Content-type: image/png");
		exit(file_get_contents($file));
	}
	
	# Sinon création de l'image
	$image = @ImageCreate ($size, $size) or die ("Erreur lors de la création de l'image");
	$couleur_fond   = ImageColorAllocate ($image, $c1['r'], $c1['g'], $c1['b']);
	$couleur_avatar = ImageColorAllocate ($image, $c2['r'], $c2['g'], $c2['b']);

	$a[dechex(0)]='000010000';
	$a[dechex(16)]='111111111';
	
	for ($i=1;$i<=15;$i++){
		$bin=decbin($i);
		$bin=str_repeat('0', 4-strlen($bin)).$bin;
		$a[dechex($i)]=$bin.'1'.strrev($bin);
	}
	for ($i=0;$i<9;$i++){
		drawLine($i,$a[$s[$i]],$dotsize,$d);
	}
	header ("Content-type: image/png");
	imagepng($image,$file);
	chmod($file,0644);
	imagepng($image);
}
?>