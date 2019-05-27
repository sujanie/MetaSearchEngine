<?php
	
	include "proceed1.php";
?>
<?php foreach($json_data as $key=>$value): ?>
<div class="card card-special">
	<img class="card-img-top" src="<?php echo $value->Image;?>" alt="Room image description">
		<div class="card-body">
		<div class="rooms_title"><h2><?php echo $value->Name;?></h2></div>
			<div class="rooms_text">
				<p><?php echo "<h3>Hotel  address:  " .$value->Address."</h3>";?></p>	
			</div>		
				<p><span><?php echo "<h4>From Hotels.com.......</h4>";?></span></p>	
			
								<div class="rooms_list">
									<ul>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span><?php echo "<h4>Hotel Features:  ".$value->Features."</h4>"; ?></span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span><?php echo "<h4>Hotel rate from Hotel.com:  " .$value->Rating_from_hotels."</h4>"; ?></span>
										</li>
										
									</ul>
								</div>
								<div class="rooms_price"><a href="<?php echo $value->Url_of_hotels?>"><?php echo $value->Price_from_hotels.'/Night'?></a></div>
								
								<p><span><h4>From Tripadvisor.com.......</h4></span>
								</p>	
									
								<div class="rooms_list">
									<ul>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span><?php echo "<h4>Hotel rate from Tripadvisor:  ".$value->Rating_from_tripadvisor."</h4>"; ?></span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span><?php echo "<h4>Preferred Booking provider by Tripadvisor:  ".$value->booking_provider."</h4>"; ?></span>
										</li>
										
									</ul>
								</div>
									
					
								<div class="rooms_price"><a href="<?php echo $value->Url_of_tripadvisor?>"><?php echo $value->Price_from_tripadvisor.'/Night'?></a></div>
								
								<p><span><h4>From Booking.com.......</h4></span>
								</p>	
									
								<div class="rooms_list">
									<ul>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span><?php echo "<h4>Hotel rate from Booking.com:  ".$value->Rating_from_booking."</h4>"; ?></span>
										</li>
										
										
									</ul>
								</div>
									
					
								<div class="rooms_price"><a href="<?php echo $value->Url_of_booking?>"><?php echo $value->Price_from_booking.'/Night'?></a></div>
								
			
						
		</div>
	</div>
	<?php endforeach ?>	