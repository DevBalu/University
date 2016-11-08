<?php 
// --------------- Table Package
	$width = $_POST['width'];
	$height = $_POST['height'];
	$massa = $_POST['massa'];
	$price = $_POST['price'];
	
// ------------------- Table Sender
	$sfn = $_POST['sfn']; /*Sender first name*/
	$sln = $_POST['sln']; /*Sender last name*/
	$smail = $_POST['Smail']; /*Sender mail*/
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
	$ipr = $_POST['ipr']; /*Index Postal Receiver*/
	$cReceiver = $_POST['cReceiver']; /*Continent Receiver*/
//------------------- Date
	$departureDate = $POST['departureDate'];	
	$deliveryTime = $POST['deliveryTime'];	



 ?>