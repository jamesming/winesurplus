<html>
<head>
	
	<?php  $this->load->view('header/header_css.php');   ?>	
	

<link rel="stylesheet" href="<?php  echo base_url();   ?>js/Jcrop/css/jquery.Jcrop.css" type="text/css"  type="text/css" >
   
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type='text/javascript' src='<?php  echo base_url()   ?>js/Jcrop/js/jquery.Jcrop.min.js'></script>


<script type="text/javascript" language="Javascript">
	
					$(document).ready(function() { 

									 jQuery('#cropbox').Jcrop({		
									 		onChange: showPreview,
											aspectRatio: <?php  
											

																		        echo "1.072";

											
																   ?>,
											setSelect:   [ 0, 0, <?php 
											

																		        echo "442, 412";

											
																				?> ]
									 });  	
									 

									$('#submit').click(function(event) {
										
										submitCropForm();
										

									});		

					});
					
					function checkCoords(){
						if (parseInt($('#w').val())) return true;
						alert('Please select a crop region then press submit.');
						return false;
					};
					
					function showPreview(coords){
						$('#x').val(coords.x);
						$('#y').val(coords.y);
						$('#x2').val(coords.x2);
						$('#y2').val(coords.y2);
						$('#w').val(coords.w);
						$('#h').val(coords.h);
					};
					
					function submitCropForm(){
						
										// change image of product in the parent of iframe 
										var product_id = $('#product_id').val();
										
										// AJAX UPDATE
										$.post("<?php echo base_url() . 'index.php/page/crop/' . $product_id;    ?>",{
											x_origin: $('#x').val(),
											y_origin: $('#y').val(),
											width: $('#w').val(),
											height: $('#h').val()
										},function(data) {
												window.parent.$("#product_img").attr('src', '<?php  echo base_url() . 'uploads/product_images/' . $product_id; ?>' + '/image.png' +  '<?php echo '?random=' . rand(5,15);  ?>'); 
												window.parent.bind_click_to_product_img();  // found in iframe/wysiwyg_jquery_with_iframe, line 97.
												
												// closes fancy zoom 
												window.parent.$('body').click(); 
												
										});		
					};
					
					
					

</script>

<style>
	table {
	width:100%;
	}
	table td{
	color:darkgray;
	font-size:23px;
	}
</style>
</head>

<body   style='padding-top:2px'  >

<table width='100%'>
	<tr>
		<td width='55%' align=right>Crop image then&nbsp;&nbsp;
		</td>
		<td>	
				<div id='submit' class='rounded_border cursor_pointer'   style='text-align:center;font-size:18px;background:orange;color:white;width:100px'  >
				submit
				</div>	
		</td>
	</tr>
</table>

<br>

<table >
	<tr>
		<td   style='
						width: 750px;
				    text-align:center;
				    vertical-align:middle;
			'  >
			
						<div   style='width:<?php echo $width_of_file;    ?>px;margin-left:auto;margin-right:auto'  > 
							<img   id='cropbox' src = '<?php  echo  base_url() . 'uploads/product_images/' . $product_id . '/transition.png?random=' . rand(5,15);   ?>'>		
						</div> 
		
		</td>
	</tr>
</table>


							
							
<form id='corpForm' name='corpForm' action='<?php  echo base_url();   ?>index.php/upload/crop' onsubmit='return checkCoords();'>
	<input type="hidden" size="4" id="x" name="x" value="" />
	<input type="hidden" size="4" id="y" name="y" />
	<input type="hidden" size="4" id="x2" name="x2" />
	<input type="hidden" size="4" id="y2" name="y2" />
	<input type="hidden" size="4" id="w" name="w" />
	<input type="hidden" size="4" id="h" name="h" />

<input name="product_id" id="product_id" type="hidden" value="<?php echo $product_id;   ?>">


	<!-- 
	<label>X1 </label>
	<label>Y1 </label>
	<label>X2 </label>

	<label>Y2 </label>
	<label>W </label>
	<label>H </label>-->
</form>
</body>

