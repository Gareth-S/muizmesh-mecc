<?php if(!isset($out)) exit; ?>
<?php
			# LISTE DES FORUMS
			$forums = flatDB::readEntry('config', 'forumOrder');
			if($forums)
			{            
				foreach(array_values($forums) as $key => $forum)
				{
					$forumEntry = flatDB::readEntry('forum', $forum);
					$lang[$forum] = $forumEntry['name'];
					echo '<li><span style="color:' .$forumEntry['badge_color']. '"><i class="' .$forumEntry['font_icon']. '"></i></span> <a href="view.php' . DS . 'forum' . DS . $forum. '">' .$forumEntry['name']. '</a>
					</li>';
				}
			}
			else
				echo '<li>' .$lang['no-forum']. '</li>';
?> 