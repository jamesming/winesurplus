<html>
<head>
	
	<?php  $this->load->view('header/header_css.php');   ?>	
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>

<style>
	table.form_table {
	width:100%;
	}
	table.form_table_edit_product_info td{
	color:lightblack;
	font-size:27px;
	vertical-align:middle;
	padding:10px;
	}
	table.form_table_edit_product_info td:nth-child(odd){
	text-align:right;
	}
	table.form_table_edit_product_info input{
	width:460px;
	}
</style>

<script type="text/javascript" language="Javascript">
	
					$(document).ready(function() { 
						
						$('#submit').click(function(event) {

							// AJAX UPDATE
							$.post("<?php echo base_url() . 'index.php/page/add_or_update_product/';  ?>",{
								name: $('#name').val(),
								product_id: $('#product_id').val(),
								content_id: $('#content_id').val(),
								price: $('#price').val(),
								discount: $('#discount').val()
							},function(data) {
									window.parent.window.parent.top_edit_frame.$('#product_id').html(  data  );  // resets the select
									window.parent.$('#product_id').val(  window.parent.window.parent.top_edit_frame.$('#product_id option:selected').val()  ); 
									window.parent.$('#content_id').val( window.parent.window.parent.top_edit_frame.$('#product_id option:selected').attr('content_id')   );
									window.parent.wysiwyg();  // found in header/wysiwyg_jquery_with_iframe.php line 54
									window.parent.$('body').click(); 
							});		
							

							

						});			
						
					});


</script>
</head>

<body>

<div>
<form name='form0'>

<input name="product_id" id="product_id" type="hidden" value="<?php echo $product_id;    ?>">
<input name="content_id" id="content_id" type="hidden" value="<?php echo $product_id;    ?>">

<table class='form_table_edit_product_info'    >
	<tr>
		<td>name
		</td>
		<td>
			<input class='input_field' name="name" id="name"  value='<?php  echo $name;   ?>'>
		</td>
	</tr>
	<tr>
		<td>price
		</td>
		<td>
			<input class='input_field' name="price" id="price"  value='<?php  echo $price;   ?>'>
		</td>
	</tr>	
	<tr>
		<td>discount
		</td>
		<td>
			<input class='input_field' name="discount" id="discount"  value='<?php  echo $discount;   ?>' >
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
