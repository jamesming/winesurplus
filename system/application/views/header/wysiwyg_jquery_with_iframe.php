
<script type="text/javascript" language="Javascript">
	
					$(document).ready(function() {
						
						if(  window.parent.document.getElementById('top_edit_frame')  &&  window.parent.top_edit_frame.$('#switch').val() == 0){  // EDIT MODE
					  	
					  	$('.wysiwyg_div_link').css({cursor:'pointer', background:'lightyellow'}).fancyZoom().click(function(event) {
					  		window.parent.bottom_edit_frame.$("#embed_video").css({visibility:'hidden'});
								$("#div_id_to_edit").val($(this).attr('id'));
								$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/wysiwyg');
							});
					  	
						};
						
						
						
						
//						$('.wysiwyg_div_link').each(
//		
//								function( i ){
//									
//					 					var div_to_update = $(this);
//					 					
//										$.post("<?php echo base_url(). 'index.php/dashboard/get'; ?>",{
//											table: 'content',
//											field: $(this).attr('id')
//											},function(data) {
//														if( data  != '&nbsp;'){
//														// 	div_to_update.html(data);
//														};
//											});
//								}
//								
//						);		

	
					});  // END $(document).ready(function()


</script>

<div id="wysiwyg_div"  style='height:590px;display:none'  >
	<iframe id="iframe_content_text" scrolling="no"  style="
		width:650px;
		height:570px;
		margin: 0; 
		padding: 0; 
		border: 0px solid black;
		" 
		frameborder="0" src=""  >
		
	    <p>Your browser does not support iframes.</p>
	    
	</iframe>
</div>		

<input id="div_id_to_edit" type="hidden" value="">
<input id="product_id" type="text" value="1">