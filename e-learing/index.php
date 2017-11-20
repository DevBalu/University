<?php
	session_start();
?>
<!DOCTYPE html>
	<head>
		<?php require_once("components/head.php"); ?>
	</head>
	<body class="global">
	<!-- navbar -->
		<?php include("navbar.php");?>
	<!-- END navbar -->


	<!-- FIRST SECTION -->
		<div class="welcome">
			<div class="container welc_info">
				<h1>Bine ați venit</br>
					<hr>
					오신 것을 환영합니다
				</h1>
			</div><!-- END CONTAINER -->
		</div><!-- END welcome -->
	<!-- END FIRST SECTION  -->

	<!-- SECOND SECTION -->
		<div class="row">
			<div class="col l6 s12 box1">
				<p class="h1"><body class="global">
				Omul trebuie să exploreze,</br>
				învață Limba Coreeană acum împreună cu noi.</p>
				<a href="home.php" class=" button">ÎNCEPE ACUM </a>
			</div>

			<div class="col l6 s12 box2">
				<h2><i class="fa fa-thumbs-o-up" aria-hidden="true"> De ce ai începe:</i></h2>
				<p><i class="fa fa-check" aria-hidden="true">Dezvoltarea creierului.</i><br>
					<i class="fa fa-check" aria-hidden="true">Creşterea atenţiei.</i><br>
					<i class="fa fa-check" aria-hidden="true"> Noi moduri de a vedea lumea.</i><br>
					<i class="fa fa-check" aria-hidden="true"> Îmbunătăţirea limbii native.</i><br>
					<i class="fa fa-check" aria-hidden="true"> Mai buni la multi-tasking.</i><br>
					<i class="fa fa-check" aria-hidden="true"> Îţi îmbunătăţeşti capacitatea de memorare.</i><br>
					<i class="fa fa-check" aria-hidden="true"> Devii mai sensibil la sunete.</i><br>
					<i class="fa fa-check" aria-hidden="true"> Descoperi noi culturi.</i><br>
				</p>
			</div>
		</div>
	<!-- END SECOND SECTION -->

		<?php require_once("components/footer.php"); ?>
	</body>
	<footer>
		<address class="powered"><p class="center-align">Created by C.H(cristina.haruța)&copy;2017</p></address>
	</footer>
</html>
