
<script type="text/javascript" language="Javascript">
	
	
					$(document).ready(function() { 
						
						if(  window.parent.document.getElementById('top_edit_frame')  ){  
								$('#calendar').fancyZoom().click(function(event) {
										$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/calendar/' + $('#content_id').val() );
								});	
								$('#add_product').fancyZoom().click(function(event) {
										$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/iframe_form_to_add_or_edit_product/' );
								});			
								$('#edit_product').fancyZoom().click(function(event) {
										$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/page/iframe_form_to_add_or_edit_product/' + $('#product_id').val() );
								});									
						};
						
						$('.menu_item').click(function(event) {
							redirect_to($(this));
						});			
						
						$('#hack_to_fix_chrome_bug').val(1);	
											
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

<div   style='display:none'  >
chrome hack: <input id="hack_to_fix_chrome_bug" type="text" value=""><br>
div_id_to_edit: <input id="div_id_to_edit" type="text" value="">	<br>
	p: <input id="product_id" type="text" value="<?php  echo $contents[0]->product_id;   ?>"><br>
	c: <input id="content_id" type="text" value="<?php  echo $contents[0]->id;   ?>">	
</div>

<div id='calendar'  href='#wysiwyg_div'  style='display:none'  >
</div>
<div id='add_product'  href='#wysiwyg_div'  style='display:none'  >
</div>
<div id='edit_product'  href='#wysiwyg_div'  style='display:none'  >
</div>

<div  id='top_area' style='background:white'  >
	
		<div id='logo_img'   href='#wysiwyg_div'  class='container'     style='font-size:23px'   >
LOGO
		</div>
		
		<div id='tabs' class='container '   >
			<ul   >
				<li id='index'  class='menu_item ' >About</li>		

				<li id='resume' class='menu_item ' >Resume</li>						
				<li id='thumbs'  class='menu_item ' >Photos</li>

				<!--<li>Skills</li>-->
				<li id='reel' class='menu_item ' >Reel</li>
				<li id='contact' class='menu_item ' >Contact</li>
			</ul>			
		</div>		
	
	
</div>