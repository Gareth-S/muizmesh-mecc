<?php
	# FIL D’ARIANE
	$out['content'] .= '
			<!-- Breadcrumb -->
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">
			    	<a href="index.php" data-toggle="tooltip" data-placement="top" title="' .$lang['home']. '">
			    		<i class="fa fa-home" aria-hidden="true"></i>
			    	</a>
			    </li>
			    <li class="breadcrumb-item"><a href="index.php' . DS . 'forum">' .$lang['forum']. '</a></li>
			    <li class="breadcrumb-item"><a href="view.php' . DS . 'forum' . DS . $topicEntry['forum']. '">' .$forumEntry['name']. '</a></li>
			    <li class="breadcrumb-item active" aria-current="page">' .Parser::title($tag . $out['subtitle']). '</li>			    
			  </ol>			  
			</nav>	
			
			<!-- Topic -->
			<div class="media my-3 p-3 bg-white rounded box-shadow">
			
			  <figure class="figure p-3" data-toggle="modal" data-target="#modalProfil_' .$_GET['topic']. '">
			  	' .Plugin::hook('profile', $topicEntry['trip']). '			  	
			  </figure>			
			  
			  <div class="media-body">
			  	' .Plugin::hook('topTopic', $_GET['topic']). '

	            <div class="float-right">          		
					' .($topicEntry['locked'] ? '<span class="btn btn-action btn-primary btn-sm circle"><i class="fa fa-lock"></i></span> ' : ''). ' 
					' .(isset($forumEntry['pinnedTopic'][$_GET['topic']]) ? '<span class="btn btn-action btn-primary btn-sm circle"><i class="fa fa-thumb-tack"></i></span>' : ''). '				
	            </div>
		    
			    <div class="mt-0">	
			    	' .entryLink::manageTopic($_GET['topic']). '<h5>' .Parser::title($out['subtitle']). '</h5> 
			    	<span class="user ' .$topicEntry['role']. '">' .Parser::title($topicEntry['trip']). '</span>
			    	<span class="text-muted"><i class="fa fa-calendar"></i> ' .Util::toDate($_GET['topic'], $config['date_format']). '</span>
			    </div>
			    
			    <hr class="my-2">
            			    
			    <div style="width: 100%; word-break: break-all">' .Parser::content($topicEntry['content']). '</div>		            
			    ' .$lastedited. '	            
			    ' .($getTopic ? '<hr/><span style="color:#2D8C61;font-size:14px !important"><i class="fa fa-thumb-tack"></i> ' .Util::lang('%s stickied_discussion', $lang[$role]). '</span>' : '').
			            
			    ($topicEntry['locked'] ? '<hr/><span style="color:#d13e32;font-size:14px !important"><i class="fa fa-lock"></i> ' .Util::lang('%s locked_discussion', $lang[$role]). '</span>' : ''). '
						
				<div class="hook_topic">' .Plugin::hook('afterTopic', $_GET['topic']). '</div>	

				<hr />
                <div class="btn-group btn-group-sm">
					' .(!$topicEntry['locked']? 
					'<a class="btn btn-success" href="view.php' . DS . 'topic' . DS . $_GET['topic'] . DS . 'p' . DS . Util::onPage($_GET['topic'], $topicEntry['reply']). '#replyform" data-toggle="tooltip" data-placement="top" title="' .$lang['newreply']. '"><i class="fa fa-reply"></i></a> 
					' .$report : '<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="' .$lang['no_reply']. '" disabled><i class="fa fa-lock"></i></button>'). 
					Plugin::hook('buttonTopic', $_GET['topic']). '									
                </div>
                                				
			  </div>
			  <!-- END media-body -->
			</div>
            <!-- END Topic --> 
                
			<!-- Modal Topic Profil -->
			<div class="modal fade" id="modalProfil_' .$_GET['topic']. '" tabindex="-1" role="dialog" aria-labelledby="modalProfil_' .$_GET['topic']. '" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			    
			      <div class="modal-header">
			        <h5 class="modal-title user ' .$topicEntry['role']. '">
			        	' .$topicEntry['trip']. '
			        </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      
			      <div class="modal-body">
			      	<div class="card-subtitle">' .$lang['original_message']. '</div>';
				  	if($topicEntry['role'] === 'admin') $out['content'] .= '<p class="badge badge-dark"><i class="fa fa-user-secret"></i> ' .$lang['admin']. '</p>';        
				  	if($topicEntry['role'] === 'worker') $out['content'] .= '<p class="badge badge-dark"><i class="fa fa-user"></i> ' .$lang['worker']. '</p>';
				  	$out['content'] .= '
				  	<p class="centered">'.
				        Plugin::hook('profile', $topicEntry['trip']). '
				    </p>'. (User::isWorker()? '
					<p>' .entryLink::userBan($topicEntry['ip']). '<a class="badge badge-dark" href="http://whois.domaintools.com/' .$topicEntry['ip']. '" onclick="window.open(this.href); return false;">' .$topicEntry['ip']. '</a></p>
					' .$mail : ''). '
					<p><a class="btn btn-secondary btn-sm" href="search.php?topic=' .$topicEntry['trip']. '"><i class="fa fa-search" aria-hidden="true"></i> ' .$lang['user_activity']. '</a></p>	
			      </div>
			      
			      <div class="modal-footer text-muted">
			        <i class="fa fa-calendar"></i>&nbsp;' .Util::toDate($_GET['topic'], $config['date_format']). '
			      </div>
			      
			    </div>
			  </div>
			</div>
			<!-- END Modal Topic Profil -->' .
            Plugin::hook('bottomTopic', $_GET['topic']);
?>