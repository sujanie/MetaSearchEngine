<?php 

include "header.php";?>				
</div>
			
</header>
<!-- Logo Overlay -->

<div class="logo_overlay">
		<div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
			<div class="logo"><a href="#"><img src="images/logo_3.png" alt=""></a></div>
		</div>
	</div>

	<!-- Menu Overlay -->

	<div class="menu_overlay">
		<div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
			
			<!-- Hamburger Button -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</div>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container d-flex flex-column align-items-center justify-content-center">

			<!-- Menu Navigation -->
			<nav class="menu_nav text-center">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="rooms.html">Rooms</a></li>
					</ul>
			</nav>
			<div class="button menu_button"><a href="#">book now</a></div>

			<!-- Menu Social -->
			<div class="social menu_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/rooms.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Rooms</h1></div>
		</div>
	</div>
    <div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card-columns">
          

<?php
//print_r($_SESSION['data']);
$json_data=$_SESSION['data'];
$filter=$_POST['price'];
//echo $filter;
//echo $json_data;
$max = (int)$filter;
$min = $max-100;
?>
<?php foreach($json_data as $key=>$value): ?>
<?php
    $val=$value->Price_from_tripadvisor;
    $price=(int)substr($val, 1);
    
?>
<?php if (filter_var($price, FILTER_VALIDATE_INT)&&($min <= $price) && ($price <= $max)) :
?>

<div class="card card-special">
	<img class="card-img-top" src="<?php echo $value->Image?>" alt="Room image description">
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
								<div class="rooms_price"><a href="<?php echo $value->Url_of_hotels?>"><?php echo $value->Price_from_tripadvisor.'/Night'?></a></div>
								
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
										
			
						
		</div>
	</div>
    <?php endif; ?>
    <?php endforeach ?>
        </div>
	</div>
	</div>		
</div>
<?php include "footer.php" ?>