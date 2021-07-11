<?php 
	# On affiche notre formulaire de recherche		
	$out['content'] .= '
	<div class="text-center">
      	<p class="lead">' .$lang['search_desc']. '</p>
    </div>
    <div class="row justify-content-center mb-5">
		<div class="card col-md-8">
			<div class="card-body">'.
			HTMLForm::form('search.php', '
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tagsList"><i class="fa fa-tags" aria-hidden="true"></i></button>
				</div>
				<input id="topic" name="topic" value="'.$url.'" type="search" class="form-control" placeholder="' .$lang['search_holder']. '" aria-label="" aria-describedby="basic-addon1">
			</div>'.
			HTMLForm::submit('search', '', 'fa fa-search')). '
			
			<!-- Modal -->
			<div class="modal fade" id="tagsList" tabindex="-1" role="dialog" aria-labelledby="tagsList" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">' .$lang['click_tag_search']. '</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        ' .$tagsOption. '
			      </div>
			    </div>
			  </div>
			</div>
			<!-- END Modal -->
			
			</div>
		</div>					
	</div>
	
	<div class="clearfix"></div>';
?>  