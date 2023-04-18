<?php 
	if(!isset($out)) exit;
	# LISTE DES FORUMS
	$forums = flatDB::readEntry('config', 'forumOrder');
?>
		<!-- Modal -->
		<div class="modal fade" id="newtopic" tabindex="-1" role="dialog" aria-labelledby="newtopic" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newtopic"><?php echo Util::lang('add topic') ?></h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				  <?php if($forums): ?>
				  <label class="invisible" for="forum"><?php echo $lang['forum'] ?></label>
                  <select class="custom-select" id="forum" name="forum" onChange="window.open(this.value, '_self')">
	                  <option value=""><?php echo $lang['forum'] ?></option>
	                  <?php
						foreach(array_values($forums) as $key => $forum)
						{
							$forumEntry = flatDB::readEntry('forum', $forum);
							$lang[$forum] = $forumEntry['name'];
							echo '<option value="add.php' . DS . 'topic' . DS . $forum. '">' .$forumEntry['name']. '</option>';
						}
					  ?>			                  
                  </select>	
                  <?php else: ?>
                  		<p><?php echo $lang['no-forum'] ?></p>	
                  <?php endif; ?> 
		      </div>
		    </div>
		  </div>
		</div>     