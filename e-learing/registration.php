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
				<h2 class="login-header">registrația</h2>

				<form class="login-container" method="post" action="php/reg_log.php">
					<p><input type="text" placeholder="username" name="username"></p>
					<p><input type="text" placeholder="email" name="email"></p>
					<p><input type="password" placeholder="Password" name="password"></p>
					<p><input type="submit" value="trimite"></p>
				</form>
			</div>
		</div><!-- END ROW -->
	</div><!-- END container -->

	<?php include("components/footer.php"); ?>

</body>
</html>