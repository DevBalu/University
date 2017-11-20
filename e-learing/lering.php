<?php
	session_start();

// conecsiune cu baza de date
	require_once("connection.php");
//END conecsiune cu baza de date

	// dacă în adresa nu va fi prezent id la lecție pe noi o să ne redirecționeze pe pagina cu toate lecții
	if(!empty($_GET['idl'])){
		$idl = $_GET['idl'];
	} else {
		header("Location: /e-learing/home.php");
	}

/*Ceea ce este legat cu documentația lecției*/
	$lectia = "";
	$tema = "";
	$dialog = "";
	$vocabular = "";
	$gramatica = "";
	$exercitii = "";

	if ($conn) {
		// cerere spre baza de date legată cu contetul al lecției
		$sql_lec = "SELECT * FROM lectii WHERE id_lectii = $idl";
		$res_lec = $conn->query($sql_lec);

		// ciclul care ne filtrează date și le salvează în variabile, pe care noi o să afișăm mai jos
		while ($row_lec = $res_lec->fetch_object()) {
			$tema = $row_lec->denumire;
			$dialog = $row_lec->dialog;
			$vocabular = $row_lec->vocabular;
			$gramatica = $row_lec->gramatica;
			$exercitii = $row_lec->exercitii;
		}
/*END ceea ce este legat cu documentația lecției*/


/*ceea ce este legat cu comentariile a lecției*/
		// cerere spre baza de date legată cu comentarii la  lecției
		$sql_com = "
			SELECT * 
			FROM comentarii 
			WHERE id_lectii = $idl
			ORDER BY id_coment DESC 
		";

		$res_com = $conn->query($sql_com);

		// metoda care verifică numărul de rînduri primite 
		$com_count = mysqli_num_rows($res_com);

		// dacă numărul de rînduri primite este mai mare de cît zero ...
		if ($com_count > 0) {
			$comments = "";
			while ($row_com = $res_com->fetch_object()) {

				if ($_SESSION['lvl'] == 3) {
					$del_com = '<a href="php/del_comment.php?idc=' . $row_com->id_coment . '&idl=' . $row_com->id_lectii . '" class="btn black right">delete</a>';
				}else{
					$del_com = '';
				}

				$comments .= '
					<div class="comment">
						<blockquote>
							' . $del_com .'
							<address>' . $row_com->creat . '</address>
							<address>' . $row_com->autor . '</address>
							<p>' . $row_com->coment . '</p>
							<hr> 
						</blockquote>
						<br>
					</div>';
			}
		} else {
			$comments = '<div class="comment">
						<blockquote>
							<address>NU SUNT COMENTARII</address>
						</blockquote>
						<br>
					</div>';
		}
	}
/*END ceea ce este legat cu comentariile a lecției*/
?>

<!DOCTYPE html>
	<head>
		<?php require_once("components/head.php"); ?>
		<link rel="stylesheet" href="style/hide.css">
	</head>
	<body>
		<!-- navbar -->
		<?php include("navbar.php");?>
		<!-- END navbar -->

		<!-- first section -->
		<div class="lering">
			<h1>
				Tema:<?php print $tema;?></br>
				<hr>주제
			</h1>
		</div>
		<!-- END first section -->

		<div class="container">
			<!-- second section -->
			<div class="row">
				<div class="col l7 s12  ">
					<h2>Dialog</h2>
					<p><?php print $dialog;?></p>
				</div>

				<div class="col l5 s12">
					<h2>Vocabular</h2>
					<p><?php print $vocabular; ?></p>
				</div>
			</div><!-- END row -->
			<!-- END second section -->

			<!-- third section -->
			<div class="row">
				<div class="col l12 s12">
					<h2>Gramatica</h2>
					<p><?php print $gramatica; ?></p>
				</div>
			</div>
			<!-- END third section -->

			<!-- fourth section -->
			<div class="row">
				<div class="col l12  s12">
					<h2>Tema pe acasa</h2>
					<p><?php print $exercitii; ?></p>
				</div>
			</div>
			<!-- END fourth section -->
		</div><!-- END container -->

		<div class="divider"></div>
		<br>
		<div class="divider"></div>

		<!-- chat section -->
		<div class="container-fluid">
			<div class="row"><!-- main chat row -->
				<!-- comment -->
				<div class="compost col l6 offset-l1 s12">
					<h4 class="center-align">COMENTARII</h4>
					<?php print $comments; ?>
					
				</div>
				<!-- END comment -->
<?php 
// limit acces functional
	if ($_SESSION['lvl'] == 3 || $_SESSION['lvl'] == 2) {
		$com_ac = "coma";
		$test = '<a href="test/test.php?idl=' . $idl . '" class="btn btn-test"><p>DOREȘTI SĂ CONFIRMI CUNOȘTINȚE PRIMITE ȘI SĂ TRECI UN TEST</p></a>';
	}else{
		$com_ac = "comh";
		$test = '';
	}
 ?>
				<!-- add coment  -->
				<div class=" <?php print $com_ac; ?> coment col l3 offset-l1 s12">
						<form  method="post" action="php/add_comment.php?idl=<?php print $idl;?>" method="post">
							<div class="input-field ">
								<i class="material-icons prefix">account_circle</i>
								<input id="nume" type="text" class="validate" name="nume">
								<label for="nume">Nume</label>
							</div>

							<div class="input-field ">
								<i class="material-icons prefix">account_circle</i>
								<input id="prenume" type="text" class="validate" name="prenume">
								<label for="prenume">Prenume</label>
							</div>

							<div class="input-field">
								<i class="material-icons prefix">message</i>
								<textarea id="textarea1" class="materialize-textarea" name="mesajul"></textarea>
								<label for="textarea1">Introduceți mesajul dumnevoastre</label>
							</div>
							<button type="submit" value="Submit" class="btn right">posteza</button> 
						</form>
				</div>

				<!-- add coment  -->
			</div><!-- END main chat row -->
		</div>
		<!-- END chat section -->

		<div class="divider"></div>
		<br>
		<div class="divider"></div>
		<br>
		<br>

		<!-- test -->
		<div class="container btn-test">
			<div class="row">
				<div class="l6 offset-l3 s12 wrap_con">
					<?php print $test; ?>
				</div>
			</div>
		</div>
		<style>
			.btn-test .row .wrap_con {
				height: 100px;
			}
			.btn-test .row div a {
				width:100%;
				min-height: 62px;
			}
			.btn-test .row div a p {
				font-size: 15px;
				color:#fff;
			}
			@media screen and (max-width: 500px) {
				.btn-test .row div a p {
					margin: 0;
				}
			}
		</style>
		<!-- END test -->

		<!-- include footer -->
		<?php require_once("components/footer.php"); ?>
		<!-- END include footer -->
	</body>
</html>
