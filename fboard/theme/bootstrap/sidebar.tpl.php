			<?php if(!isset($out)) exit; ?>			
          	<!-- ========== Left Sidebar Start ========== -->
		  	<aside class="col-md-3 d-none d-md-block mt-4">
	            
				        <ul class="list-unstyled">
                            <li>
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
                            </li>								
				        </ul>		
				        						
				        <div class="p-3">
				          <h4 class="font-italic"><i class="fa fa-tags" aria-hidden="true"></i> <?php echo $lang['forum'].$lang['plural']?></h4>
				          <ul class="list-unstyled text-small">    
							<?php // LISTE DES FORUMS
								include(__DIR__ . DS . 'categories.tpl.php'); 
							?>						
				          </ul>
				        </div>				        
                        				                
				        <div class="p-3">
				          <h4 class="font-italic"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo $lang['statistics']?></h4>
				          <ul class="list-unstyled text-small text-muted">
								<li>
									<span class="font-weight-bold"><?php echo Util::shortNum(count(flatDB::listEntry('topic'))) ?></span> 
									<?php echo $lang['topic']. Util::pluralize(count(flatDB::listEntry('topic')),$lang['plural']) ?>
								</li>
								<li>
									<span class="font-weight-bold"><?php echo Util::shortNum(count(flatDB::listEntry('reply'))) ?></span> 
									<?php echo Util::pluralize(count(flatDB::listEntry('reply')), $lang['replies'], $lang['reply']) ?>
								</li>
								<li>
									<span class="font-weight-bold"><?php echo Util::shortNum(count(array_merge(flatDB::listEntry('topic'), flatDB::listEntry('reply')))) ?></span> 
									<?php echo $lang['count']. Util::pluralize(count(array_merge(flatDB::listEntry('topic'), flatDB::listEntry('reply'))),$lang['plural']) ?>
								</li>
								
								<?php if (TIMESTAMP): ?>
								<li>
									<span class="label"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
									<?php echo round($fin-$debut, 3) . ' ' . $lang['second'] . $lang['plural']; ?>
								</li>
								<?php endif; ?>
												
								<?php echo Plugin::hook('stats', $out['self']) ?>
				          </ul>
				        </div>
				        
				        <?php if ($cur=='home' || $cur=='forum' || $cur=='viewForum'): ?>
				        <div class="p-3">
				          <h4 class="font-italic"><i class="fa fa-rss"></i> <?php echo $lang['feed']?></h4>
				          <ul class="list-unstyled text-small">
						  <?php if ($cur=='home' || $cur=='forum'): ?>
								<li><a href="feed.php/topic"><?php echo $lang['topic'].$lang['plural']?></a></li> 
								<li><a href="feed.php/reply"><?php echo $lang['reply'].$lang['plural']?></a></li>				  
						  <?php endif; ?>
						  			  
						  <?php if ($cur=='viewForum'): ?>	
								<li>			  
									  <a href="feed.php/forum/<?php echo $_GET['forum'] ?>"><?php echo $lang['forum']?></a>
								</li>				  
						  <?php endif; ?>
				          </ul>
				        </div>
						<?php endif; ?>

			            <?php 
			              // Plugins dans la colonne
			              echo Plugin::hook('sidebar', $out['self'])
			            ?>
			            
                        <div class="clearfix"></div>
                        
            </aside>
            <!-- Left Sidebar End -->