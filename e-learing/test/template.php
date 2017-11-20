<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
</head>
<body>
	<?php include("rezultate.php"); ?>

	<div class="container">
	<a href="../home.php" class="btn-floating btn-large waves-effect waves-light blue teal" style="position: absolute; top: 50px; left: 50px;"><i class="material-icons">input</i></a>
		<div class="row" >
			<div class="col m6 offset-m3" style="height: 100vh !important; display: -webkit-flex; display: flex; justify-content: center; align-items: center;">
				<div class="card-panel teal">
					<span class="white-text" style="font-size: 20px;">
							<?php
								echo("Puncte acumulate: $count <br>");
								echo("Rezolvat: $rezultat % din test. <br>");
								echo("Nota: $nota <br>");
							?>
					</span>
				</div>
			</div>
		</div>
	</div>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

	<script src="comun.js"></script>
</body>
</html>