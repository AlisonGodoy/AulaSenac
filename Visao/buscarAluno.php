<?php
include('../controle/controleSession.php');
include('../modelo/conexao.php');

?>
<html>
<head>
 	<meta charset="UTF-8"/>
    <title>Buscar Alunos</title>
    <script language="JavaScript" src="../js/funcoes.js"></script>
</head>
<body>
		<div class="container">
		<?php
			
			include('menuSuperior.php');
			
		?>

 
<div id="campos">
		<label for="fname">Nome do Aluno:</label>
		<input type="text" onkeypress="showUserBuscar(getElementById('fname').value)" id="fname" name="fname"><br><br>
	</div>
	

<div id="txtHint">
		</div>
		</div>	
	</body>
</html>