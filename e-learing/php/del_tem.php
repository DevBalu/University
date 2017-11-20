<?php 
	require_once('../connection.php');

	if (!empty($_GET["idt"])) {
		$idt = $_GET["idt"];
	}else{
		header("Location: /e-learing/evenimente.php");
	}

	if ($conn) {
		$sql = "DELETE FROM `teme` WHERE `teme`.`id_teme` = $idt";
		$conn->query($sql);
		header("Location: /e-learing/evenimente.php");

	}else {
		print "Connection filed";
	}
 ?>