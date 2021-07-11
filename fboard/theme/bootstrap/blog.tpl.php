<?php 
	# BLOG
	$out['content'] .= '     		
    <section id="timeline" class="container mt-4">	
              	
      <div class="row">
        <div class="col-md-8">';
		rsort($topics);
		foreach(Paginate::viewPage($topics, $p, $nb) as $topic)
		{
			$topicEntry  = flatDB::readEntry('topic', $topic);
			$tag 		 = isset($topicEntry['tag']) ? $topicEntry['tag']. ' ' : '';
			$name_filter = explode('@', $topicEntry['trip'], 2);
			$author 	 = $name_filter[0];
			$content 	 = $topicEntry['content'];
					
			$out['content'] .= '
	          <div class="card mb-4 box-shadow">
				  ' .catch_that_image($content). '	
	
				  <div class="card-body">
				    <h5 class="card-title">
				    	<a href="view.php' . DS . 'topic' . DS . $topic. '">
				    		' .Parser::title($tag . $topicEntry['title']). '
				    	</a>
				    </h5>
				    
				    <p class="card-text">
				    	' .Parser::summary(Parser::content(del_that_image($content), true), $config['post_summary'], '&hellip;'). '
				    </p>
				    
				    <a href="view.php' . DS . 'topic' . DS . $topic. '" class="btn btn-primary btn-sm">' .$lang['more']. ' <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				  </div>
				  
				  <div class="card-footer">
				    	<small class="text-muted">
					    	<i class="fa fa-user"></i>  ' .$author. ' &bull; 
					    	<i class="fa fa-calendar"></i>  ' .Util::toDate($topic, $config['date_format']). ' &bull; 
					    	<i class="fa fa-comments"></i>  ' .intval((count($topicEntry['reply']))). ' 
			    	</small>				  
				  </div>
				  
	          </div>';
		}
		$out['content'] .= '
        </div>
        
        <aside class="col-md-4">		
		    <article class="jumbotron text-center">
		        <h4 class="jumbotron-heading">' .$forumEntry['name']. '</h4>
		        <p class="lead text-muted">' .$forumEntry['info']. '</p>
		        <p>
		           <a href="view.php' . DS . 'forum' . DS . $forumID. '" class="btn btn-primary my-2"><i class="fa fa-commenting" aria-hidden="true"></i> ' .$lang['topic'].$lang['plural']. '</a>
		           <a href="index.php/forum" class="btn btn-secondary my-2"><i class="fa fa fa-comments-o" aria-hidden="true"></i> ' .$lang['forum'].$lang['plural']. '</a>
		        </p>
		    </article>
	    </aside>
      		
      </div>				
	</section><!-- /.container -->' .
	Paginate::pageLink($p, $total, 'blog.php' . DS . 'forum' . DS . $forumID);		
?>  