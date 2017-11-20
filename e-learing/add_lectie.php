<?php
	session_start();
	if($_SESSION['lvl'] != 3){
		header('Location: /index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADD CONTENT LA LECTIE</title>
	<?php require_once("components/head.php") ?>
	<link rel="stylesheet" href="style/admin_page.css">
		<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<div id="btn"><a href="index.php">ACASA</a></div>
	<div class="container mr_top" style="">
		<div class="row">

			<form id="form" class=" col l8 offset-l2 s12 m12" action="php/add_lectie_log.php" method="post">
				<input type="text" placeholder="DENUMIRE" name="denumire">
				<h4>TEXT</h4>
				<textarea id="editor1" type="text" placeholder="DIALOG" name="dialog"></textarea><br>
					<script type="text/javascript">
						CKEDITOR.replace( 'editor1' );
						AjexFileManager.init({
							returnTo: 'ckeditor',
							editor: ckeditor1
						});
					</script>

				<h4>VOCABULAR</h4>
				<textarea id="editor2" type="text" placeholder="VOCABULAR" name="vocabular"></textarea><br>
					<script type="text/javascript">
						CKEDITOR.replace( 'editor2' );
						AjexFileManager.init({
							returnTo: 'ckeditor',
							editor: ckeditor1
						});
					</script>

				<h4>GRAMATICA</h4>
				<textarea id="editor3" type="text" placeholder="GRAMATICA" name="gramatica"></textarea><br>
					<script type="text/javascript">
						CKEDITOR.replace( 'editor3' );
						AjexFileManager.init({
							returnTo: 'ckeditor',
							editor: ckeditor1
						});
					</script>

				<h4>EXERCITII</h4>
				<textarea  id="editor4" type="text" placeholder="EXERCITII" name="exercitii"></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'editor4' );
						AjexFileManager.init({
							returnTo: 'ckeditor',
							editor: ckeditor1
						});
					</script>

				<input id="submit" type="submit" value="Adaugă!">
			</form>
		</div>
	</div>

	<?php require_once("components/footer.php") ?>
</body>
</html>