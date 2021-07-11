<?php if(!isset($out)) exit;?>
<!DOCTYPE html>
<html lang="<?php echo $config['lang']?>">
<head>
  <meta charset="<?php echo CHARSET ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="<?php echo Util::Description()?>"/>
  <title><?php echo $config['title']?> - <?php echo $out['subtitle']?></title>
  <base href="<?php echo $out['baseURL']?>"/>
  <?php 
		$destination = THEME_DIR. $config['theme'] . DS . 'assets' .DS. 'css' .DS;
		$css = array(
            $destination. 'bootstrap.css',
            $destination. 'main.css',
            Plugin::hook('css', $out['self']),
            );
            
		echo Asset::Stylesheet($css, $destination, 'style.min.css'); 		
  ?>
  <!-- favicon -->
  <link rel="icon" href="<?php echo HTML_THEME_DIR?>assets/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo HTML_THEME_DIR?>assets/img/apple-touch-icon.png">	
  <?php echo Plugin::hook('head', $out['self'])?>  
</head>


  <body class="bg-light text-center" style="margin-top: 10%">
	<?php echo Plugin::hook('beforeMain', $out['self'])?>
		
	<a href="<?php echo HTML_BASEPATH?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['back_to_site']?>">
		<img class="mb-4" src="<?php echo HTML_THEME_DIR?>assets/img/<?php echo (defined('FLATBOARD_PRO'))?'flatboard-pro':'flatboard' ?>.png" alt="Flatboard" height="72">
	</a>			
	<h1 class="h3 mb-5 font-weight-normal text-muted"><?php echo $out['subtitle']?></h1>
	
	<section class="row justify-content-center">
		
		<?php if ($config['private'] && $cur !=='password'): ?>
		<div class="col-md-3 mr-2 bg-warning text-dark">
			<div class="card-body">
				<i class="fa fa-exclamation-triangle fa-5x" aria-hidden="true"></i>	      
				<h4><?php echo $lang['unauthorized_access']?></h4>
				<p><?php echo $lang['private_msg']?></p>
			</div>
		</div>
		<?php endif; ?>
					
		<div class="col-md-4">
			<div class="card-body">	      
				<?php echo $out['content']?>
				<?php echo Plugin::hook('afterMain', $out['self'])?>
			</div>
		</div>
		
	</section>
    
	<script src="<?php echo HTML_THEME_DIR?>assets/js/jquery.min.js?ver=v3.2.1"></script>
	<!-- Bootstrap core JavaScript
		================================================== -->   		
	<script src="<?php echo HTML_THEME_DIR?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo HTML_THEME_DIR?>assets/js/flatboard.js"></script>	    
	<?php echo Plugin::hook('footerJS', $out['self'])?>
  </body>
</html>