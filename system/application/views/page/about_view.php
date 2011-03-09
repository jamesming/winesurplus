<html>
<head>
	

	<?php  $this->load->view('header/header_css.php');   ?>
	
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	


	<script type="text/javascript" language="Javascript">
		

					$(document).ready(function() { 


						if(  window.parent.document.getElementById('top_edit_frame')  && window.parent.top_edit_frame.$('#switch').val() == 0){  // EDIT MODE
					  	
								$('.product_image_link').css({cursor:'pointer'})
								.fancyZoom().click(function(event) {
									$("#iframe_content_image").attr('src','<?php echo base_url();    ?>index.php/page/upload_image_form/' + $('#product_id').val());
								});		
								
								
								$('.edit_div').show();
								
								
					  	
						};
						
						
						
					});  // END $(document).ready(function()



	
	</script>
	
	
	
	

</head>
<body>
	

	<?php  
	$this->load->view('header/top_view.php');   
	?>
	
	
	
<div class=' container' >
	
		<div   id='name'   href='#wysiwyg_div'class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->name  ) ){
				echo $contents[0]->name;
			}else{
				echo $default_content[0]->name;
			};
			
			?>
		</div>
	</div>
	
</div>


<div class=' container' >
	
		<div   id='retail_price'   href='#wysiwyg_div'class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->retail_price  ) ){
				echo $contents[0]->retail_price;
			}else{
				echo $default_content[0]->retail_price;
			};
			
			?>
		</div>
	</div>
	
</div>


<div class=' container' >
	
		<div   id='discount_price'   href='#wysiwyg_div'class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->discount_price ) ){
				echo $contents[0]->discount_price;
			}else{
				echo $default_content[0]->discount_price;
			};
			
			?>
		</div>
	</div>
	
</div>

<div class=' container' >
	
		<div   id='reviews'   href='#wysiwyg_div'class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->reviews  ) ){
				echo $contents[0]->reviews;
			}else{
				echo $default_content[0]->reviews;
			};
			
			?>
		</div>
	</div>
	
</div>
	
	
<div  class=' container'   style='height:200px;padding-top:30px'  >
	
	<div id='product_image_container' class=' span-5'  >
		
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
			
					<img id='product_img'   style='margin-top:-29px'  src='<?php 
					
//					if(   is_file('uploads/user_profile_image/' . $this->session->userdata['user_id'] . '/image.png')   ){
//			
//							echo base_url(). 'uploads/user_profile_image/' . $this->session->userdata['user_id']. '/image.png';
//			
//			  	}else{
			  	
			  			echo base_url(). 'images/male_default_large.png';
			  			
//			  	}
					
					?>'>			
			
			
		</div>

		
		
		
		
	</div>
	

	
	
	<div  class='span-19 last'   >
		<div   id='description'   href='#wysiwyg_div'class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->description  ) ){
				echo $contents[0]->description;
			}else{
				echo $default_content[0]->description;
			};
			
			?>
		</div>
	</div>
		
	
</div>


	
	<?php  $this->load->view('footer/footer.php');   ?>

	<div id="product_image"  style='height:60px;display:none'  >
		<iframe id="iframe_content_image"   style="
			width:400px;
			height:40px;
			margin: 0; 
			padding: 0; 
			border: 0px solid black;
			" 
			frameborder="0" src=""  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>
	</div>	
	
	
	
	
</body>
</html>





