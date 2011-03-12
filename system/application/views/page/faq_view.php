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
	
		<div   id='faq_div' static_content='1'  href='#wysiwyg_div' class="wysiwyg_div_link" >
				<?php
							if( isset( $static_content[0]->faq_div  ) )
								echo $static_content[0]->faq_div;
							else
								echo "some content"
				?>
		</div>
	
</div>

	<?php  $this->load->view('footer/footer.php');   ?>

	
</body>
</html>





