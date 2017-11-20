<?php
	if(!isset($_SESSION['lvl'])){
		$_SESSION['lvl'] = 1;
		$_SESSION['usn'] = "";
	}
	// print $_SESSION['lvl'];die;
	if($_SESSION['lvl'] == 3 || $_SESSION['lvl'] == 2){
		$username = $_SESSION['usn'];
		$log = '
			<li><a href="php/logout.php" class=" brand-logo right el_righ">IEȘIRE</a></li>
			<li><a href="#">' . $username .'</a></li>';

	}else {
		$log = '
			<li><a href="log.php" class="brand-logo right el_righ">LOGARE</a></li>
		';
	}

	if($_SESSION['lvl'] == 3){
		$admin = '<li><a href="add_lectie.php">Panoul Adm</a></li>';
	}else {
		$admin = "";
	}
?>
<nav class="grey darken-3">
	<div class="nav-wrapper">
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="left hide-on-med-and-down">
			<li><a href="index.php">한국어</a></li>
			<li><a href="home.php">Lecții</a></li>
			<li><a href="action.php">Activitate</a></li>
			<li><a href="evenimente.php">Evenimente</a></li>
			<li><a href="user.php">Alatură-te</a></li>
			<?php print $admin; ?>
			<?php print $log; ?>
		</ul>

		<!-- mobile nav-->
		<ul class="side-nav" id="mobile-demo">
			<li><a href="index.php">한국어</a></li>
			<li><a href="home.php">Lecții</a></li>
			<li><a href="action.php">Activitate</a></li>
			<li><a href="evenimente.php">Evenimente</a></li>
			<li><a href="user.php">Alatură-te</a></li>
			<?php print $log; ?>
		</ul>
		<!-- END mobile nav-->
	</div>
</nav><!-- END navbar -->
