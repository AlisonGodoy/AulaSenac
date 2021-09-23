<?php
	session_start();
	$_SESSION['in_ok'] = false;
	unset($_SESSION['controleLogin']);
	header('Location: ../index.php');

?>