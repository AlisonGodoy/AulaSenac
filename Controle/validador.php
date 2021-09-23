<?php 
 session_start();
 include('../modelo/conexao.php');

	$email_login = $_POST['email_login'];
	$senha_login = $_POST['senha_login'];

	$sql = "SELECT count(*) AS quant 
	FROM usuario 
	WHERE login_usuario='".$email_login."' AND
	 senha_usuario='".$senha_login."'";       
 echo $sql;
 $result = mysqli_query($okdb, $sql);

 $rows  = $result->fetch_assoc();
 $quant = $rows['quant'];

  if($quant == 1){

		$_SESSION['in_ok'] = true;
		$_SESSION['controleLogin'] = true;
		header('Location: ../index.php');

	}else{
		$_SESSION['in_ok'] = false;
		unset($_SESSION['controleLogin']);
		header('Location: ../visao/login.php?error=t');
	}


?>