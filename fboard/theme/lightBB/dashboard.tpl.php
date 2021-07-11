<?php if(!isset($out)) exit; 
	$assets = HTML_THEME_DIR. 'assets' .DS;
	$notes = FlatDB::readEntry('plugin','core')['note'];
?>
<!DOCTYPE html>
<html lang="<?php echo $config['lang']?>">
<head>
  <meta charset="<?php echo CHARSET ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="<?php echo Util::Description()?>"/>
  <title><?php echo $config['title']?> - <?php echo $out['subtitle']?></title>
  <base href="<?php echo $out['baseURL']?>"/>
  
  <!-- Bootstrap core CSS -->
  <link href="<?php echo $assets?>css/bootstrap.css" rel="stylesheet">
  <!-- Dashboard -->
  <link href="<?php echo $assets?>css/dashboard.css" rel="stylesheet"> 
  <!-- favicon -->
  <link rel="icon" href="<?php echo $assets?>img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $assets?>img/apple-touch-icon.png">
  <!-- RSS Feeds -->
  <link rel="alternate" type="application/atom+xml" href="feed.php/topic" title="<?php echo $lang['topic']?> - <?php echo $config['title']?>"/>
  <link rel="alternate" type="application/atom+xml" href="feed.php/reply" title="<?php echo $lang['reply']?> - <?php echo $config['title']?>"/>	
  <style>.bg-costum { background: <?php echo $config['style']?>;color: rgba(0, 0, 0, 0.5) !important;padding: 1rem}</style>
  <?php echo Plugin::hook('head', $out['self'])?>  
