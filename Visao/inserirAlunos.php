	<?php

	include('../modelo/conexao.php');

	?>

<html>
<head>
    <meta charset="UTF-8"/>
    <title>Inserir Alunos</title>
    <script language="JavaScript" src="../js/funcoes.js"></script>
</head>
<body>
	<div class="container">

	<?php
				
	include('menuSuperior.php');
				
	?>
		
	<div id="form">
		  <label for="fname">Nome do Aluno:</label>
		  <input type="text" id="fname" name="fname"><br><br>
		  <label for="lnasc">Nascimento:</label>
		  <input type="text" id="lnasc" name="lnasc"><br><br>
		  <label for="lsexo">Sexo:</label>
		  <input type="text" id="lsexo" name="lsexo"><br><br>
	</div>

	<div>
		<button type="button" onclick="showUser(getElementById('fname').value,getElementById('lnasc').value,getElementById('lsexo').value)">Cadastrar</button> 
	</div>

<div id="txtHint"></div>
		
	</div>
</body>
</html>