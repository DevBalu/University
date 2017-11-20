<?php
	session_start();
?>
<!DOCTYPE html>
<head>
	<?php require_once("components/head.php"); ?>
	<link rel="stylesheet" href="style/user.css">
</head>
<body class="global">
	<!-- navbar -->
		<?php include("navbar.php");?>
	<!-- END navbar -->

	<div class="admin">
		<h1><!-- Denspre noi. -->Propuneri Dumneavoastre
			</br>
			<hr>
			<p class="center">우리에 대해</p>
		</h1>
	</div>


	<div class="box row">
		<div class="box1 col l6 s12">
			<h1 class="message"> Ajutați-ne pentru a deveni mai buni, fiecare sugestie pentru noi este prețioasă.<br>
			Lasă-ne emailu pentru a primi reamintiri pe poșta taelectronica</h1>

			<br>

			<form name="email_user" method="post" action="basadate.php" class="row">
				<input text="text" name="lastname" placeholder="Nume" class="col l4 s12">
				<input type="text" name="email" placeholder="Email" class="col l4 offset-l1 s12">
				<button class=" btn col l2 offset-l1 s12 black"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
			</form>
		</div>


		<div class="box2 col l6 s12">
			<h2 class="prop">Lasați propuneri aici</h2>
			<div class="form">
				<form name="contactform" method="post" action="mail.php">
					<div class="input-field">
						<i class="prefix fa fa-hand-o-right fa-1x" aria-hidden="true"></i>
						<input id="nume" type="text" class="validate" name="first_name">
						<label for="nume">Nume</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">account_circle</i>
						<input id="prenume" type="text" name="last_name">
						<label for="prenume">Prenume</label>
					</div>

					<div class="input-field">
						<i class="prefix fa fa-envelope-open-o fa-2x" aria-hidden="true"></i>
						<input id="mail" type="text" name="email">
						<label for="mail">Email</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">done</i>
						<input id="virsta" type="text" name="varsta"><br>
						<label for="virsta">Vârsta</label>
					</div>

					<div class="input-field">
						<i class="prefix fa fa-comment fa-2x" aria-hidden="true"></i>
						<textarea id="propunere" class="materialize-textarea" row="60" cols="50" type="text" name="comments"></textarea>
						<label for="propunere">Introduceți propunerile dumnevoastre</label>
					</div>

					<input class="btn right" type="submit" value="TRIMITE">
				</form>

			</div>
		</div>
	</div>
	<?php require_once("components/footer.php"); ?>
</body>
</html>
