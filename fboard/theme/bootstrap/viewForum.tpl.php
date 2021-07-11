<?php
	$out['content'] .= '
	<div class="media text-muted pt-3">
		<figure class="mw-10">        
			' .Plugin::hook('profile', $topicEntry['trip']). '
		</figure>
		          
		<div class="media-body ml-3 pb-3 mb-0 small lh-125 border-bottom border-gray">
											          
		    <div class="d-flex w-100">
          		<h6>	                  			
		  			' .entryLink::manageTopic($topic) . Plugin::hook('titleTopic', $topic). '
		  			' .$tag. '<a href="view.php' . DS . 'topic' . DS . $topic. '">' .Parser::title($topicEntry['title']). '</a>					  			
		  		</h6>
		    </div>

			<div class="float-right">		
				' .(isset($forumEntry['pinnedTopic'][$topic]) ?        		
          		'<span class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="' .$lang['pinned']. '"><i class="fa fa-thumb-tack"></i></span> ' : '').
          		($topicEntry['locked'] ? '<span class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="' .$lang['locked']. '"><i class="fa fa-lock"></i></span> ':''). '
		  		<br />
	            ' .Util::shortNum($topicEntry['view']). '&nbsp;<i class="fa fa-eye" title="' .$lang['view'] . Util::pluralize($topicEntry['view'], $lang['plural']). '"></i><br />
	            ' .Util::shortNum(count($topicEntry['reply'])). '&nbsp;<i class="fa fa-comment-o" title="' .Util::pluralize(count($topicEntry['reply']), $lang['replies'], $lang['reply']). '"></i>  
			</div>
										            
		    <div class="d-block">
		        <span class="user ' .$topicEntry['role']. '">' .Parser::title($topicEntry['trip']). '</span> 
		        ' .$lang['started']. ' ' .Util::toDate($topic, $config['date_format']). ' 
		        ' .$lastedited. '
		    </div>
		          					            				            
		</div>
		          
	</div>';
?> 