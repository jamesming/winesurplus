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
<body>
	

	<?php  
	$this->load->view('header/top_view.php');   
	?>
	
	
	
<div class=' container' >
	
		<div   id='name_div'   href='#wysiwyg_div' class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->name_div  ) ){
				echo $contents[0]->name_div;
			}else{
				echo $default_content[0]->name_div;
			};
			
			?>
		</div>
	</div>
	
</div>


<div class=' container' >
	
		<div   id='retail_price_div'   href='#wysiwyg_div'class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->retail_price_div  ) ){
				echo $contents[0]->retail_price_div;
			}else{
				echo $default_content[0]->retail_price_div;
			};
			
			?>
		</div>
	</div>
	
</div>


<div class=' container' >
	
		<div   id='discount_price_div'   href='#wysiwyg_div' class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->discount_price_div ) ){
				echo $contents[0]->discount_price_div;
			}else{
				echo $default_content[0]->discount_price_div;
			};
			
			?>
		</div>
	</div>
	
</div>

<div class=' container' >
	
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
			
					<img id='product_img'   style='width:150px;margin-top:-29px'  src='<?php 
					
			  		  if( !is_file('uploads/product_images/' . $contents[0]->product_id . '/image.png' ) ){
        				echo base_url() . "images/no_image.png?random=" . rand();
    					}else{
			  				echo base_url(). "uploads/product_images/" . $contents[0]->product_id . "/image.png";
			  			}
					
					?>'>			
			
			
		</div>

		
		
		
		
	</div>
	

	
	
	<div  class='span-19 last'   >
		<div   id='description_div'   href='#wysiwyg_div' class="wysiwyg_div_link" >
			<?php     
			
			if( isset( $contents[0]->description_div  ) ){
				echo $contents[0]->description_div;
			}else{
				echo $default_content[0]->description_div;
			};
			
			?>
		</div>
	</div>
		
	
</div>


	
	<?php  $this->load->view('footer/footer.php');   ?>

	<div id="product_image"  style='height:60px;display:none'  >
		<iframe  id="iframe_content_image"   style="
			width:400px;
			height:40px;
			margin: 0; 
			padding: 0; 
			border: 0px solid black;
			" 
			frameborder="0" src=""   >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>
	</div>	
	
<div   style='visibility:hidden'  >	 
	
		<form   id='uploadForm' name='uploadForm' action='<?php echo  base_url();   ?>index.php/page/upload_image/' 
			method='post' 
			enctype='multipart/form-data'>
			<input name="product_id" id="product_id" type="hidden" value="<?php echo $contents[0]->product_id;    ?>">	
			<input id='select_file' type="file" name="Filedata" size="20"     />
			<input  type="submit" value="submit">
		</form>
 		
	
</div>

	
	
</body>
</html>





