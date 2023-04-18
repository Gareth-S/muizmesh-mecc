<?php   
		# SUGGESTIONS DE SUJETS       	
		$out['content'] .= '
        <div class="media text-muted pt-3">
          <figure class="align-self-start mr-3">' .Plugin::hook('profile', $topicEntry['trip']). '</figure>
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          
            <div class="d-flex justify-content-between align-items-center w-100">
              <div class="text-gray-dark font-weight-bold">
              		' .entryLink::manageTopic($topic). ' <span class="user ' .$topicEntry['role']. '">' .Parser::title($topicEntry['trip']). '</span> 
              		' .$lang['started']. ' <a href="view.php' . DS . 'topic' . DS . $topic. '">' .Parser::title($tagSuggest . $topicEntry['title']). '</a>
              </div>
              
              <a class="btn btn-sm" style="background-color:' .$forumEntry['badge_color']. '!important;color:white!important" href="view.php' . DS . 'forum' . DS . $topicEntry['forum']. '"><i class="' .$forumEntry['font_icon']. '"></i> ' .$forumEntry['name']. '</a>
            </div>
            
            <span class="d-block">
            	 <i class="fa fa-eye" title="' .$lang['view'] . Util::pluralize($topicEntry['view'], $lang['plural']). '"></i> ' .Util::shortNum($topicEntry['view']). '
            	 <i class="fa fa-comment-o" title="' .Util::pluralize(count($topicEntry['reply']), $lang['replies'], $lang['reply']). '"></i> ' .count($topicEntry['reply']). '
            </span>
          </div>
        </div>';
?>