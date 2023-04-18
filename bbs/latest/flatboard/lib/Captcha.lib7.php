<?php
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/
 
/* Check for GD library */
if( !function_exists('gd_info') ) {
    throw new Exception('Required GD library is missing');
}  
  
/* Configuration personnalisée */
$captchaConfig = array(
	 'word' => '0123456789abcdefghijklmnopqrstuvwxyz',
 	 'length' => rand(4,6),
	 'img_width' => 110,
	 'img_height' => 23,
	 'font_path' => __DIR__ . '/' . 'arial.ttf',
	 'font_size' => 12,
	 'expiration' => 7200,
	 'bg_color' => '#E9ECEF',
	 'border_color' => '#E9ECEF',
	 'text_color' => '#007bff',
	 'grid_color' => '#eccc68',
	 'shadow_color' => '#333',
 );
$captcha = new Captcha($captchaConfig);
$captcha->createCaptcha();

class Captcha
{
    /* Configuration / Options par défaut */
    var $word = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var $length = 5;
    var $img_width = 170;
    var $img_height = 55;
    var $font_path = '';
    var $font_size = 25;
    var $expiration = 7200;
    var $bg_color = '#ffffff';
    var $border_color = '#996666';
    var $text_color = '#1c86f2';
    var $grid_color = '#ffb6b6';
    var $shadow_color = '#fff0f0';
    
    public function __construct($config = array()){
        ob_start();
        session_start();
        if (count($config) > 0){
            foreach ($config as $key => $val){
                if (isset($this->$key)){
                    $method = 'set_'.$key;
                    if (method_exists($this, $method)){
                        $this->$method($val);
                    }else{
                        $this->$key = $val;
                    }
                }
            }
        }
        
        if ( ! extension_loaded('gd')){
            return FALSE;
        }
    }
    
    public function createCaptcha(){
        $str = '';
        for ($i = 0; $i < $this->length; $i++){
            $str .= substr($this->word, mt_rand(0, strlen($this->word) -1), 1);
        }
        $word = $str;

        /* Détermination de l'angle et de la position */
        $length = strlen($word);
        $angle  = ($length >= 6) ? rand(-($length-6), ($length-6)) : 0;
        $x_axis = rand(6, (360/$length)-16);
        $y_axis = ($angle >= 0 ) ? rand($this->img_height, $this->img_width) : rand(6, $this->img_height);

        /* Création de l'image */
        if (function_exists('imagecreatetruecolor')){
            $im = imagecreatetruecolor($this->img_width, $this->img_height);
        }else{
            $im = imagecreate($this->img_width, $this->img_height);
        }

        /* Attribution des couleurs */
        $bgColorRgb     = $this->hexToRgb($this->bg_color);
        $borderColorRgb = $this->hexToRgb($this->border_color);
        $textColorRgb   = $this->hexToRgb($this->text_color);
        $gridColorRgb   = $this->hexToRgb($this->grid_color);
        $shadowColorRgb = $this->hexToRgb($this->shadow_color);
        $bg_color       = imagecolorallocate ($im, $bgColorRgb[0], $bgColorRgb[1], $bgColorRgb[2]);
        $border_color   = imagecolorallocate ($im, $borderColorRgb[0], $borderColorRgb[1], $borderColorRgb[2]);
        $text_color     = imagecolorallocate ($im, $textColorRgb[0], $textColorRgb[1], $textColorRgb[2]);
        $grid_color     = imagecolorallocate($im, $gridColorRgb[0], $gridColorRgb[1], $gridColorRgb[2]);
        $shadow_color   = imagecolorallocate($im, $shadowColorRgb[0], $shadowColorRgb[1], $shadowColorRgb[2]);

        /* Création du rectangle */
        ImageFilledRectangle($im, 0, 0, $this->img_width, $this->img_height, $bg_color);

        /* Création du motif en spirale */
        $theta   = 1;
        $thetac  = 7;
        $radius  = 16;
        $circles = 20;
        $points  = 32;

        for ($i = 0; $i < ($circles * $points) - 1; $i++){
            $theta = $theta + $thetac;
            $rad   = $radius * ($i / $points );
            $x     = ($rad * cos($theta)) + $x_axis;
            $y     = ($rad * sin($theta)) + $y_axis;
            $theta = $theta + $thetac;
            $rad1  = $radius * (($i + 1) / $points);
            $x1    = ($rad1 * cos($theta)) + $x_axis;
            $y1    = ($rad1 * sin($theta )) + $y_axis;
            imageline($im, $x, $y, $x1, $y1, $grid_color);
            $theta = $theta - $thetac;
        }

        /* Ecriture du texte dans l'image */
        $use_font = ($this->font_path != '' AND file_exists($this->font_path) AND function_exists('imagettftext')) ? TRUE : FALSE;

        $x = rand(0, $this->img_width/($length/1.5));
        $y = $this->font_size+2;

        for ($i = 0; $i < strlen($word); $i++)
        {
            if ($use_font == FALSE){
                $y = rand(0 , $this->img_height/2);
                imagestring($im, $this->font_size, $x, $y, substr($word, $i, 1), $text_color);
                $x += ($this->font_size);
            }else{
                $y = rand($this->img_height/2, $this->img_height-3);
                imagettftext($im, $this->font_size, $angle, $x, $y, $text_color, $this->font_path, substr($word, $i, 1));
                $x += $this->font_size;
            }
        }

        /* Création de la bordure de l'image */
        imagerectangle($im, 0, 0, $this->img_width-1, $this->img_height-1, $border_color);

        /* Utiliser imagepng() donnera un texte plus claire, */
        /* comparé à l'utilisation de la fonction imagejpeg() */
        imagepng($im);
        header('Content-Type: image/png');//image type header
        imagedestroy($im);//destroying image
        
        /* On stock notre code captcha dans la session */
        if(empty(session_id()))
        unset($_SESSION['captcha']);
        $_SESSION['captcha'] = $word;
    }
    
    public function hexToRgb($hex){
        $hex = str_replace("#", "", $hex);
        if(strlen($hex) == 3) {
           $r = hexdec(substr($hex,0,1).substr($hex,0,1));
           $g = hexdec(substr($hex,1,1).substr($hex,1,1));
           $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
           $r = hexdec(substr($hex,0,2));
           $g = hexdec(substr($hex,2,2));
           $b = hexdec(substr($hex,4,2));
        }
        $rgb = array($r, $g, $b);
        return $rgb;
    }
}
?>
