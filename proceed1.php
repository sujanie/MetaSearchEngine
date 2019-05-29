<?php
	
	$city=$_POST['Destination'];
	$checkIn=$_POST['date1'];
	$checkOut=$_POST['date2'];
	$num=$_POST['number1'];
	//$num1=$_POST['number2'];
	
	$url= "http://0.0.0.0:8000/?city=".$city."&checkIn=".$checkIn."&checkOut=".$checkOut."&num=1&num1=".$num;
	//$url="http://0.0.0.0:8000/?city=Singapore&checkIn=06/05/2019&checkOut=06/06/2019&num=1&num1=2";

	$xml = file_get_contents($url);
	$json_data = json_decode($xml);
	$_SESSION['data']=$json_data;
	//print_r($_SESSION);
?>
