<?php 
	session_start();
	// conecsiune cu baza de date
	require_once("../connection.php");

	// dacă în adresa nu va fi prezent id la lecție pe noi o să ne redirecționeze pe pagina cu toate lecții
	if(!empty($_GET['idl'])){
		$idl = $_GET['idl'];
	} else {
		header("Location: /e-learing/home.php");
	}

	if ($conn) {
		$sql = "
			SELECT `teste`.* , `lectii`.`denumire` FROM `teste`
			LEFT JOIN `lectii` ON `lectii`.`id_lectii` = `teste`.`id_lectii`
			WHERE `teste`.`id_lectii` = $idl
		";

		$res_test = $conn->query($sql);
		$num_rows = mysqli_num_rows($res_test);

		if ($num_rows > 0) {
			$i = 1;
			// intrebari la lectii
			$intrebare = "";


			$buton = '<button type="submit" class="btn">verificare</button>';
			while ($row_test = $res_test->fetch_object()){
				$nume_lec =" TESTUL " . $row_test->denumire;

				$str_inc = $row_test->ras_inc;

				$arr_inc = explode(",", $str_inc);

				$option = "";
				foreach ($arr_inc as $word_inc) {
					$option .= '<option value="' . $word_inc . '">' . $word_inc . '</option>';
				}
				$id_intr = $row_test->id;

				if($_SESSION['lvl'] != 3){
					$del_intreb = "";
				}else {
					$del_intreb = ' <a href="../php/del_intreb.php?idi=' . $id_intr . '&idl=' . $idl . '" class="btn">del </a>';
				}

				$intrebare .= '
					<h3>' . $row_test->intrebare . $del_intreb . '</h3>
					<select name="' . $i++ . '">'
					. $option .
					'</select><br>
				';
			}
		} else {
			$nume_lec = " Cerem scuză.<br>Pentru lecția alesă nu era adaugat testul.";
			$intrebare = "";
			$buton = "";
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<link rel="stylesheet" href="test.css">
	</head>

	<body>

		<br>
		<br>
<?php 
	if ($_SESSION['lvl'] != 3) {
		$acc = 'class="ach"';
	}else {
		$acc = 'class="aco"';
	}
 ?>
		<div id="adauga" <?php print $acc; ?> >
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><i class="material-icons">add</i>ADAUGĂ TEST</div>
					<div class="collapsible-body" style="background: #fff;">
						<form action="../php/add_test.php?idl=<?php print $idl; ?>" method="POST" class="row">
							<div class="input-field">
								<input type="text" class="validate" placeholder="Întrebare" name="intrebare">
							</div>

							<div class="input-field">
								<input type="text" class="validate" placeholder="Răspuns incorect" name="ras_inc">
							</div>

							<div class="input-field">
								<input type="text" class="validate" placeholder="Răspuns corect" name="ras_cor">
							</div>

							<button class="btn col l12" type="submit"><i class="material-icons">add</i></button>
						</form>
					</div>
				</li>
			</ul>
		</div>

		<a href="../home.php" class="btn-floating btn-large waves-effect waves-light blue teal rotate" style="margin-left: 20px;"><i class="material-icons ">input</i></a>

		<br>
		<br>
		<br>
		<br>

		<div class="container">
			<form action="template.php?idl=<?php print $idl; ?>" method="POST">
				<h2><br><?php print $nume_lec; ?></h2>
				<?php print $intrebare; ?>

				<?php print $buton; ?>
			</form>
		</div><!-- END container -->

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

		<script src="comun.js"></script>
	</body>
</html>