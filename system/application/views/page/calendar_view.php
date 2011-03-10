<html>
<head>
	<style>
		#today{color: red; font-weight: bold; }
		.isBooked{color: black;background:yellow; font-weight: bold; }
		#booked_for_this_product{
			color: black;background:lightgreen; font-weight: bold; 
		}
		.notBooked{color: black;background:white; font-weight: normal; }
		.titleMonth{font-weight: bold;font-size:30px;margin:0 40px 0 40px;}
		.calendar td{cursor:pointer;border:1px solid gray;width:100px;height:100px}
	</style>
	
	<?php  $this->load->view('header/header_css.php');   ?>
	
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	


	<script type="text/javascript" language="Javascript">
		

					$(document).ready(function() { 

	
						$(".calendar td").click(function(event) {
							
							var calendar_td = $(this);
							
							
							//alert(calendar_td.attr('booked'));
							
							
							if( calendar_td.attr('booked') == '1'){
								
								
								alert('already booked');
								

											
							}else{
								
											$.post("<?php echo base_url(). 'index.php/page/update_contents_with_date'; ?>",{
												content_id: window.parent.$('#content_id').val(),
												month:$(this).attr('month'),
												day:$(this).attr('day'),
												year:$(this).attr('year')
												},function(data) {
					
														window.parent.window.parent.top_edit_frame.$('#error').html(  data  );
														
																$(".calendar td").each(  function( i ){ 
																			if( $(this).attr('booked') != '1'){
																				$(this).css({background:'white'});
																			};
																			if( $(this).attr('id') == 'booked_for_this_product'){
																				$(this).css({background:'white'});
																			};																			
																			
																});
														
														calendar_td.css({background:'lightgreen'});
														
														// window.parent.$('body').click();
					
												});								
								
							};
							

							
								

							


					   });
					});
	
</script>
	
</head>
<body>
	
<?php


$month = date("m");
$year = date("Y");

$time = time();



$today = date('j',$time);


if( $month == date("m") ){
	$days = array(
    $today=>array(NULL,NULL,'<span id=\'today\'>'.$today.'</span>'),
	);
};

$lastMonth = $month - 1;
$nextMonth = $month + 1;

$prev_or_next = array("<b onclick=alert('" . $lastMonth  . "')>&laquo;</b>"=>"?month=".$lastMonth."&deal_id=", "<b onclick=alert('" . $nextMonth  . "')>&raquo;</b>"=>"?month=".$nextMonth."&deal_id=");



echo $this->calendar->generate_calendar(date('Y', $time), $month, $days, $day_of_the_week_is_shown=4, NULL, 0, $prev_or_next, $daysInMonthBooked,  $booked_for_this_product);
?>	
	
</body>
</html>





