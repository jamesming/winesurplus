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
				
				
				$('#clickme').click(function(event) {
					
					  if( $('#switch').val() == 1){  // EDIT MODE
					  	
					  	$(this).css({background:'red'});
					  	
					  	window.parent.bottom_edit_frame.$('#menu, .edit_embed_div, .edit_div').show();
					  	
					  	window.parent.bottom_edit_frame.$('.wysiwyg_div_link').css({cursor:'pointer',background:'lightyellow'})
					  	.fancyZoom().click(function(event) {
								window.parent.bottom_edit_frame.$("#div_id_to_edit").val($(this).attr('id'));
								window.parent.bottom_edit_frame.$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/wysiwyg');
							});
							
							window.parent.bottom_edit_frame.$('.profile_image_link').css({cursor:'pointer'})
							.fancyZoom().click(function(event) {
								window.parent.bottom_edit_frame.$("#iframe_content_image").attr('src','<?php echo base_url();    ?>index.php/dashboard/upload_image_form');
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
				
				$('#product_id').change(function() {
					
					window.parent.bottom_edit_frame.$('#product_id').val(    $('#product_id option:selected').text()   );

					window.parent.bottom_edit_frame.$('.wysiwyg_div_link')
					.each(  function( i ){ 
						
						var div_to_update = $(this);
						
						$.post("<?php echo base_url(). 'index.php/page/get'; ?>",{
							table: 'contents',
							field: $(this).attr('id'),
							product_id: $('#product_id option:selected').text()  
							},function(data) {
								div_to_update.html(data);
							});
						
					});

		    });
						
				
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
	margin:10px;
	border:1px solid red;
	float:left;
	vertical-align:middle;
}

</style>

<body>
	<div  class='container '    >
		<table   style='height:60px;border:0px solid gray'  >
			<tr>
				<td style='vertical-align:middle'>
					
					
							<div id='clickme'  class='div_buttons rounded_border'     >edit mode</div>
							
							<div id='publish'  class='div_buttons rounded_border'    style='background:green;border:1px solid blue'>publish</div>  
					
							
							<div id='logout'   class='div_buttons rounded_border'   style='background:pink'   >logout</div>
					
							<div id='error'  class='div_buttons rounded_border'    style='background:lightgray;border:1px solid gray'>error log</div>  
												
					
				</td>
				<td>
					<select id='product_id' name='product_id'>
						
					<option value=1>1</option>
					<option value=1>2</option>
					<option value=1>3</option>
					<option value=1>4</option>
					<option value=1>5</option>
						
					</select>
				</td>
				

			</tr>
		</table>
		

	</div>

<input id="switch" type="hidden" value="1">