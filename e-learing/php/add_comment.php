<?php 
	require_once('../connection.php');

	if (!empty($_GET["idl"])) {
		$idl = $_GET["idl"];
	}

	if ($conn) {
		if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['mesajul'])) {
			$autor = $_POST['nume'] . " " . $_POST['prenume']; 
			$coment = $_POST['mesajul'];

			$sql = "INSERT INTO `comentarii` (`id_lectii`, `coment`, `autor`) VALUES ('$idl', '$coment', '$autor')";
			$conn->query($sql);
			header('Location: ../lering.php?idl=' . $idl);
		}else{
			print "Сompletați toate câmpurile";
		}
	}else{
		print "connection filed.";
	}
 ?>