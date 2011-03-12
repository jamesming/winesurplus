<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<?php     	$this->load->view('header/header_css.php');  ?>

	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.colors.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.styles.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.syntax.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/xhtml.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.full.js" type="text/javascript"></script>

<script language="Javascript" type="text/javascript">
	
			$(document).ready(function() { 
				var mbox = $("#iframe_child_div_text_area").css({
						height:"84%",
						width:"100%"
						}).htmlbox({
				    toolbars:[
					    [
						// Cut, Copy, Paste
						"separator","cut","copy","paste",
						// Undo, Redo
						"separator","undo","redo",
						// Bold, Italic, Underline, Strikethrough, Sup, Sub
						"separator","bold","italic","underline","strike","sup","sub",
						// Left, Right, Center, Justify
						"separator","justify","left","center","right",
						// Ordered List, Unordered List, Indent, Outdent
						"separator","ol","ul","indent","outdent",
						// Hyperlink, Remove Hyperlink, Image
						"separator","link","unlink","image"
						
						],
						[// Show code
						"separator","code",
				        // Formats, Font size, Font family, Font color, Font, Background
				        "separator","formats","fontsize","fontfamily",
						"separator","fontcolor","highlight",
						],
						[
						//Strip tags
						"separator","removeformat","striptags","hr","paragraph",
						// Styles, Source code syntax buttons
						"separator","quote","styles","syntax"
						]
					],
					skin:"blue"
				});
				
				var div_id_to_edit = window.parent.$('#div_id_to_edit').val();
				var product_id = window.parent.$('#product_id').val();
				
				
				if( window.parent.$('#'+div_id_to_edit).attr('static_content') == 1){
					var static_content = 1;
				}else{
					var static_content = 0;
				};
				
				
				setTimeout(function() { 											
						mbox.set_text(   window.parent.$('#'+div_id_to_edit).html()  );
				}, 100);				
				
				$('#save').click(function(event) {
						
						$.post("<?php echo base_url(). 'index.php/page/update'; ?>",{
							field: div_id_to_edit,
							text: mbox.get_html(),
							product_id: product_id,
							static_content: static_content
							},function(data) {
								
								window.parent.$('#'+div_id_to_edit).html(  mbox.get_html()  ) ;
								window.parent.$('body').click(); // closes fancy zoom								
								
							});

				})	
				

				
					

			});
	

</script>


</head>

<body><br>
<textarea id='iframe_child_div_text_area'></textarea>

<table width=100% > 
	<tr>
		<td  width=100%  style='
			padding:10px 10px 10px 10px;
			vertical-align:middle;
			text-align:center;
			margin:0 auto;
			'  >
			<div id="save"  class='cursor_pointer rounded_border' style='
				height:30px;
				width:75px;
				background:orange;
				margin:10px auto;
				padding-top:10px;
				font-weight:bold;
				color:white;
				font-size:15px;
				'  >Save</div>
		</td>
	</tr>
</table>


</body>
</html>