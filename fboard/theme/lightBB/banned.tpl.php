<!DOCTYPE html>
<html lang="<?php echo $config['lang']?>">
<head>
  <meta charset="<?php echo CHARSET ?>" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php echo $lang['banned']?></title>
  <link type="text/css" rel="stylesheet" href="<?php echo HTML_THEME_DIR . 'cache' .DS?>style.min.css"/>	 
</head>
  
<body class="bg-dark" style="margin-top:30%">
	
    <section class="container mt-5">
	    <div class="d-flex justify-content-center text-white m5">
		    <p class="text-uppercase"><?php echo Util::lang('your_banned %s has_banned', $ip)?></p>
	    </div>
		
	    <div class="d-flex justify-content-center text-white m5">
		    <p class="font-weight-lighter"><?php echo $lang['admin'] .' : ' .$config['mail']?></p>
	    </div>	    
    </section>
    
</body> 
</html>
<?php die(); ?>