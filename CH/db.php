<?php 
	// $link = mysqli_connect("localhost", "root", "", "shipping");

	// if (!$link) {
	//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
	//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	//     exit;
	// }

	// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
	// $time = "date";

// mysqli_query($link, "INSERT INTO package (width, height, massa, price)
	// 					VALUES ($width, $height, $massa, $price)"
	// );	

	// mysqli_query($link, "INSERT INTO receiver (rfn, rln, rmail, rmob)
	// 					VALUES ($rfn, $rln, $rmail, $rmob)"
	// );
	//  mysqli_close($link);

/*---------------------------------------------------------------------------------------------------------------*/
// --------------- Table Package
	$width = $_POST['width'];
	$height = $_POST['height'];
	$massa = $_POST['massa'];
	$price = $_POST['price'];
	
// ------------------- Table Sender
	$sfn = $_POST['sfn']; /*Sender first name*/
	$sln = $_POST['sln']; /*Sender last name*/
	$smail = $_POST['smail']; /*Sender mail*/
	$smob = $_POST['smob']; /*Sender mob*/

// ------------------- Table Receiver
	$rfn = $_POST['rfn']; /*Receiver first name*/
	$rln = $_POST['rln']; /*Receiver last name*/
	$rmail = $_POST['rmail']; /*Receiver mail*/	
	$rmob = $_POST['rmob']; /*Receiver mob*/

//------------------ Table address Sender
	$cSender = $_POST['cSender']; /*Continent Sender*/
	$ips = $_POST['ips']; /*Index Postal Sender*/

//-------------------Table address Receiver
	$cReceiver = $_POST['cReceiver']; /*Continent Receiver*/
	$ipr = $_POST['ipr']; /*Index Postal Receiver*/
//------------------- timeDelivery
	$departureDate = $_POST['departureDate'];	
	$deliveryTime = $_POST['deliveryTime'];	
/*---------------------------------------------------------------------------------------------------------------------*/
/*Connction DB*/
	$con = new mysqli("localhost", "root", "", "shipping");

	if ($con->connect_error) {
		die("Connection fail: " . $con->connect_error);
	}
/*MYSQL QUERY*/
	$querys = array(
		"insert into addressreceiver (cReceiver, ipr) values ('$cReceiver', '$ipr')",
		"insert into addresssender (cSender, ips) values ('$cSender', '$ips')",
		"insert into package (width, height, massa, price) values ('$width', '$height', '$massa', '$price')",
		"insert into receiver (rfn, rln, rmail, rmob) values ('$rfn', '$rln', '$rmail', '$rmob')",
		"insert into sender (sfn, sln, smail, smob) values ('$sfn', '$sln', '$smail', '$smob')",
		"insert into timedelivery (departureDate, deliveryTime) values ('$departureDate', '$deliveryTime')"
		);

	foreach ($querys as $value) {
		if ($con->query($value) !== TRUE) {
			echo "Fail: " . $value . "<br>" . $con->error;
		}
	}
	
/*close connection mysql*/
	$con->close();

	
 ?>