<?php
	session_start();
	include('connection.php');

	if (!empty($_GET["idt"])) {
		$idt = $_GET["idt"];
	}else{
		header("Location: /e-learing/evenimente.php");
	}

	$sql = "SELECT * FROM teme WHERE id_teme = $idt";

	$result = $conn->query($sql);
	$res = $result->fetch_object();

	$res_count = mysqli_num_rows($result);

	// output data of each row
	if($res_count > 0){
		$title = $res->TEME;
		$description = $res->descriereteme;
		$author = $res->Autor;
		$created = $res->CREATED;
	}else {
		print "In baza de date nu este gasit evenimentul dat";
	}

?>
<html>
	<head>
		<?php require_once("components/head.php");?>
	</head>

	<body>
		<!-- navabr -->
		<?php include("navbar.php");?>
		<!-- END navabr -->

		<div class="container">
			<div class="row">
				<div class="clo s12 m12 l12">
					<div class="card-panel s10 m10 l10 tema">
						<h3>Tema:<br><?php print $title; ?></h3>
					</div>
						<blockquote>
							<p><?php print $created; ?></p>
							<p><?php print $description; ?></p>
							<footer><address><?php print $author; ?></address></footer>
						</blockquote>

						<a href="evenimente.php" class="btn ellow left">înapoi</a>
						<?php 
							if($_SESSION['lvl'] == 3 ){
								$del_event = '<a href="php/del_tem.php?idt='. $idt . '" class="btn black right">delete</a>';
							} else {
								$del_event = '';
							}
							print $del_event;
						 ?>
						

				</div>
			</div>
		</div>
	</body>
</html>