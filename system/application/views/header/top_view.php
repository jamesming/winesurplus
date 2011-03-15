
<script type="text/javascript" language="Javascript">
	
	
					$(document).ready(function() { 
						

						

						
						$('#hack_to_fix_chrome_bug').val(1);	
											
					});
					

					
					
</script>



<div   style='display:none'  >
chrome hack: <input id="hack_to_fix_chrome_bug" type="text" value=""><br>
div_id_to_edit: <input id="div_id_to_edit" type="text" value="">	<br>
	p: <input id="product_id" type="text" value="<?php  echo ( isset($contents) ? $contents[0]->product_id : '0' ) ?>"><br>
	c: <input id="content_id" type="text" value="<?php  echo ( isset($contents) ? $contents[0]->id : '0' ) ?>">	
</div>

<!--  
 THE FOLLOWING HIDDEN DIV ARE CLICK ACTIVATED BY TOP IFRAME EDIT PANEL
-->
<div id='calendar'  href='#wysiwyg_div'  style='display:none'  >
</div>
<div id='add_product'  href='#wysiwyg_div'  style='display:none'  >
</div>
<div id='edit_product'  href='#wysiwyg_div'  style='display:none'  >
</div>
<div id='jcrop_product_image'  href='#wysiwyg_div'  style='display:none'  >
</div>

		<style>	
		div#top span{
		display:block;
		}
		div#top div:nth-child(3){
		background: lightgray;
		}
		div#top div:nth-child(1){
		background: orange;
		height:auto;
		}
		div#top div:nth-child(1) span{
		margin:10px;
		background: blue;
		color:white;
		text-align:center;
		height:50px;
		padding:7px 0px;
		}		
		div#top div:nth-child(3){
		background: lightgray;
		}
		div#top div:nth-child(3) span{
		background: lightgreen;
		text-align:center;
		padding:5px 0px;
		}
		</style>
		
		<div id='top' class=' container'      >
			<div  class='span-5 ' >
				<span   >
					logo
				</span>
			</div>
			<div  class='span-15 ' >
				&nbsp;
			</div>
			<div  class='span-4 last' >
				
				<span>
					account
				</span>
				
				<span>
					refer
				</span>
				
				<span>
					twitter/facebook
				</span>
				
			</div>
		</div>
		
		<style>
		div#howworks{
		padding:20px 0px;
		background:green;
		height:94px;
		}
		div#howworks div{
		height:70px;
		margin-bottom:10px;
		margin-left:10px;
		width:80px;
		float:left;	
		padding-top:24px;
		}
		div#howworks div:nth-child(even){
			width:182px;
			background:lightblue;
			text-align:center;
			color:white;
			font-size:20px;
		}
		</style>
		
		<div id='howworks' >
			<divclass=' container'  >
				<div>
				</div>
				<div>Purchase
				</div>
				<div>  
				</div>
				<div>Charity
				</div>
				<div>
				</div>
				<div>Enjoy
				</div>
				<div>
				</div>
			</div>			
		</div>
		
		
	
	
	
