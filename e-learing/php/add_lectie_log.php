<?php
	session_start();
	if(!empty($_SESSION['auth'])){

		if(!empty($_POST['denumire']) && !empty($_POST['dialog']) && !empty($_POST['vocabular']) && !empty($_POST['gramatica']) && !empty($_POST['exercitii'])){
			$denumirea = $_POST['denumire'];
			$dialog = $_POST['dialog'];
			$vocabular = $_POST['vocabular'];
			$gramatica = $_POST['gramatica'];
			$exercitii = $_POST['exercitii'];

			include "../connection.php";
			if ($conn) {
				$query = mysqli_query($conn, "INSERT INTO `lectii` (`denumire`, `dialog`, `vocabular`, `gramatica`, `exercitii`) VALUES ('$denumirea', '$dialog', '$vocabular', '$gramatica', '$exercitii')") ;
				header('Location: ../add_lectie.php');
			}else{
				print "connection filed.";
			}
		}else{
			header('Location: ../add_lectie.php');
		}
	}else{
		header('Location: ../index.php');
	}
?>