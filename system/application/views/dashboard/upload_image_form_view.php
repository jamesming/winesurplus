image
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	

	
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	<?php  
			$this->load->view('header/header_css.php');
	?>
	<script type="text/javascript" language="Javascript">
	
			$(document).ready(function() { 
				

			});
			 
	</script>

</head>

<body>
	
<form id='uploadForm' name='uploadForm' action='<?php echo  base_url();   ?>index.php/dashboard/upload_image/' 
	method='post' 
	enctype='multipart/form-data'>

	
	<table class='form_table_edit_album_info'    >
		<tr>
			<td >
						<input id='select_file' type="file" name="Filedata" size="20"    />
						<input    style='width:50px'  type="submit" value="submit">
			</td>
		</tr>
		<tr>
			<td>
			
			<!-- 
			<?php     
			
	    	if( is_file(    'uploads/user_profile_image/' .$user_id  . '/image.png'  )){  ?>
	       
	       	  <img src='<?php  echo base_url() . 'uploads/user_profile_image/' . $user_id . '/image.png?random=' . rand();  ?>'>	
	       
				<?php
				}else{ ?>
					
	       	  <img src='<?php  echo base_url() . 'images/male_default_large.png'; ?>'>	
	       				
				
				<?php
				};
			
			
			
			?>
			 -->
		
				
			</td>
			
		</tr>
		
		

		

		
		
		
		
	</table></form>
	
</body>
</html>