<?php
	include("connection.php");
	if(!isset($_POST['numetema']) ||
		!isset($_POST['info']) ||
		!isset($_POST['autor'])) {
		$error_message .='Ne pare rău, dar se pare că există o problemă cu formularul pe care l-ați trimis.';
	}
	$numetema= $_POST['numetema'];
	$info = $_POST['info'];
	$autor=$_POST['autor'];
	$string_exp = "/^[A-Za-z .'-]+$/";
	$error_message = "";

	if(!preg_match($string_exp,$autor)) {
		$error_message .='Prenumele introdus nu pare să fie valabil.<br />';
	}
	if(strlen($error_message) > 0) {
		die($error_message);
	}

	$sql = "INSERT INTO teme (TEME, descriereteme, Autor) VALUES ('$numetema','$info', '$autor')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	header('Location: evenimente.php')
?>