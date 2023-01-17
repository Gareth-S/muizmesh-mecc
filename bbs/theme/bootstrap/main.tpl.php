<?php include(__DIR__ . DS . 'header.tpl.php');
	# Ajout pour le plugin Page de Flatboard Pro 
	$gPage = (isset($_GET['p']) ? $_GET['p'] : null);
?>

	<?php if (!$config['announcement']=='' && $cur=='home'): ?>
    <!-- Announcement -->	
	<div class="jumbotron jumbotron-fluid alert alert-dismissible mt-4" role="alert">
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
	
	<?php 
		if ($cur ==='viewForum'):
		# Fix forum entry 
		$forumEntry = flatDB::readEntry('forum', $_GET['forum']);
	?>
	<div id="cat" class="jumbotron jumbotron-fluid mt-4" style="background-color:<?php echo $forumEntry['badge_color']?> !important">
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
	
    <main role="main" class="container mt-4">
      <div class="row">	      
	  		<?php if ($cur !=='viewTopic' && $cur !=='blog' && $cur !==$gPage) include(__DIR__ . DS . 'sidebar.tpl.php'); ?>

            <section class="col-12 col-md-<?php echo ($cur !=='viewTopic' && $cur !=='blog' && $cur !==$gPage) ? '9' : '12' ?>">	
     	      
			  	<?php echo Plugin::hook('beforeMain', $out['self'])?>    

			  	<?php if ($cur!=='home' && $cur!=='blog' && $cur!==$gPage || $out['self']==='delete'): ?>
			    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			      	<h1 class="lead"><?php echo $out['sub_prefix'].$out['subtitle']?></h1>
			    </div>    
			    <?php else: ?>
			    	<br class="mt-5 mb-5>"/>    
				<?php endif; ?>
		
				<?php echo $out['content']?>	
	
		  		<?php echo Plugin::hook('afterMain', $out['self'])?>
		  		
            </section>
                       
      </div><!-- /.row -->
    </main><!-- /.container -->
   
<?php include(__DIR__ . DS . 'footer.tpl.php') ?>