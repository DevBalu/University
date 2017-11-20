<?php 

	if(!empty($_GET['idl'])){
		$idl = $_GET['idl'];
	} else {
		header("Location: /e-learing/home.php");
	}

	if (!empty($_POST['intrebare']) && !empty($_POST['ras_inc']) && !empty($_POST['ras_cor'])) {
		// conecsiune cu baza de date
		require_once("../connection.php");

		$intrebare = $_POST['intrebare'];
		$ras_inc = $_POST['ras_inc'];
		$ras_cor = $_POST['ras_cor'];

		if ($conn) {
			$sql = "INSERT INTO `teste` (`id`, `id_lectii`, `intrebare`, `ras_inc`, `ras_cor`) VALUES (NULL, '$idl', '$intrebare', '$ras_inc', '$ras_cor')";
			$conn->query($sql);
			header("Location: ../test/test.php?idl=" . $idl);
		}

	} else {
		header("Location: ../test/test.php?idl=" . $idl);
	}

	// print $_POST['ras_inc'];
	// print $_POST['intrebare'];
	// print $_POST['ras_cor'];

 ?>