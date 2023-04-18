<?php
		# TABLEAU DES FORUMS
		$out['content'] .= '
		<div class="table-responsive-md">
			<table class="table table-sm">
				<thead class="thead-light">
					<tr>
						<th scope="col">&nbsp;</th>
						<th scope="col">' .$lang['forum']. '</th>
						<th scope="col">' .$lang['topic']. '</th>
						<th scope="col">' .$lang['activity']. '</th>
					</tr>
				</thead>
				<tbody>';			
				foreach(array_values($forums) as $key => $forum)
				{
					$forumEntry		 = flatDB::readEntry('forum', $forum);
					$lang[$forum] 	 = $forumEntry['name'];
					$controlStr 	.= HTMLForm::select($forum, $options, $key+1);
					$privateforums = isset($forumEntry['private_forum']) ? $forumEntry['private_forum'] || User::isWorker() : '';
					# Lecture dernier message
					$topics = $forumEntry['topic'];
					sort($topics);
					foreach($topics as $topic)
					{
						$topicEntry = flatDB::readEntry('topic', $topic);
						# Date de la dernière discussion avec format personnalisable.
						$lastTopic = '<span class="user ' .$topicEntry['role']. '">' .Parser::title($topicEntry['trip']). '</span>&nbsp;
						' .$lang['started']. ' ' .Util::toDate($topic, $config['short_date_format'], false);
						# Ajout de la date de la dernière réponse $config['date_format']
						if($topicEntry['reply']) {
							foreach($topicEntry['reply'] as $reply)
							{
								$replyEntry = flatDB::readEntry('reply', $reply);
								$lastReply = '
									<a title="' .$lang['more']. '" class="float-right" href="view.php' . DS . 'topic' . DS . $replyEntry['topic']. DS. 'p'. DS . Util::onPage($reply, $topicEntry['reply']). '#' .$reply. '"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
									<span class="user ' .$replyEntry['role']. '">' .Parser::title($replyEntry['trip']). '</span>&nbsp;
									' .$lang['replied']. ' ' .Util::toDate($reply, $config['short_date_format'], false);
							}					
						}								
					}					
					#if($privateforums) continue;
					$lastTopic = isset($lastTopic) ? $lastTopic : '-';
					$lastReply = isset($lastReply) ? $lastReply : '-';
					$out['content'] .= '
					<tr>
						<td style="color:' .$forumEntry['badge_color']. '">
							<i class="fa-3x ' .$forumEntry['font_icon']. '"></i>
						</td>
						<td>' .entryLink::manageForum($forum). '
							<a class="font-weight-bold" href="view.php' . DS . 'forum' . DS . $forum. '">
								' .$forumEntry['name']. '
							</a>
							<div class="font-weight-light text-muted">
								<p class="text-break" style="max-width:400px">&raquo; ' .$forumEntry['info']. '</p>
							</div>
						</td>
						<td class="text-centered">
							<span class="badge badge-secondary">' .Util::shortNum(count($forumEntry['topic'])). '</span>
						</td>
						<td class="small">
							' .$lastTopic. '<br/>
							' .$lastReply. '
						</td>
					</tr>';
				}
			$out['content'] .= '
				</tbody>
			</table>
		</div>' .
		(User::isAdmin() ? '
		<p>
		  <button class="btn btn-secondary btn-sm" type="button" data-toggle="collapse" data-target="#sortForums" aria-expanded="false" aria-controls="sortForums">
		    <i class="fa fa-sort-numeric-desc"></i> ' .$lang['sort_forums']. '
		  </button>
		</p>
		<div class="collapse mb-4" id="sortForums">
		  <div class="card card-body col-6">
		    ' .HTMLForm::form('index.php/forum',
		    	$controlStr.
				HTMLForm::simple_submit(). '
		  </div>
		</div>') : '');	
?> 