</head>

  <body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header shadow">
                <a href="<?php echo HTML_BASEPATH . DS?>config.php">
	                <img class="logo-icon" src="<?php echo $assets?>img/<?php echo (defined('FLATBOARD_PRO'))?'flatboard-pro':'flatboard' ?>.png" alt="Flatboard">
                </a>
                <p class="text-uppercase"><?php echo (defined('FLATBOARD_PRO'))?'FLATBOARD PRO':'FLATBOARD' ?></p>            
            </div>

            <ul class="list-unstyled components">
	            <li id="new-version" style="display: none;" class="text-center text-danger">
		            <a target="_blank" href="http://flatboard.free.fr/download.php"><i class="fa fa-bell"></i> <?php echo $lang['new_version']?></a>
		        </li>	            
	            <!-- Welcome message -->
                <li id="hello-message" class="text-center">
	                <?php echo $lang['hello'] ?> <?php echo $lang[$_SESSION['role']] ?>
	            </li>

	            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
	              <span><?php echo $lang['note'] ?></span>
	              <a class="d-flex align-items-center text-muted">
	                <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
	              </a>
	            </h6>
	            <textarea name="note" id="note"><?php echo $notes ?></textarea>
	                                           
		        <?php if (User::isAdmin()): ?>
		        <li class="nav-item">
		            <a class="nav-link<?php if ($cur == 'config') echo ' active'; ?>" href="config.php">
			            <i class="fa fa-sliders" aria-hidden="true"></i> <?php echo $lang['config'] ?>
			        </a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link<?php if ($cur == 'plugin') echo ' active'; ?>" href="config.php/plugin">
			            <i class="fa fa-plug" aria-hidden="true"></i> <?php echo $lang['plugin'].$lang['plural'] ?>
			        </a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link<?php if ($cur == 'tags') echo ' active'; ?>" href="config.php/tags">
			            <i class="fa fa-tags" aria-hidden="true"></i> <?php echo $lang['tags'] ?>
			        </a>
		        </li>	              
		        <li class="nav-item">
		            <a class="nav-link<?php if ($cur == 'notifications') echo ' active'; ?>" href="config.php/notifications">
			            <i class="fa fa-tachometer" aria-hidden="true"></i> <?php echo $lang['dashboard'] ?>
			        </a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link<?php if ($cur == 'worker') echo ' active'; ?>" href="config.php/worker">
			            <i class="fa fa-users" aria-hidden="true"></i> <?php echo $lang['worker'] ?>
			        </a>
		        </li>		              		           
		        <li class="nav-item">
		            <a class="nav-link<?php if ($cur == 'ban') echo ' active'; ?>" href="config.php/ban">
			            <i class="fa fa-ban" aria-hidden="true"></i> <?php echo $lang['ban_list'] ?>
			        </a>
		        </li>		              
		        <li class="nav-item">
		            <a class="nav-link<?php if ($cur == 'password') echo ' active'; ?>" href="auth.php/password">
			            <i class="fa fa-key" aria-hidden="true"></i> <?php echo $lang['change_pwd'] ?>
			        </a>
		        </li>		              	              
		        <?php endif;?>
                <?php if(Plugin::hook('core_menu', $out['self'])): ?>                            
                <li>
                    <a href="#pluginsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
	                    <i class="fa fa-plug" aria-hidden="true"></i> Extras <?php echo $lang['plugin'].$lang['plural'] ?>
	                </a>
                    <ul class="collapse list-unstyled" id="pluginsSubmenu">
		              <?php 
			              // Liens générés par les plugins
			              echo Plugin::hook('core_menu', $out['self'])
			           ?>
                    </ul>
                </li>
				<?php endif;?>
            </ul>

            <ul class="list-unstyled links">
                <li>
                    <a href="<?php echo HTML_BASEPATH?>" class="article">
	                    <i class="fa fa-home" aria-hidden="true"></i> <?php echo $lang['back_to_site'] ?>
	                </a>
                </li>
            </ul>
            <hr>
            <p class="footer text-center text-white">
	            <small><?php echo $lang['powered']?></small>
	        </p>

            <?php echo Plugin::hook('adminSidebar', $out['self'])?>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-align-justify"></i>
                    </button>
					
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
				            <?php if (User::isWorker()): ?>
				            	<a class="nav-link" href="auth.php/logout"><?php echo $lang['logout'] ?></a>        
				          	<?php else: ?>
				          		<a class="nav-link" href="auth.php" class="btn btn-link"><?php echo $lang['login'] ?></a>
				          	<?php endif;?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <?php echo Plugin::hook('adminBeforeMain', $out['self'])?>
			            
            <h1 class="h4 text-center text-uppercase">
	            <?php echo $out['sub_prefix'].$out['subtitle']?>
	        </h1>     
			
			<?php echo $out['content']?>	
	
		  	<?php echo Plugin::hook('adminAfterMain', $out['self'])?>            
            
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo $assets?>js/jquery.min.js"></script>
    <script src="<?php echo $assets?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $assets?>js/flatboard.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
			$("#hello-message").fadeOut(2000, function() {
				var hours = new Date().getHours();
				if (6 <= hours && hours < 12) {
					$(this).html('<span class="text-warning"><i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo $lang['good-morning'] ?></span>');
				} else if (12 <= hours && hours < 19) {
					$(this).html('<span class="text-warning"><i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo $lang['good-afternoon'] ?></span>');
				} else if (19 <= hours && hours < 23) {
					$(this).html('<span class="text-primary"><i class="fa fa-moon-o" aria-hidden="true"></i> <?php echo $lang['good-evening'] ?></span>');
				} else {
					$(this).html('<span class="text-primary"><i class="fa fa-moon-o" aria-hidden="true"></i> <?php echo $lang['good-night'] ?></span>');
				}
			}).fadeIn(2000);   
			// Admin note
			$("#note").on("keyup",function(e){
			    e.preventDefault();
			    $.ajax({
			      url:"#",
			      type: "POST",
			      data: {
			        coreNote: $("#note").val()
			      } 
			    })
			}) 			         
        });
            
    </script>
	<?php echo Plugin::hook('footerJS', $out['self'])?>                
  </body>
</html>