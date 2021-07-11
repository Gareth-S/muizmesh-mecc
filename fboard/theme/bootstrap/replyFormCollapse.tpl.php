<?php 
	# Reply Form collapse	
    $out['content'] .= '	   
	<div id="replyform" class="accordion">
	  <div class="card">
	  
	    <div class="card-header" id="headingOne">
	    	<i class="mt-4 float-right fa fa-caret-down" aria-hidden="true"></i>
	        <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseReply" aria-expanded="true" aria-controls="collapseReply">
	        	<svg class="rounded-circle" width="65" height="65" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="avatar"><rect width="100%" height="100%" fill="#868e96" fill-opacity="0.2"></rect></svg>
				<span class="h6 ml-3">' . $lang['reply_this_topic']. '</span>
	        </a>
	    </div>
	
	    <div id="collapseReply" class="collapse" aria-labelledby="headingReply" data-parent="#replyform">
	      <div class="card-body">' .
	    	HTMLForm::form('add.php' . DS . 'reply' . DS . $_GET['topic'],'
			<div class="form-row">
			    <div class="form-group col-md-6">
			        ' .HTMLForm::text('trip', '', 'text', 'form-control form-control-sm'). '
			    </div>
			    <div class="form-group col-md-6">
			        ' .HTMLForm::text('mail', '', 'mail', 'form-control form-control-sm', 'not_required', 'mail_desc'). '			        
			    </div>
			</div>'. 
			HTMLForm::textarea('content', Util::isGETValidEntry('reply', 'q')? '[quote]' .$_GET['q']. '[/quote]' : '', 'form-control form-control-sm', '', 5, 'write_post').
			HTMLForm::submit('reply', '', 'fa fa-comments-o')).
			HTMLForm::preview('content'). '
	      </div>
	    </div>
	    
	  </div>
	</div>';
?>