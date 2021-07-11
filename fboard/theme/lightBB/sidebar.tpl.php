			<?php if(!isset($out)) exit;
				$buildDate = DateTime::createFromFormat('ymd', BUILD)->format('F j, Y'); 
			?>
			<!-- ========== Left Sidebar Start ========== -->
			<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-body">

				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				        				      
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

						<?php if(DEBUG_MODE): ?>
				        <div class="p-3">
				          <h4 class="font-italic"><i class="fa fa-info"></i> <?php echo (defined('FLATBOARD_PRO'))?'FLATBOARD PRO':'FLATBOARD' ?></h4>
				          <ul class="list-unstyled text-muted">
							<li>version: <?php echo VERSION ?></li> 
							<li>theme: <?php echo $config['theme']?></li>
							<li>build: <?php echo BUILD ?> <small class="text-muted">(<?php echo $buildDate ?>)</small></li>	
							<li>codename: <?php echo CODENAME ?></li>			  
				          </ul>
				        </div>						
						<?php endif; ?>
									
			            <?php 
			              // Plugins dans la colonne
			              echo Plugin::hook('sidebar', $out['self'])
			            ?>
                        
			      </div>
			    </div>
			  </div>
			</div>				
          	<!-- ========== Left Sidebar Start ========== -->