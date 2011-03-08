<script type="text/javascript" language="Javascript">


							window.parent.$('#profile_img').attr('src','<?php echo base_url();    ?>uploads/user_profile_image/<?php echo $this->session->userdata['user_id'];    ?>/image.png<?php echo '?random=' . rand();  ?>');

							setTimeout(function() { 											

									 window.parent.$('body').click();
									 
									 											
							}, 0);					
											

</script>