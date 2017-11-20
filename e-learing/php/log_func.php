<?php
	session_start();

	if(!empty($_POST['username']) && !empty($_POST['password'])){
		include "../connection.php";
		$username = $_POST['username'];
		$password = $_POST['password'];
		// print $username;

		if ($conn) {
			$userreq = mysqli_query($conn, "SELECT * FROM users") ;
			while($response = $userreq->fetch_object()){

				if($response->username ==  $username && $response->password == $password){

					$_SESSION['lvl'] = (int)$response->lvl;
					$_SESSION['usn'] = $response->username;
					header('Location: ../index.php');
				} else {
					print "username sau parola nu sunt corecte";
				}
			}
		}

	}else{
		print "cinpurile sunt goale";
	}


// print "<pre>";
// print_r($response->username);
// print "</pre>";

 ?>