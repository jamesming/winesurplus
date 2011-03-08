<?php  $this->load->view('header/chrome_hack_for_memory_issues.php');   ?>

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
	
div#tabs li{
	border:1px solid white;
	list-style:none;
	float:left; 
	width:100px; 
	height:auto;
	color:red;
	font-size:15px;
	font-weight:bold;
	width:130px;
	text-align:center;
	cursor:pointer;
}		

</style>


<div  id='top_area' style='background:white'  >
	
		<div id='name_profession' class='container '    >
			
			
logo
			

			


		</div>
		
		<div id='tabs' class='container '   >
			<ul   >
				<li id='about'  class='menu_item ' >About</li>		

				<li id='resume' class='menu_item ' >Resume</li>						
				<li id='thumbs'  class='menu_item ' >Photos</li>

				<!--<li>Skills</li>-->
				<li id='reel' class='menu_item ' >Reel</li>
				<li id='contact' class='menu_item ' >Contact</li>
			</ul>			
		</div>		
	
	
</div>