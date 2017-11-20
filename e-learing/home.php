<?php
	session_start();

	include("connection.php");

	if (!$_SESSION['lvl']) {
		$_SESSION['lvl'] = 0;
	}

	if ($conn) {
		$sql = "SELECT * FROM lectii";
		$results = $conn->query($sql);
		$lectii = "";
		while ($row = $results->fetch_object()) {

			if ($_SESSION['lvl'] == 3) {
				$del_lec = '<a class="btn black" href="php/del_lect.php?idl=' . $row->id_lectii . '">del lect</a>';
			}else{
				$del_lec = '';
			}

			$lectii .= '
				<div class="col l3 s10 offset-s1" style="margin-bottom: 18px;">
					' . $del_lec . '
					<div class="lectii">
						<a href="lering.php?idl=' . $row->id_lectii . '">
							<h4>' . $row->denumire . '</h4>
							<p>' . $row->created . '</p>
						</a>
					</div>
				</div>';
		}
	}

?>
<!DOCTYPE html>
<head>
	<?php require_once("components/head.php"); ?>
</head>
<body class="global">
	<?php include("navbar.php");?>
	<div class="lering">
	</div>

	<div class="row">
		<?php print $lectii ?>
	</div>
	<?php require_once("components/footer.php"); ?>
</body>
</html>
