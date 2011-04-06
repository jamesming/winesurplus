<html>
<head>
	

	<?php  $this->load->view('header/header_css.php');   ?>
	
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	<?php  $this->load->view('header/fancy_zoom.php');   ?>

	<script type="text/javascript" language="Javascript">

					$(document).ready(function() { 
					});  

	</script>

</head>
<body   style='background:url(<?php  echo base_url();   ?>images/dealpulp.gif) repeat'  >
	

	<?php  
	$this->load->view('header/top_view.php');   
	?>
	

		<style>

		div#main div:nth-child(1) div{
		}
		.price{
		height:90px;
		padding-left:20px;	
		}

		</style>
		
		<div id='main'  class=' container'   style='margin-top:10px;'  >
			
			<!-- LEFT PANEL  -->
			<div  class='span-13 '    style='
						background: lightgray;
						text-align:center;
						'   
				>
				
					<div class=' rounded_border '   style='
																					background:yellow;
																					margin:20px;
																					height:435px;'
		      >
						
										
						<!-- 
						/**
						*		edit.png
						**/
						-->
					
					  <div  class='edit_div'    style='
					  	float:right;
					  	position: relative;
					  	display:none;
					  	'  >
					  	<a  style='margin-top:9px;margin-right:59px;' >
					  	<img href="#product_image"   class="product_image_link edit_png"  src='<?php echo base_url();    ?>images/edit.png'>
					  	</a>
					  	
					  </div>	
					  
					  <br><br>
				
						<div     >
							
									<img id='product_img'   style='width:442px;margin-top:-29px'  src='<?php 
									
							  		  if( !is_file('uploads/product_images/' . $contents[0]->product_id . '/image.png' ) ){
				        				echo base_url() . "images/no_image.png?random=" . rand(5, 15);
				    					}else{
							  				echo base_url(). "uploads/product_images/" . $contents[0]->product_id . "/image.png?random=" . rand(5, 15);
							  			}
									
									?>'>			
							
							
						</div>	
						
						
						
						
						
						
					</div>
				
			</div>
			
			<!-- RIGHT PANEL  -->
			<div id='right_column' class='span-11 last'   style='background:lightgray;height:500px'    >
				
				
				<div   style='
					padding-top:20px;
					padding-left:20px;
					padding-right:20px;
					'  id='name_div'   href='#wysiwyg_div' class="wysiwyg_div_link" >
								<?php     
			
									if( isset( $contents[0]->name_div  ) ){
										echo $contents[0]->name_div;
									}else{
										echo $default_content[0]->name_div;
									};
								
								?>
				</div>
				
				<div  style='padding:20px;'   id='description_div'   href='#wysiwyg_div' class="wysiwyg_div_link"   >
								<?php     
			
									if( isset( $contents[0]->description_div  ) ){
										echo $contents[0]->description_div;
									}else{
										echo $default_content[0]->description_div;
									};
								
								?>
				</div>
				
				<div   id='retail_price_div' class='wysiwyg_div_link price'    href='#wysiwyg_div' >
								<?php     
				
									if( isset( $contents[0]->retail_price_div  ) ){
										echo $contents[0]->retail_price_div;
									}else{
										echo $default_content[0]->retail_price_div;
									};
								
								?>
				</div>
				
				<div  id='discount_price_div' class="wysiwyg_div_link price"   href='#wysiwyg_div' >
								<?php     
				
									if( isset( $contents[0]->discount_price_div ) ){
										echo $contents[0]->discount_price_div;
									}else{
										echo $default_content[0]->discount_price_div;
									};
								
								?>
				</div>
				
				<div>
								<!--  BUY BUTTON  -->
								<div id='buy' class='rounded_border cursor_pointer'   style='
									margin:0px auto;
									background:orange;
									font-weight:bold;
									color:white;
									width:100px;
									height:35px;
									padding-top:7px;
									text-align:center;
									'  >
								buy
								</div>	
												
				</div>
				

			</div>
			
			
		</div>
	
	
	
	

<div class=' container'   style='display:none'   >
	
		<div   id='reviews_div'   href='#wysiwyg_div' class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->reviews_div  ) ){
				echo $contents[0]->reviews_div;
			}else{
				echo $default_content[0]->reviews_div;
			};
			
			?>
		</div>
	</div>
	
</div>
	
	



	
	<?php  $this->load->view('footer/footer.php');   ?>

	<div id="product_image"  style='height:560px;display:none'  >
		<iframe  id="iframe_content_image"   style="
			width:750px;
			height:560px;
			margin: 0; 
			padding: 0; 
			border: 0px solid black;
			" 
			frameborder="0" src=""  scrolling="yes"  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>
	</div>	


	
	
</body>
</html>





