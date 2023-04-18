<?php
			# ON RETOURNE LA DERNIÈRE DISCUSSION		
			$out['content'] .= '
		      <div class="lh-100 d-flex align-items-center p-3 my-3 bg-white rounded box-shadow">
		        <div style="width:100%; word-break: break-all;">	          	          
		          <div class="text-center">
		          	  <h1 class="h4">' .Parser::title($tag. $topicEntry['title']). '</h1>	
		          	  	          
			          ' .Parser::summary(Parser::content($topicEntry['content'],true),30). '
			          
			          <p class="mt-3">' .($topicEntry['locked']? '
					        <a title="' .Util::lang('topic locked'). '" class="btn btn-primary btn-lg" href="view.php' . DS . 'topic' . DS . $topic. '">' .$lang['more']. ' <i class="fa fa-lock"></i></a>' : '
					        <a title="' .$lang['more']. '" class="btn btn-primary btn-lg" href="view.php' . DS . 'topic' . DS . $topic. '">' .$lang['more']. ' <i class="fa fa-arrow-circle-right"></i></a>'). '
			          </p>
		          </div>';
		      
	            # ON LISTE LES 3 DERNIÈRES RÉPONSES S’IL Y EN A
	            if($topicEntry['reply']){
					$out['content'] .= '<hr class="my-4">
				<div class="text-center text-uppercase">' .Util::pluralize(count($topicEntry['reply']), $lang['replies'], $lang['reply']). '</div>	
							
		        <div class="row">';    
						foreach(array_slice($topicEntry['reply'], -3) as $reply)
						{
							$replyEntry = flatDB::readEntry('reply', $reply);
							$out['content'] .= '
							<div class="col-md-4">
								<a title="' .$lang['more']. '" class="float-right" href="view.php' . DS . 'topic' . DS . $replyEntry['topic']. DS. 'p'. DS . Util::onPage($reply, $topicEntry['reply']). '#' .$reply. '"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
								<span class="user ' .$replyEntry['role']. '">' .Parser::title($replyEntry['trip']). '</span>: 
								<div style="width:100%; word-break: break-all;">
									' .Parser::summary(Parser::content($replyEntry['content'], true), 20). '
								</div>
							</div>';
						}
					$out['content'] .= '
		        </div>';					
	            }
	            
				$out['content'] .= '
		        </div>				
		      </div><!-- ./lh-100 d-flex align-items-center -->';
			
			# TABLEAU DE SUGGESTION DES DERNIERS SUJETS & RÉPONSES		          	
			$out['content'] .= '
			<section id="timeline">
			
		      <div class="my-3 p-3 bg-white rounded box-shadow">
		        <h6 class="border-bottom border-gray pb-2 mb-0">
		        	' .Util::pluralize(count($topicEntry['reply']), $lang['last_post'].$lang['plural'], $lang['last_post']). '
		        </h6>';
	              	# Sort
					rsort($mixes);
					foreach(Paginate::viewPage($mixes, $p, $nb) as $mix)			
					{
						if(flatDB::isValidEntry('topic', $mix))
						{
							$topic = $mix;
							$topicEntry = flatDB::readEntry('topic', $topic);
							$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
							$tagMix = (isset($topicEntry['tag']) ? $topicEntry['tag']. ' ' : '');
							$privateforums = isset($forumEntry['private_forum']) ? $forumEntry['private_forum'] || User::isWorker() : '';
							
							$out['content'] .= '                                       							
					        <div class="media text-muted pt-3">

							  <figure class="mw-10">        
									' .Plugin::hook('profile', $topicEntry['trip']). '
							  </figure>					        
					          
					          <div class="media-body ml-3 pb-3 mb-0 small lh-125 border-bottom border-gray">
														          
					            <div class="d-flex w-100">
					               <strong class="text-gray-dark">
					               		<a href="view.php' . DS . 'topic' . DS . $topic. '">' .Parser::title($tagMix. $topicEntry['title']). '</a>
					               </strong>
					            </div>

								<div class="float-right">
				                    ' .Util::shortNum($topicEntry['view']). '&nbsp;<i class="fa fa-eye" title="' .$lang['view'] . Util::pluralize($topicEntry['view'], $lang['plural']). '"></i><br />
				                    ' .Util::shortNum(count($topicEntry['reply'])). '&nbsp;<i class="fa fa-comment-o" title="' .Util::pluralize(count($topicEntry['reply']), $lang['replies'], $lang['reply']). '"></i>
								</div>
													            
					            <div class="d-block">
					            	' .entryLink::manageTopic($topic). ' <span class=" user ' .$topicEntry['role']. '">' .Parser::title($topicEntry['trip']). '</span> 
					            	' .$lang['started']. ' ' .Util::toDate($topic, $config['date_format']). '
					            </div>

			                    <p class="tile-title">		                    
			                        	<a class="btn btn-sm" style="background-color:' .$forumEntry['badge_color']. '!important;color:white!important" href="view.php' . DS . 'forum' . DS . $topicEntry['forum']. '"><i class="' .$forumEntry['font_icon']. '"></i> ' .$forumEntry['name']. '</a>
			                    </p>
			                        					            				            
					          </div>
					          
					        </div>';
						}
						else
						{
							$reply = $mix;
							$replyEntry = flatDB::readEntry('reply', $reply);
							$topicEntry = flatDB::readEntry('topic', $replyEntry['topic']);
							$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
							$tagReply = (isset($topicEntry['tag']) ? $topicEntry['tag']. ' ' : '');
							$privateforums = isset($forumEntry['private_forum']) ? $forumEntry['private_forum'] || User::isWorker() : '';

							$out['content'] .= '
					        <div class="media text-muted pt-3">

							  <figure class="mw-10">        
									' .Plugin::hook('profile', $replyEntry['trip']). '
							  </figure>						        
					          
					          <div class="media-body ml-3 pb-3 mb-0 small lh-125 border-bottom border-gray">
														          
					            <div class="d-flex w-100">
					               <strong class="text-gray-dark">
					               		<a href="view.php' . DS . 'topic' . DS . $replyEntry['topic']. DS. 'p'. DS . Util::onPage($reply, $topicEntry['reply']). '#' .$reply. '">' .Parser::title($tagReply. $topicEntry['title']). '</a>
					               </strong>
					            </div>

								<div class="float-right">
				                    ' .Util::shortNum($topicEntry['view']). '&nbsp;<i class="fa fa-eye" title="' .$lang['view'] . Util::pluralize($topicEntry['view'], $lang['plural']). '"></i><br />
				                    ' .Util::shortNum(count($topicEntry['reply'])). '&nbsp;<i class="fa fa-comment-o" title="' .Util::pluralize(count($topicEntry['reply']), $lang['replies'], $lang['reply']). '"></i>
								</div>
													            
					            <div class="d-block">
					            	' .entryLink::manageReply($reply). ' <span class="user ' .$replyEntry['role']. '">' .Parser::title($replyEntry['trip']). '</span> 
					            	' .$lang['replied']. ' ' .Util::toDate($reply, $config['date_format']). '
					            </div>

			                    <p class="tile-title">		                    
			                        	<a class="btn btn-sm" style="background-color:' .$forumEntry['badge_color']. '!important;color:white!important" href="view.php' . DS . 'forum' . DS . $topicEntry['forum']. '"><i class="' .$forumEntry['font_icon']. '"></i> ' .$forumEntry['name']. '</a>
			                    </p>
			                        					            				            
					          </div>
					          
					        </div>';
						}
					}
						
	                $out['content'] .= '	        
		      </div>
		      ' .Paginate::pageLink($p, $total, 'index.php' . DS . 'news' . DS . 'o'). '		
			</section>
			<!-- /.container -->';
?>