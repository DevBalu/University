<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
</head>
<body>
<?php include("rezultate.php") ?>
<div class="container">
	<div class="row" >
		<div class="col m6 offset-m3" style="height: 100vh !important; display: -webkit-flex; display: flex; justify-content: center; align-items: center;">
			<div class="card-panel teal">
          		<span class="white-text">
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

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script src="comun.js"></script>
</body>
</html>