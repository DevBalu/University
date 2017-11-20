<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autorizare</title>
	<link rel="stylesheet" href="style/log.css">
	<?php require_once ("components/head.php"); ?>
</head>
<body>
	<div id="btn"><a href="index.php">ACASA</a></div>

	<div class="container">
		<div class="row">
			<div class="login col l5 offset-l3 s12">
				<div class=""><a href="e-learing"></a></div>
				<h2 class="login-header">Log in</h2>

				<form class="login-container" method="post" action="php/log_func.php">
					<p><input type="text" placeholder="Username" name="username"></p>
					<p><input type="password" placeholder="Password" name="password"></p>
					<p><input type="submit" value="Sign in"></p>
				</form>
				<p><a href="registration.php" class=" btn-large  grey darken-1">Înregistrează-te</a></p>
			</div>
		</div>
	</div>

	<?php include("components/footer.php"); ?>

</body>
</html>