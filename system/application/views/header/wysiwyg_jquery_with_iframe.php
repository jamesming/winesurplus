
<script type="text/javascript" language="Javascript">
	
					$(document).ready(function() {
						
						if(  window.parent.document.getElementById('top_edit_frame')  && window.parent.top_edit_frame.$('#switch').val() == 0){  // EDIT MODE

						  	$('.wysiwyg_div_link').css({cursor:'pointer',background:'lightyellow'})
						  	.fancyZoom().click(function(event) {
									window.parent.bottom_edit_frame.$("#div_id_to_edit").val($(this).attr('id'));
									window.parent.bottom_edit_frame.$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/wysiwyg');
								});
							
								$('.product_image_link').css({cursor:'pointer'})
								.fancyZoom().click(function(event) {
									$("#iframe_content_image").attr('src','<?php echo base_url();    ?>index.php/page/upload_image_form/' + $('#product_id').val());
								});		
								
								$('.edit_div').show();
								
						};
						
	
					});  // END $(document).ready(function()

					function wysiwyg(){ // CALLED AFTER UPDATE OR ADD PRODUCT INORDER TO BRING DEFAULT CONTENT ONTO PAGE
							
			  			$('.wysiwyg_div_link')
							.each(  function( i ){ 
								
								var div_to_update = $(this);
								
								$.post("<?php echo base_url(). 'index.php/page/get'; ?>",{
									table: 'contents',
									field: div_to_update.attr('id'),
									content_id:   window.parent.top_edit_frame.$('#product_id option:selected').attr('content_id')  
									},function(data) {
										
										div_to_update.html(data);

									});
							});
							
								
							$.post("<?php echo base_url(). 'index.php/page/does_product_image_exit'; ?>",{
								product_id: $('#product_id option:selected').val()  
								},function(data) {
										if( data == 'no_image'){
											window.parent.bottom_edit_frame.$('#product_img').attr('src','<?php echo base_url();    ?>images/no_image.png?random=<?php echo rand();    ?>')
										}else{
											window.parent.bottom_edit_frame.$('#product_img').attr('src','<?php echo base_url();    ?>uploads/product_images/' +  $('#product_id option:selected').val() +  '/image.png?random=<?php echo rand();    ?>')
										};
								});
								
							
					}
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

