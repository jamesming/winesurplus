<html>
<head>
	
<?php  $this->load->view('header/header_css.php');   ?>
<title>scenecredit</title>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/jquery-1.3.2.min.js" type="text/javascript"></script>
	

<script language="Javascript" type="text/javascript">
	
			$(document).ready(function() {
				
				$('#publish').click(function(event) {
					window.open('<?php echo  base_url();   ?>index.php/page/index/','mywindow');
				});		
				
				$('#calendar').click(function(event) {
					window.parent.bottom_edit_frame.$('#calendar').click()
				});			
				
				$('#add_product').click(function(event) {
					window.parent.bottom_edit_frame.$('#add_product').click()
				});
				
				$('#edit_product').click(function(event) {
					window.parent.bottom_edit_frame.$('#edit_product').click()
				});											
				
							
				
				$('#clickme').click(function(event) {
					
					  if( $('#switch').val() == 1){  // EDIT MODE
					  	
					  	$(this).css({background:'red'});
					  	
					  	window.parent.bottom_edit_frame.$('#menu, .edit_embed_div, .edit_div').show();
					  	
					  	window.parent.bottom_edit_frame.$('.wysiwyg_div_link').css({cursor:'pointer',background:'lightyellow'})
					  	.fancyZoom().click(function(event) {
								window.parent.bottom_edit_frame.$("#div_id_to_edit").val($(this).attr('id'));
								window.parent.bottom_edit_frame.$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/wysiwyg');
							});
							
							window.parent.bottom_edit_frame.$('.product_image_link').css({cursor:'pointer'})
							.fancyZoom().click(function(event) {
								window.parent.bottom_edit_frame.$("#iframe_content_image").attr('src','<?php echo base_url();    ?>index.php/page/upload_image_form/' + window.parent.bottom_edit_frame.$('#product_id').val());
							});		

					  	$('#switch').val('0');
					  	
					  }else{ // PREVIEW MODE
					  	
					  	$(this).css({background:'orange'});
					  	
					  	window.parent.bottom_edit_frame.$('.wysiwyg_div_link').css({cursor:'default', background:'none'}).unbind();
					  	
					  	window.parent.bottom_edit_frame.$('#menu, .edit_embed_div, .edit_div').hide();
					  	
					  	$('#switch').val('1');
					  	
							window.parent.bottom_edit_frame.$('.profile_image_link').css({cursor:'default'}).unbind();	
					  	
					  };
					
				})	
				
				
				$('#logout').click(function(event) {
					
					window.parent.location.href='<?php echo  base_url();   ?>index.php/home/signin';
					
				})	
				
				$('.change_deal').click(function(event) {
					if( $(this).attr('dir')=='back'){
						
						if($('#product_id option:selected').prev().val() != null ){
								window.parent.bottom_edit_frame.location.href='<?php echo  base_url();   ?>index.php/page/index/' + $('#product_id option:selected').prev().attr('content_id');
								$('#product_id option:selected').prev().attr('selected',true);
						}
						;
					}else{
						
						if($('#product_id option:selected').next().val() != null ){
								window.parent.bottom_edit_frame.location.href='<?php echo  base_url();   ?>index.php/page/index/' + $('#product_id option:selected').next().attr('content_id');
								$('#product_id option:selected').next().attr('selected',true);
						};

					};
				})				
				
				
				$('#product_id').change(function() {
					
					window.parent.bottom_edit_frame.$('#product_id').val(    $('#product_id option:selected').val()   );
					window.parent.bottom_edit_frame.$('#content_id').val(    $('#product_id option:selected').attr('content_id')   );

					//window.parent.bottom_edit_frame.$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/calendar/' + window.parent.bottom_edit_frame.$('#content_id').val() );
					//window.parent.bottom_edit_frame.$('#logo_img').click();
					
					window.parent.bottom_edit_frame.$('body').click();


					window.parent.bottom_edit_frame.$('.wysiwyg_div_link')
					.each(  function( i ){ 
						
						var div_to_update = $(this);
						
						$.post("<?php echo base_url(). 'index.php/page/get'; ?>",{
							table: 'contents',
							field: $(this).attr('id'),
							content_id: $('#product_id option:selected').attr('content_id')  
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

		    });
		    
		    
				<?php   
		
				/**
				 *  THIS IS THE HACK FOR CHROME BUG
				 *
				 */
				if( $this->tools->browserIschrome()){?>
					
										setTimeout(function() { 											
						
											if( window.parent.bottom_edit_frame.$('#hack_to_fix_chrome_bug').val() == ''){
												
													window.parent.bottom_edit_frame.location.reload();
												
											};
															 
															 											
										}, 500);
							
														
				<?php
				};
					?>	
				
						
				
			});
			
			
</script>
	
</head>

<style>

.div_buttons{
	cursor:pointer; 
	background:orange;
	width:120px;
	color:white;
	text-align:center;
	height:20px;
	margin-left:10px;
	margin-top:4px;
	padding-top:2px;
	float:left;
	vertical-align:middle;
	font-weight:bold;
}
.change_deal{
	font-weight:bold;	
	font-size:36px;
	cursor:pointer;
}

</style>

<body>
	<div  class='container '    >
		<table   style='height:60px;border:0px solid gray'  >
			<tr>
				<td width=50% style='vertical-align:middle'>
					
					
							<div id='clickme'  class='div_buttons rounded_border'     >edit mode</div>
							
							<div id='calendar'  class='div_buttons rounded_border'   style='background:purple;'  >book deal</div>
							
							<div id='publish'  class='div_buttons rounded_border'    style='background:darkgreen;'>publish</div>  
					
							
							<div id='logout'   class='div_buttons rounded_border'   style='background:red'   >logout</div>
					

							<div id='add_product'  class='div_buttons rounded_border'   style='background:lightgreen;'  >add deal</div>
							<div id='edit_product'  class='div_buttons rounded_border'   style='background:lightgreen;'  >edit deal</div>
												
				</td>
				<td>

							<select id='product_id' name='product_id' >
								
								<?php  echo $option_tags;   ?>
								
							</select><br>						
<!--						
						<span dir='back' class=' change_deal'     >&laquo;</span>  
						<span dir='forward' class=' change_deal' >&raquo;</span>
					-->

						<span dir='back' class=' change_deal'     >left</span>&nbsp;&nbsp;
						<span dir='forward' class=' change_deal' >right</span>


				</td>
				
				
				<td>
												<div id='error'  class='div_buttons'    style='height:50px;background:lightgray;border:1px solid gray'>error log</div>  
				</td>	

				

			</tr>
		</table>
		

	</div>

<input id="switch" type="hidden" value="1">




