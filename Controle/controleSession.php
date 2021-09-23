<?php
session_start();

	if($_SESSION['controleLogin'] == false){
		header('Location: ../visao/login.php?error=s');
	}

?>