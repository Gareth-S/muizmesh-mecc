<?php
			
			# ON RETOURNE LES DERNIERS SUJETS & RÉPONSES		          	
			$out['content'] .= '
			<section class="table-responsive" id="timeline">		
		    <h6 class="border-bottom border-gray pb-2 mt-3 mb-0">
		        ' .Util::pluralize(count($topicEntry['reply']), $lang['last_post'].$lang['plural'], $lang['last_post']). '
		    </h6>	
		    		
			<table class="table table-hover table-borderless table-sm">
			  <thead>
			    <tr>
			      <th scope="col">' .$lang['topic']. '</th>
			      <th scope="col">' .$lang['forum']. '</th>
			      <th scope="col">' .$lang['user']. '&nbsp;</th>
			      <th scope="col">' .$lang['replies']. '</th>
			      <th scope="col">' .$lang['view'] . $lang['plural']. '</th>
			      <th scope="col">' .$lang['activity']. '</th>
			    </tr>
			  </thead>
			  <tbody>';
	              
					rsort($mixes); // For sort the pagination!
					foreach(Paginate::viewPage($mixes, $p, $nb) as $mix)			
					#foreach($mixes as $mix)
					{
						if(flatDB::isValidEntry('topic', $mix))
						{
							$topic = $mix;
							$topicEntry = flatDB::readEntry('topic', $topic);
							$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
							$tagMix = (isset($topicEntry['tag']) ? $topicEntry['tag']. ' ' : '');
							$out['content'] .= '
							<tr class="scroll">															
								<td colspan="1">
					               <a href="view.php' . DS . 'topic' . DS . $topic. '">' .Parser::title($tagMix. $topicEntry['title']). '</a>
					               <br>
					               ' .entryLink::manageTopic($topic). ' <span class="user ' .$topicEntry['role']. '">' .Parser::title($topicEntry['trip']). '</span>
								</td>
								
								<td>
									<a class="btn btn-sm" style="background-color:' .$forumEntry['badge_color']. '!important;color:white!important" href="view.php' . DS . 'forum' . DS . $topicEntry['forum']. '">
										<i class="' .$forumEntry['font_icon']. '"></i> ' .$forumEntry['name']. '
									</a>
								</td>
								
								<td>' .Plugin::hook('profile', $topicEntry['trip']). '</td>

								<td title="This topic has ' .Util::shortNum(count($topicEntry['reply'])). ' replies">						    
								    <span class="number">' .Util::shortNum(count($topicEntry['reply'])). '</span>
								</td>
			
								<td>
									<span title="this topic has been viewed ' .Util::shortNum($topicEntry['view']). ' times">
										' .Util::shortNum($topicEntry['view']). '
									</span>
								</td>
								
								<td>
									' .Util::toDate($topic, $config['date_format']). '
								</td>							
							</tr>';
						}
						else
						{
							$reply = $mix;
							$replyEntry = flatDB::readEntry('reply', $reply);
							$topicEntry = flatDB::readEntry('topic', $replyEntry['topic']);
							$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
							$tagReply = (isset($topicEntry['tag']) ? $topicEntry['tag']. ' ' : '');
							$out['content'] .= '
							<tr class="scroll">															
								<td colspan="1">
					               <a href="view.php' . DS . 'topic' . DS . $replyEntry['topic']. DS. 'p'. DS . Util::onPage($reply, $topicEntry['reply']). '#' .$reply. '">' .Parser::title($tagReply. $topicEntry['title']). '</a>
					               <br>
					               ' .entryLink::manageReply($reply). ' <span class="user ' .$replyEntry['role']. '">' .Parser::title($replyEntry['trip']). '</span>
								</td>
								
								<td>
									<a class="btn btn-sm" style="background-color:' .$forumEntry['badge_color']. '!important;color:white!important" href="view.php' . DS . 'forum' . DS . $topicEntry['forum']. '">
										<i class="' .$forumEntry['font_icon']. '"></i> ' .$forumEntry['name']. '
									</a>
								</td>

								<td>' .Plugin::hook('profile', $replyEntry['trip']). '</td>
								
								<td title="This topic has ' .Util::shortNum(count($topicEntry['reply'])). ' replies">						    
								    <span class="number">' .Util::shortNum(count($topicEntry['reply'])). '</span>
								</td>
			
								<td>
									<span title="this topic has been viewed ' .Util::shortNum($topicEntry['view']). ' times">
										' .Util::shortNum($topicEntry['view']). '
									</span>
								</td>
								
								<td>
									' .Util::toDate($reply, $config['date_format']). '
								</td>							
							</tr>';
						}
					}
						
	                $out['content'] .= '
			  </tbody>
			</table>	                	        
		    ' .Paginate::pageLink($p, $total, 'index.php' . DS . 'news' . DS . 'o'). '	
			</section>
			<!-- /.container -->';
?>