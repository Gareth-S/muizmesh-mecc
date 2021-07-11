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
				$forumEntry = flatDB::readEntry('forum', $forum);
				$lang[$forum] = $forumEntry['name'];
				$controlStr .= HTMLForm::select($forum, $options, $key+1);
				$out['content'] .= '
				<tr>
					<td style="color:' .$forumEntry['badge_color']. '">
						<i class="fa-3x ' .$forumEntry['font_icon']. '"></i>
					</td>
					<td>
						' .entryLink::manageForum($forum). '<a class="font-weight-bold" href="view.php' . DS . 'forum' . DS . $forum. '">' .$forumEntry['name']. '</a>
						<p class="font-weight-light text-muted"> &raquo; ' .$forumEntry['info']. '</p>
					</td>
					<td class="text-centered">
						<span class="badge badge-secondary">' .Util::shortNum(count($forumEntry['topic'])). '</span>
					</td>
					<td class="small">
						' .($forumEntry['topic']? Util::toDate(end($forumEntry['topic'])) : '---'). '
					</td>
				</tr>';
			}
			$out['content'] .= '
				</tbody>
			</table>
		</div>' .
		  (User::isAdmin()? '
		<p>
		  <button class="btn btn-secondary btn-sm" type="button" data-toggle="collapse" data-target="#sortForums" aria-expanded="false" aria-controls="sortForums">
		    <i class="fa fa-sort-numeric-desc"></i> ' .$lang['sort_forums']. '
		  </button>
		</p>
		<div class="collapse mb-4" id="sortForums">
		  <div class="card card-body col-6">
		    ' .HTMLForm::form('index.php/forum',$controlStr.HTMLForm::simple_submit(). '
		  </div>
		</div>') : '');	
?> 