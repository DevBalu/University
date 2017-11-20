<?php 
	require_once('../connection.php');

	if (!empty($_GET["idi"]) && !empty($_GET["idl"])) {
		// id intrebare
		$idi = $_GET["idi"];
		// id lectie
		$idl = $_GET["idl"];
	}

	if ($conn) {
		$sql = "DELETE FROM `teste` WHERE `teste`.`id` = $idi";
		$conn->query($sql);
		header("Location: /e-learing/test/test.php?idl=" . $idl);

	}else {
		print "Connection filed";
	}
 ?>