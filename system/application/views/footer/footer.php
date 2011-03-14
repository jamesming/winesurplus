<script type="text/javascript" language="Javascript">
					$(document).ready(function() {
						
						$('.menu_item').click(function(event) {
							redirect_to($(this));
						});			
						
					});
					
					function redirect_to(element){
						document.location.href='<?php echo  base_url();   ?>index.php/page/' + element.attr('id');
					}					
					
</script>



<style>
	div#footer{
	text-align:center;
	padding:20px 0px;	
	}
	div#tabs li{
		list-style:none;
		width:100px; 
		height:auto;
		text-align:center;
		cursor:pointer;
		float:left;
		font-weight:bold;
	}			
	
</style>

<div  id='footer' class=' container'  >
		<div id='tabs'   style='height:50px'   >
			<ul   style='padding-top:10px;margin:0px auto;height:50px;width:300px'    >
				<li id='index'  class='menu_item ' >Today's Deal</li>		
				<li id='faq' class='menu_item ' >FAQ</li>						
				<li id='about'  class='menu_item ' >about</li>

			</ul>			
		</div>	
</div>




<?php  
$this->load->view('header/wysiwyg_jquery_with_iframe.php');   
?>	
	
