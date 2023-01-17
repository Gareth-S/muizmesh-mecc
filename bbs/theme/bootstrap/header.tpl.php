<?php if(!isset($out)) exit();
# Vérification si le forum est privé
if( $config['private'] && !User::isWorker() ) {
	Util::redirect('auth.php' );
	exit();
}	
?>
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
		$css = 
		array(
	        $destination. 'bootstrap.css',
	        $destination. 'main.css',
	        Plugin::hook('css', $out['self']),
	    );   
		echo Asset::Stylesheet($css, $destination, 'style.min.css'); 		
	?>
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo HTML_THEME_DIR?>assets/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo HTML_THEME_DIR?>assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo HTML_THEME_DIR?>assets/img/favicon-16x16.png">
	<link rel="manifest" href="<?php echo HTML_THEME_DIR?>assets/img/site.webmanifest">
	<link rel="mask-icon" href="<?php echo HTML_THEME_DIR?>assets/img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="<?php echo $config['style']?>">
	<meta name="theme-color" content="#ffffff">
	<!-- ATOM Feeds -->
	<link rel="alternate" type="application/atom+xml" href="feed.php/topic" title="<?php echo $lang['topic']?> - <?php echo $config['title']?>"/>
	<link rel="alternate" type="application/atom+xml" href="feed.php/reply" title="<?php echo $lang['reply']?> - <?php echo $config['title']?>"/>	
	<?php echo Plugin::hook('head', $out['self'])?>  
  </head>

  <body class="bg-white d-flex flex-column h-100">
	  
  <header class="mb-4">
	  <!-- Fixed navbar -->
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top mb-4" style="background-color: <?php echo $config['style']?>">
	    <a class="navbar-brand" href="<?php echo HTML_BASEPATH?>" title="<?php echo $lang['home'] ?>"><?php echo $config['title']?></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">

          <ul class="navbar-nav mr-auto">
	                   
            <?php if ($config['blog_new']!=''): ?> 
            <li class="nav-item">
              <a class="nav-link" href="blog.php"><i class="fa fa-commenting" aria-hidden="true"></i> <?php echo $lang['blog']?></a>
            </li>           
            <?php endif; ?> 
                
            <li class="nav-item">
              <a class="nav-link" href="index.php/forum"><i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo $lang['forum'].$lang['plural']?></a>                     
            </li>
                          
            <li class="nav-item">
              <a class="nav-link" href="search.php"><i class="fa fa-search" aria-hidden="true"></i> <?php echo $lang['search']?></a>
            </li>
                                     
            <?php 
              // Liens générés par les plugins
              echo Plugin::hook('menu', $out['self'])
            ?>
                       
          </ul>
          
          <ul class="navbar-nav my-2 my-md-0">
				<?php if (User::isWorker()): ?>
				<li class="nav-item">
					<?php if (User::isAdmin()): ?>
				    <a class="nav-link" href="config.php">
					    <i class="fa fa-cog" aria-hidden="true"></i> <?php echo $lang['config'] ?>
					</a>
					<?php else: ?>
				    <a class="nav-link" href="auth.php/logout">
					    <i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo $lang['logout'] ?>
					</a>					
					<?php endif;?>	
				</li>	                         		  
				<?php else: ?>	              
				<li class="nav-item">
					<?php if($sessionTrip) : ?>
				    <a class="nav-link" href="auth.php/logout">
					    <i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo $lang['logout'] ?>
					</a>
					<?php else: ?>
				    <a class="nav-link" href="#loginModal" data-toggle="modal" data-view="#loginModalView">
					    <i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo $lang['login'] ?>
					</a>					
					<?php endif;?>
				</li>
				<?php endif;?>
          </ul> 
          
          <!-- Mobile Fix -->
          <div class="d-block d-sm-none">	
	        <ul class="list-unstyled text-white">
		        <li class="h6"><i class="fa fa-th-large" aria-hidden="true"></i> <?php echo $lang['forum'].$lang['plural']?></li>    
				<?php // LISTE DES FORUMS
					include(__DIR__ . DS . 'categories.tpl.php'); 
				?>						
	        </ul>	          	          
          </div>
          <!--/ Mobile Fix END -->                  
          
	    </div>
	    
        <!-- Mobile Fix -->
        <div class="d-block d-sm-none">
        <ul class="list-unstyled">
            <li>
			<?php if($cur=='viewForum'): ?>
				<a class="nav-link" href="add.php<?php echo DS ?>topic<?php echo DS . $_GET['forum'] ?>" title="<?php echo $lang['newthread'] ?>">
					<i class="fa fa-edit fa-lg text-white"></i>
				</a>
            <?php else: ?>							  	
				<a class="nav-link" data-toggle="modal" data-target="#newtopic" title="<?php echo $lang['newthread'] ?>">
				  	<i class="fa fa-edit fa-lg text-white"></i>
				</a>								
			<?php endif; ?>	
            </li>									
        </ul>		          	          
        </div>
        <!--/ Mobile Fix END -->	    
	  </nav>
  </header>		
  
  <?php if($sessionTrip==''): ?>
	<!-- Login Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">      
			<img class="mb-4" src="<?php echo HTML_THEME_DIR?>assets/img/<?php echo (defined('FLATBOARD_PRO'))?'flatboard-pro':'flatboard' ?>.png" alt="Flatboard" height="72">						
			<h1 class="h3 ml-2 mt-4 font-weight-normal text-muted"><?php echo $lang['login'] ?></h1>
	        
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="loginModalView">
		  <?php echo
				HTMLForm::form('auth.php',
					HTMLForm::password('trip', '', '', 'your_admin_psw').
					HTMLForm::submit('login', 'btn btn-lg btn-primary btn-block', 'fa fa-check')
				);			  
		  ?>
	      </div>
	    </div>
	  </div>
	</div>   
  <?php endif; ?>       	                                     