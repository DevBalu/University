<?php 
	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
		require_once "../connection.php";

		// username
		$username = $_POST['username'];

		// email
		$email_input = $_POST['email'];
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		if(!preg_match($email_exp,$email_input)) {
			print 'Adresa de e-mail pe care ați introdus-o nu pare să fie validă.<br />';die;
		}else {
			$email = $_POST['email'];
		}

		// password
		$password = $_POST['password'];

		if ($conn) {
			// inscrierea in tabel users
			$sql_to_users = "INSERT INTO `users` (`id`, `username`, `password`, `lvl`) VALUES (NULL, '$username', '$password', '2');";
			$conn->query($sql_to_users);

			// inscrierea in tabel email
			$sql_to_email = "INSERT INTO `email` (`idemail`, `nume`, `emaile`) VALUES (NULL, '$username', '$email')";
			$conn->query($sql_to_email);
		}

		header("Location: ../log.php");
	}else {
		header("Location: ../registration.php");
	}
 ?>