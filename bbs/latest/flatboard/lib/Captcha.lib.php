<?php
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
  session_start();
  // Generate captcha code
  $random_num    = md5(random_bytes(64));
  $captcha_code  = substr($random_num, 0, 6);
  /* On stock notre code captcha dans la session */
  if(empty(session_id()))
  unset($_SESSION['captcha']);
  $_SESSION['captcha'] = $captcha_code;
  /* Création du rectangle */
  $layer = imagecreatetruecolor(110, 30);
  /* Attribution de la couleur du fond */
  $captcha_bg = imagecolorallocate($layer, 233, 236, 237);
  imagefill($layer, 0, 0, $captcha_bg);
  /* Attribution de la couleur du texte */
  $captcha_text_color = imagecolorallocate($layer, 0, 123, 255);
  /* Ecriture du texte dans l'image */
  imagestring($layer, 5, 55, 10, $captcha_code, $captcha_text_color);
  
  /* Utiliser imagepng() donnera un texte plus claire, */
  /* comparé à l'utilisation de la fonction imagejpeg() */
  header('Content-Type: image/png');//image type header
  imagepng($layer);
  imagedestroy($layer);//destroying image 
?>
