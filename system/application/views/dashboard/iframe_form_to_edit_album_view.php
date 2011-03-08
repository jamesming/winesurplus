<html>
<head>
	
	<?php  $this->load->view('header/header_css.php');   ?>	
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>

<style>
	table.form_table {
	width:100%;
	}
	table.form_table_edit_album_info td{
	color:lightblack;
	font-size:27px;
	vertical-align:middle;
	padding:10px;
	}
	table.form_table_edit_album_info td:nth-child(odd){
	text-align:right;
	}
	table.form_table_edit_album_info input{
	width:460px;
	}
</style>

<script type="text/javascript" language="Javascript">
	
					$(document).ready(function() { 
						
						$('#submit').click(function(event) {
							
							// change name of album in the parent of iframe 
							var album_id = $('#album_id').val();
							window.parent.$("div[album_id=" + album_id + "]").text($('#name').val()); 
							
							// AJAX UPDATE
							$.post("<?php echo base_url() . 'index.php/dashboard/update_album/' . $album_id;    ?>",{
								album_name: $('#name').val(),
								URL: $('#url').val()
							},function(data) {
									// closes fancy zoom 
									window.parent.$('body').click(); 
							});		
							
							

						});			
						
					});


</script>
</head>

<body>

<div>
<form name='form0'>

<input name="album_id" id="album_id" type="hidden" value="<?php echo $album_id;    ?>">

<table class='form_table_edit_album_info'    >
	<tr>
		<td>Name
		</td>
		<td>
			<input class='input_field' name="name" id="name"  value='<?php  echo $name;   ?>'>
		</td>
	</tr>
	<tr>
		<td>URL
		</td>
		<td>
			<input class='input_field' name="url" id="url"  value='<?php  echo $url;   ?>'>
		</td>
	</tr>	
	<tr>
		<td>Presentation
		</td>
		<td>
			<input class='input_field' name="url" id="url"  >
		</td>
	</tr>	
	<tr>
		<td colspan=2   style='text-align:center'  >
			<div id='submit' class='rounded_border cursor_pointer'   style='margin:0px auto;background:orange;color:white;width:100px'  >
				submit
			</div>
		</td>
	</tr>		
	
</table>


</div>

</body>

<!--  

$('#zoom_close').click(hide);

-->