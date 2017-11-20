
<?php
	include("connection.php");
	if(!isset($_POST['lastname']) ||
		!isset($_POST['email'])) {
		die('Ne pare rău, dar se pare că există o problemă cu formularul pe care l-ați trimis.');
	}

	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email)) {
		$error_message .= 'Adresa de e-mail pe care ați introdus-o nu pare să fie validă.<br />';
	}

	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$lastname)) {
		$error_message .='Prenumele introdus nu pare să fie valabil.<br />';
	}

	if(strlen($error_message) > 0) {
		die($error_message);
	}

	$email_message = "Detaliile formularului de mai jos.\n\n";
	$sql = "INSERT INTO email ( nume, emaile)
			VALUES ('$lastname', '$email')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	header('Location: user.php');
?>