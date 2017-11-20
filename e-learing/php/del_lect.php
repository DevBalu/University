<?php 
	require_once('../connection.php');

	if (!empty($_GET["idl"])) {
		$idl = $_GET["idl"];
	}else{
		// header("Location: /e-learing/home.php.php");
	}

	if ($conn) {
		$sql = "DELETE FROM `lectii` WHERE `lectii`.`id_lectii` = $idl";
		$conn->query($sql);
		header("Location: /e-learing/home.php");

	}else {
		print "Connection filed";
	}
 ?>