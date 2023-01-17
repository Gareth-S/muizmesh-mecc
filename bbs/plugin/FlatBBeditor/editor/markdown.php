<?php 
	$data["idContent"] = 'content';
	$html .= '  
	<section id="' .$plugin. '" class="btn-toolbar mb-2" role="toolbar">

		<div class="btn-group btn-group-sm mr-2" role="group" aria-label="First group">
			' .($data["font_size"] ? '
			<select id="bbcode1" onchange="EditorTagInsert(\'' .$data['idContent']. '\', \'$1 \', \'\', this.value);" class="custom-select mr-sm-2">
				<option selected>' .$lang["font_size"]. '</option>
				<option value="#">H1</option>
				<option value="##">H2</option>
				<option value="###">H3</option>
				<option value="####">H4</option>
				<option value="#####">H5</option>
				<option value="######">H6</option>					
			</select>' : '').
			
			($data["font_color"] ? '
			<select id="bbcode2" onchange="EditorTagInsert(\'' .$data["idContent"]. '\', \'[color=$1]\', \'[\/color]\', this.value);" class="custom-select mr-sm-2">
				<option selected>' .$lang["font_color"]. '</option>
				<option value="#7bd148" style="background-color:#7bd148">Green</option>
				<option value="#5484ed" style="background-color:#5484ed">Bold blue</option>
				<option value="#a4bdfc" style="background-color:#a4bdfc">Blue</option>
				<option value="#46d6db" style="background-color:#46d6db">Turquoise</option>
				<option value="#7ae7bf" style="background-color:#7ae7bf">Light green</option>
				<option value="#51b749" style="background-color:#51b749">Bold green</option>
				<option value="#fbd75b" style="background-color:#fbd75b">Yellow</option>
				<option value="#ffb878" style="background-color:#ffb878">Orange</option>
				<option value="#ff887c" style="background-color:#ff887c">Red</option>
				<option value="#dc2127" style="background-color:#dc2127">Bold red</option>
				<option value="#dbadff" style="background-color:#dbadff">Purple</option>
				<option value="#e1e1e1" style="background-color:#e1e1e1">Gray</option>
			</select>' : ''). '
		</div>
		
		<div class="btn-group btn-group-sm mr-2" role="group" aria-label="Second group">	
			' .($data["bold"] ? '
			<button id="bbcode3" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data['idContent']. '\', \'**\', \'**\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["bold"]. '">
				<i class="fa fa-bold" aria-hidden="true"></i>
			</button>' : '').
			
			($data["italic"] ? '
			<button id="bbcode4" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data['idContent']. '\', \'*\', \'*\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["italic"]. '">
				<i class="fa fa-italic" aria-hidden="true"></i>
			</button>' : '').
			
			($data["underline"] ? '
			<button id="bbcode5" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[u]\', \'[\/u]\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["underline"]. '">
				<i class="fa fa-underline" aria-hidden="true"></i>
			</button>' : '').

			($data["strike"] ? '
			<button id="bbcode6" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data['idContent']. '\', \'~~\', \'~~\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["strike"]. '">
				<i class="fa fa-strikethrough" aria-hidden="true"></i>
			</button>' : ''). '		
		</div>

		<div class="btn-group btn-group-sm mr-2" role="group" aria-label="Third group">
			' .($data["code"] ? '	
			<button id="bbcode7" type="button" class="btn btn-dark btn-sm" onclick=\'EditorTagInsert("' .$data['idContent']. '", "```", "```", 0);\' data-toggle="tooltip" data-placement="top" title="' .$lang["code"]. '">
				<i class="fa fa-code" aria-hidden="true"></i>
			</button>' : '').
			
			($data["quote"] ? '
			<button id="bbcode8" type="button" class="btn btn-dark btn-sm" onclick=\'EditorTagInsert("' .$data['idContent']. '", "> ", "", 0);\' data-toggle="tooltip" data-placement="top" title="' .$lang["quote"]. '">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
			</button>' : ''). 
			
			($data["hide"] ? '
			<button id="bbcode9" type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title="' .$lang["hide"]. '"></i>
			</button>
			<div class="dropdown-menu">
			    <a href="javascript:void(0)" class="dropdown-item" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[hide=Show more&hellip;]\', \'[\/hide]\', 0);"><i class="fa fa-eye" aria-hidden="true"></i> Visible for all</a>
			    <a href="javascript:void(0)" class="dropdown-item" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[hideuser=Show more for users&hellip;]\', \'[\/hideuser]\', 0);"><i class="fa fa-user" aria-hidden="true"></i> Visible only for logged</a>
			    <a href="javascript:void(0)" class="dropdown-item" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[hideworker=Show more for staff&hellip;]\', \'[\/hideworker]\', 0);"><i class="fa fa-user-secret" aria-hidden="true"></i> Visible only for Staff</a>
			</div>' : ''). '									
		</div>
		
		<div class="btn-group btn-group-sm mr-2" role="group" aria-label="Four group">
			' .($data["align_center"] ? '
			<button id="bbcode10" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[center]\', \'[\/center]\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["align_center"]. '">
				<i class="fa fa-align-center" aria-hidden="true"></i>
			</button>' : '').
			
			($data["align_right"] ? '			
			<button id="bbcode11" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[right]\', \'[\/right]\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["align_right"]. '">
				<i class="fa fa-align-right" aria-hidden="true"></i>
			</button>' : ''). '			
		</div>	
		
		<div class="btn-group btn-group-sm mr-2" role="group" aria-label="Five group">
			' .($data["insert_picture_width"] ? '
			<button id="bbcode12" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[img width=300,height=200]\', \'[\/img]\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["insert_picture_width"]. '">
				<i class="fa fa-file-image-o " aria-hidden="true"></i>
			</button>' : '').
			
			($data["insert_picture"] ? '		
			<button id="bbcode13" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data['idContent']. '\', \'![Alt picture](https://)\', \'\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["insert_picture"]. '">
				<i class="fa fa-picture-o" aria-hidden="true"></i>
			</button>' : '').
			
			($data["insert_link"] ? '
			<button id="bbcode14" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data['idContent']. '\', \'[Markdown Guide](https://www.markdownguide.org)\', \'\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["insert_link"]. '">
				<i class="fa fa-link" aria-hidden="true"></i>
			</button>' : '').
			
			($data["insert_youtube_video"] ? '			
			<button id="bbcode15" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[youtube]6MgltQGG568\', \'[\/youtube]\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["insert_youtube_video"]. '">
				<i class="fa fa-youtube" aria-hidden="true"></i>
			</button>' : '').
			
			($data["insert_dailymotion_video"] ? '	
			<button id="bbcode16" type="button" class="btn btn-dark btn-sm" onclick="EditorTagInsert(\'' .$data["idContent"]. '\', \'[dailymotion]x5sdnol\', \'[\/dailymotion]\', 0);" data-toggle="tooltip" data-placement="top" title="' .$lang["insert_dailymotion_video"]. '">
				<i class="fa fa-video-camera" aria-hidden="true"></i>
			</button>' : '').
			
			($data["fullscreen_editor"] ? '
			<button id="fullscreen" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="' .$lang["fullscreen_editor"]. '">
				<i class="fa fa-arrows-alt" aria-hidden="true"></i>
			</button>' : ''). '					
		</div>
		
		' .($data["upload_picture"] ? '	
		<div class="input-group">
		  <div class="custom-file">
		    <input id="upload-file" type="file" class="custom-file-input" accept="image/gif,image/jpeg,image/png">
		    <label class="custom-file-label">' .$lang["upload_picture"]. '</label>
		  </div>		  		  		  		  
		</div>' : ''). '	
																
	</section>';	   
?>