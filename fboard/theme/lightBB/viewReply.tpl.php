<?php          	
	# Boucle des Réponses
	$out['content'] .= '		
			<!-- Reply -->
			<div id="' .$reply. '" class="media my-3 p-3 bg-white rounded box-shadow">
			
			  <figure class="figure p-3" data-toggle="modal" data-target="#modalProfil_' .$reply. '">
			  	' .Plugin::hook('profile', $replyEntry['trip']). '
			  </figure>			
			  
			  <div class="media-body">
			    	            			  	
			    <div class="mt-0">
			    	' .entryLink::manageReply($reply). ' 
			    	<span class="user ' .$replyEntry['role']. '">' .Parser::title($replyEntry['trip']). '</span>&nbsp;
			    	<span class="text-muted"><i class="fa fa-calendar"></i> ' .Util::toDate($reply, $config['date_format']). '</span>
			    	<a class="float-right" href="view.php' . DS . 'topic' . DS . $replyEntry['topic'] . DS . 'p' . DS . Util::onPage($reply, $topicEntry['reply']). '#' .$reply. '" data-toggle="tooltip" data-placement="top" title="' .$lang['permalink']. '"><i class="fa fa-anchor"></i></a>
			    </div>
			    
			    <hr class="my-2">
			    			              			    
			    <div style="width:100%; word-break: break-all;">
			    	' .Parser::content($replyEntry['content']). '
			    </div>
			    ' .$lastReplyEdited. '
			    <div class="hook_topic">' .Plugin::hook('afterReply', $reply). '</div>				            						                  
                
                <hr />
                
                <div class="btn-group btn-group-sm">
					' .(!$topicEntry['locked']? 
					'<a class="btn btn-primary" href="add.php' . DS . 'reply' . DS . $_GET['topic']. DS. 'q' . DS .$reply. '" data-toggle="tooltip" data-placement="top" title="' .$lang['quote_reply']. '"><i class="fa fa-comments"></i></a>
					' .$report : '<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="' .$lang['no_reply']. '" disabled><i class="fa fa-lock"></i></button>'). 
					Plugin::hook('buttonReply', $reply). '									
                </div>    
                                        			
			  </div>
			  <!-- END media-body -->
			</div>
            <!-- END media -->    
			                
			<!-- Modal Reply Profil -->
			<div class="modal fade" id="modalProfil_' .$reply. '" tabindex="-1" role="dialog" aria-labelledby="modalProfil_' .$reply. '" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			    
			      <div class="modal-header">
			        <h5 class="modal-title user ' .$replyEntry['role']. '">
			        	' .$replyEntry['trip']. '
			        </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      
			      <div class="modal-body">
			      	<div class="card-subtitle">' .$lang['original_message']. '</div>';
				  	if($replyEntry['role'] === 'admin') $out['content'] .= '<p class="badge badge-dark"><i class="fa fa-user-secret"></i> ' .$lang['admin']. '</p>';        
				  	if($replyEntry['role'] === 'worker') $out['content'] .= '<p class="badge badge-dark"><i class="fa fa-user"></i> ' .$lang['worker']. '</p>';
				  	$out['content'] .= '
				  	<p class="centered">'.
				        Plugin::hook('profile', $replyEntry['trip']). '
				    </p>'. (User::isWorker()? '
					<p>' .entryLink::userBan($replyEntry['ip']). '<a class="badge badge-dark" href="http://whois.domaintools.com/' .$replyEntry['ip']. '" onclick="window.open(this.href); return false;">' .$replyEntry['ip']. '</a></p>
					' .$mailReply : ''). '
					<p><a class="btn btn-secondary btn-sm" href="search.php?topic=' .$replyEntry['trip']. '"><i class="fa fa-search" aria-hidden="true"></i> ' .$lang['user_activity']. '</a></p>	
			      </div>
			      
			      <div class="modal-footer text-muted">
			        <i class="fa fa-calendar"></i>&nbsp;' .Util::toDate($reply, $config['date_format']). '
			      </div>
			      
			    </div>
			  </div>
			</div>
			<!-- END Modal Reply Profil -->' .
            Plugin::hook('bottomReply', $reply);
?>