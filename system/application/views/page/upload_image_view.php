<script type="text/javascript" language="Javascript">


							window.parent.$('#product_img').attr('src','<?php echo base_url();    ?>uploads/product_images/<?php echo $product_id;    ?>/image.png<?php echo '?random=' . rand();  ?>');

							setTimeout(function() { 											

									 window.parent.$('body').click();
									 
									 											
							}, 0);					
											

</script>