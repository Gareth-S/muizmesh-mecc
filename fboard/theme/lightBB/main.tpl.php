<?php include(__DIR__ . DS . 'header.tpl.php');
	# Ajout pour le plugin Page de Flatboard Pro 
	$gPage = (isset($_GET['p']) ? $_GET['p'] : null);
?>

	<?php if (!$config['announcement']=='' && $cur=='home'): ?>
    <!-- Announcement -->	
	<div class="jumbotron jumbotron-fluid alert alert-dismissible" role="alert">
	    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center"> 
	      <h1 class="display-4"><?php echo $config['title']?></h1>
	      <p class="lead"><?php echo $config['description']?></p>
	    		
		  <?php echo $config['announcement']?>    
		</div>
		
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		</button>		
	</div>
	<!-- Announcement -->	
	<?php endif; ?>
	
	<?php if ($cur ==='viewForum'): ?>
	<div id="cat" class="jumbotron jumbotron-fluid" style="background-color:<?php echo $forumEntry['badge_color']?> !important">
	  <div class="container text-center">
        <h1 class="display-4">
	        <i class="mr-3 fa-2x <?php echo $forumEntry['font_icon']?>"></i> <?php echo $forumEntry['name']?>
        </h1>
        <p class="lead">
          <?php echo $forumEntry['info']?> 
          <?php echo Plugin::hook('afterForum', $_GET['forum'])?>
        </p>		  
	  </div>
	</div>
	<?php endif; ?>

	<main role="main" class="container"> 
		
		<?php if ($cur !=='viewTopic' && $cur !=='blog' && $cur !==$gPage): ?>
		  <nav class="nav nav-underline mt-3">
		
			<?php if($cur=='viewForum'): ?>
				<a class="btn btn-primary" href="add.php<?php echo DS ?>topic<?php echo DS . $_GET['forum'] ?>">
					<i class="fa fa-plus"></i> <?php echo $lang['newthread'] ?>
				</a>
		    <?php else: ?>							  	
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newtopic">
				  	<i class="fa fa-plus"></i> <?php echo $lang['newthread'] ?>
				</button>								
			<?php endif; ?>	
			<?php # Formulaire de sélection des forums
				include(__DIR__ . DS . 'select_topic.tpl.php'); 
			?>	
									    
			<div class="dropdown">
			  <button class="btn btn-secondary btn-sm mt-1 ml-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class="fa fa-tags" aria-hidden="true"></i> <?php echo $lang['forum'].$lang['plural']?>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">  
				<?php // LISTE DES FORUMS
					include(__DIR__ . DS . 'categories.tpl.php'); 
				?>								  
			  </ul>
			</div>

			<!-- Button trigger modal -->
			<a class="nav-link text-muted" data-toggle="tooltip" data-placement="right" title="About <?php echo $config['title']?>">
			 	<i class="fa fa-info-circle fa-lg" aria-hidden="true" data-toggle="modal" data-target="#about"></i>
			</a>			
			<!-- About Modal -->
			<?php include(__DIR__ . DS . 'sidebar.tpl.php'); ?>
				
		  </nav>
		<?php endif; ?>
		
	    <div class="row">	      

            <section class="col-12 col-md-12">	
     	      
			  	<?php echo Plugin::hook('beforeMain', $out['self'])?>    

			  	<?php if ($cur!=='home' && $cur!=='blog' && $cur!==$gPage): ?>
			    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			      <h1 class="lead"><?php echo $out['sub_prefix'].$out['subtitle']?></h1>
			    </div>    
				<?php endif; ?>
		
				<?php echo $out['content']?>	
	
		  		<?php echo Plugin::hook('afterMain', $out['self'])?>
		  		
            </section>
	                       
	    </div><!-- /.row -->
	    
    </main><!-- /.container -->
   
<?php include(__DIR__ . DS . 'footer.tpl.php') ?>