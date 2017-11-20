<?php
	session_start();

	include('connection.php');
	$sql = "SELECT * FROM teme";
	$result = $conn->query($sql);

	$res_count = mysqli_num_rows($result);

	// output data of each row

	$teme = "";
	if($res_count > 0){
		foreach($result as $row) {
			$teme .=
				'<div class="col s10 m5 l3 rind ">
					<a class="ta" href="answer.php?idt=' . $row["id_teme"] . '">
						<div class=" card-panel  box2">
								<span class="pink-text text-lighten-1 ">' . $row["TEME"] . '</span>
						</div>
						<blockquote>
								<p class="intro_evenimente">„' . $row["descriereteme"] .'”
								<address>' . $row["Autor"] . " / " . $row["CREATED"] .'</address>
								</p>
						</blockquote>
					</a>
				</div>';
		}
	} else {
		$teme =
			'<div class="col s10 m5 offset-m3 l3 offset-l3 rind ">
				<div class=" card-panel  box2">
					<span class="pink-text text-lighten-1 ">Nu este nici un eveniment</span>
				</div>
			</div>';
	}

	$conn->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once("components/head.php");?>
		<link rel="stylesheet" href="style/hide.css">
	</head>

	<body>
		<!-- navabr -->
		<?php include("navbar.php");?>
		<!-- END navabr -->

		<div class="divider" style="margin: 20px 0;"></div>
			<div class="row">
				<?php print $teme; ?>
			</div>

			<?php 
				if($_SESSION['lvl'] == 3 || $_SESSION['lvl'] == 2){
					$ac = 'coma';
				} else {
					$ac = 'comh';
				}
			 ?>
			<!-- add tema eveniment -->
			<div class="row <?php  print $ac; ?>">
				<form class="col s12 m8 l8 offset-m2 offset-l2 " action="themes.php" method="post">
					<div class="row">
						<h3 class="center-align">Adaugă evenimentul tau aici!!!</h3>


						<div class="input-field col l6 s12 ">
							<i class="material-icons prefix">chat</i>
							<input id="input_text" type="text" class="validate" name="numetema">
							<label for="input_text">Tema anuntului</label>
						</div>

						<div class="input-field col l6 s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" type="text" class="validate" name="autor">
							<label for="icon_prefix">Autor</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col l12 s12">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="textarea1" class="materialize-textarea" data-length="500" name="info"></textarea>
							<label for="textarea1">Detalii</label>
						</div>
					</div>
					<button class="btn-floating btn-large waves-effect waves-light red right" type="submit"><i class="material-icons">add</i></button>
				</form>
			</div><!-- END row -->
			<!-- add tema eveniment -->

		<?php require_once("components/footer.php"); ?>
	</body>
</html>
