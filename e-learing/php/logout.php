<?php 
	session_start();
	$_SESSION['lvl'] = null;
	$_SESSION['usn'] = null;
	header('Location: /e-learing');
?>