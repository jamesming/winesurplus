
<script type="text/javascript" language="Javascript">
	
					$(document).ready(function() {
						
						if(  window.parent.document.getElementById('top_edit_frame')  ){  
								$('#calendar').fancyZoom().click(function(event) {
										$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/calendar/' + $('#content_id').val() );
								});	
								$('#add_product').fancyZoom().click(function(event) {
										$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/iframe_form_to_add_or_edit_product/' );
								});			
								$('#edit_product').fancyZoom().click(function(event) {
										$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/iframe_form_to_add_or_edit_product/' + $('#product_id').val() + '/' +  $('#content_id').val());
								});		
								$('#jcrop_product_image').fancyZoom().click(function(event) {  // Found in: line 34 header/top_view.php
										$("#iframe_content_image").attr('src','<?php echo base_url();    ?>index.php/page/iframe_jcrop_form/' + $('#product_id').val() );
								});										
								
															
						};
						
						
						if(  window.parent.document.getElementById('top_edit_frame')  && window.parent.top_edit_frame.$('#switch').val() == 0){  // EDIT MODE

						  	$('.wysiwyg_div_link').css({cursor:'pointer',background:'lightyellow'})
						  	.fancyZoom().click(function(event) {
									window.parent.bottom_edit_frame.$("#div_id_to_edit").val($(this).attr('id'));
									window.parent.bottom_edit_frame.$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/wysiwyg');
								});
							

								//** UPLOAD IMAGE OF WINE
								$("#iframe_content_image").attr('src','<?php echo base_url();    ?>index.php/page/upload_image_form/' + $('#product_id').val());
								$('.product_image_link').css({cursor:'pointer'})
								.click(function(event) {
											var submit_iframe = document.getElementById('iframe_content_image').contentWindow;
											submit_iframe.$('#select_file').click();									
											submit_iframe.$('input[type=file]').change(function(e){
										  	submit_iframe.$('#uploadForm').submit();
											});
								});		


								$('.edit_div').show();
								
								
								
								
//								$('#add_button').click(function(event) {
//										$('#select_file').click();
//								});	
						  
								
								
								
								
								
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
					
					
					
					function open_jcrop(){
						
						setTimeout(function() { 											
							$('#jcrop_product_image').click();	//FOUND:line 16  header/wysiwyg_jquery_with_iframe.php		
						}, 500);	
						
					};		
					
					
					
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

