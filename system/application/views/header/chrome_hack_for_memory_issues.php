	<script type="text/javascript" language="Javascript">
		

					$(document).ready(function() { 
					
								<?php   
						
								/**
								 *  THIS IS THE HACK CAUSE CHROME LEAVES WHITE AREAS ON SCREEN. MEMORY ISSUE?
								 *
								 */
								if( $this->tools->browserIschrome()){?>
									
													// $('#square_thumb').click();
													
														setTimeout(function() { 											

																 $('#top_area').toggle().toggle()
																 
																 											
														}, 500);		
											
																		
								<?php
								};
								?>
						
					});  // END $(document).ready(function()



	
	</script>