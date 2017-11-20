<?php
	// conecsiune cu baza de date
	require_once("../connection.php");

	if(!empty($_GET['idl'])){
		$idl = $_GET['idl'];
	} else {
		header("Location: /e-learing/home.php");
	}

	// primim raspunsuri corecte din baza
	if ($conn) {

		// primim resultat corect din db
		$sql ="SELECT `teste`.* FROM `teste` WHERE `teste`.`id_lectii` = $idl";
		$res_query = $conn->query($sql);

		$num_rows = mysqli_num_rows($res_query);

		// primim valoare introdusa
		// $vasea = []; aici se salveaza rezultate primite din forma. Avem nevoie doar cind proiectam pt verificari.
		$i = 1;
		$count = 0;
		while($r_cor = $res_query->fetch_object()){
			$ras_cor = $r_cor->ras_cor;

			if($_POST["$i"] == $ras_cor){
				$count++;
			}

			// if (!empty($_POST["$i"])) {
			// 	$vasea[] = $_POST["$i"];
			// }

			$i++ ;
		}

	}
	$rezultat = $count * 100 / $num_rows;
	$nota = floor(10 * $rezultat / 100);

?>