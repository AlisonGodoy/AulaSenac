<?php
session_start();
if(@$_SESSION['in_ok'] == false){

	include('visao/login.php');

}else if($_SESSION['in_ok'] == true){
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Listar Alunos</title>
</head>
<body>
	<div class="container">
<?php
include('visao/menuSuperior.php');
?>
</div>
</body>
</html>
<?php
}
//$_SESSION['in_ok'] = false;
?>