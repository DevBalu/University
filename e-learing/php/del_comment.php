<?php 
	require_once('../connection.php');

	if (!empty($_GET["idc"]) && !empty($_GET["idl"])) {
		$idc = $_GET["idc"];
		$idl = $_GET["idl"];
	}

	if ($conn) {
		$sql = "DELETE FROM `comentarii` WHERE `comentarii`.`id_coment` = $idc";
		$conn->query($sql);
		header("Location: /e-learing/lering.php?idl=" . $idl);

	}else {
		print "Connection filed";
	}
 ?>