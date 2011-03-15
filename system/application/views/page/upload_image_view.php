<script type="text/javascript" language="Javascript">

							window.parent.open_jcrop();
							window.parent.$('#product_img').attr('src','<?php echo base_url();    ?>uploads/product_images/<?php echo $product_id;    ?>/image.png<?php echo '?random=' . rand();  ?>');
							document.location.href='<?php echo base_url();    ?>index.php/page/upload_image_form/<?php echo $product_id;    ?>';
		
											

</script>