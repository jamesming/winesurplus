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
							
							
							if( calendar_td.attr('booked') == '1' && calendar_td.attr('id') != 'booked_for_this_product'){
								
								
								alert('already booked');
								

											
							}else{
								
											$.post("<?php echo base_url(). 'index.php/page/update_contents_with_date'; ?>",{
												content_id: window.parent.$('#content_id').val(),
												product_id: window.parent.$('#product_id').val(),
												month:$(this).attr('month'),
												day:$(this).attr('day'),
												year:$(this).attr('year')
												},function(data) {
					
														
														
																$(".calendar td").each(  function( i ){ 
																			if( $(this).attr('booked') != '1'){
																				$(this).css({background:'white'});
																			};
																			if( $(this).attr('id') == 'booked_for_this_product'){
																				$(this).css({background:'white'});
																			};																			
																			
																});
														
														calendar_td.css({background:'lightgreen'});
														
														window.parent.window.parent.top_edit_frame.$("#product_id").html(data)
														// window.parent.window.parent.top_edit_frame.$('#error').html(  data  );
														// window.parent.$('body').click();
					
												});								
								
							};
							

							


							


					   });
					   
					   

					   
					});
					
					
					function switch_month( when_month ){
						if( when_month  == 'last'){
							$('#goto_month').val( $('#last').val()  );
						}else{
							$('#goto_month').val( $('#next').val()  );
						};
						
						//alert(when_month);
						$('#form0').submit();
						
					}
					
	// alert('');
</script>
	
</head>
<body>
	
<?php



if( $goto_month !='' ){
	$month = $goto_month;
}else{
	$month = date("m");
};


if( $year == ''){
	$year = date("Y");
};




$last = $month - 1;
$next = $month + 1;

if( $next == 14){
	 $next = 2;
	 $month = 1;
	 $year  = $year + 1;
};

if( $last == -1){
	 $last = 11;
	 $month = 12;
	 $year  = $year - 1;
};

$time = time();

?>
<form   style='display:none'   id='form0'  name="form0" action="<?php echo base_url();   ?>index.php/page/calendar/<?php echo $content_id;    ?>" method="post"   >
	last	<input id="last" name="last" type="text" value="<?php  echo $last  ?>"><br>
	next	<input id="next" name="next" type="text" value="<?php  echo $next  ?>"><br>
	year	<input id="year" name="year" type="text" value="<?php  echo $year  ?>"><br>
	goto	<input id="goto_month" name="goto_month" type="text" value="<?php echo $goto_month;    ?>">
</form>

<?php     

$today = date('j',$time);

if( $month == date("m") ){
	$days = array(
    $today=>array(NULL,NULL,'<span id=\'today\'>'.$today.'</span>'),
	);
}else{
	$days = array();
};

$lastMonth = $month - 1;
$nextMonth = $month + 1;

$prev_or_next = array("<b   style='cursor:pointer;font-size:40px'   onclick=switch_month('last')>&laquo;</b>"=>"?month=".$lastMonth."&deal_id=", "<b     style='cursor:pointer;font-size:40px'   onclick=switch_month('next')>&raquo;</b>"=>"?month=".$nextMonth."&deal_id=");



echo $this->calendar->generate_calendar($year , $month, $days, $day_of_the_week_is_shown=4, NULL, 0, $prev_or_next, $daysInMonthBooked,  $booked_for_this_product);
?>	
	
</body>
</html>





