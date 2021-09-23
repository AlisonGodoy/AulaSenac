<?php

$server = $_SERVER['HTTP_HOST'];
if(@$_GET['error'] == 't'){
	echo "<script> alert('Usuário não Cadastrado');</script>";
}elseif(@$_GET['error'] == 's'){
	echo "<script> alert('Você deve Logar');</script>";
}
?>
<html>
<head>
	<meta charset="UTF-8"/>
	<title> Login </title>
	<script language="JavaScript" src="<?php echo "http://".server."/aulasenac/js/funcoes.js" ?>"></script>

<link rel="stylesheet" href="<?php echo "http://".$server."/aulasenac/css/login.css" ?>">

</head>

<body>
	<div class="container">
		<div id="login">
		
	<form method="POST" action="<?php echo "http://".$server."/aulasenac"?>/controle/validador.php">
	<center><h1>Login</h1></center>
	<p>
		<center><label for="email_login">Seu email</label></center>
		<input id="email_login" name="email_login" required="required" type="text" placeholder="ex. email@gmail.com"/>
	</p>

	<p>
		<center><label for="senha_login">Sua senha</label></center>
		<input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha"/>
	</p>

	<p>
		<center><input type="submit" value="Logar" /></center>
	</p>
</form>
</div>
</div>
</body>
</html>