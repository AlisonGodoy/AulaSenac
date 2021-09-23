<?php
include('../controle/controleSession.php');
include('../modelo/conexao.php');

$id = $_GET['id'];
$acaoLista = 'IdAluno';
include('../controle/listarAlunos.php');
?>

<html>
<head>
    <meta charset="UTF-8"/>
    <title>Alterar Alunos</title>
    <script language="JavaScript" src="../js/funcoes.js"></script>
</head>
<body>
			<div class="container">
		<?php
			
			include('menuSuperior.php');
			
		?>
		

	
		  <input type="hidden" id="id_aluno" value="<?php echo $id ?>">
		  <label for="fname">Nome do Aluno:</label>
		  <input type="text" id="fname" name="fname" value="<?php echo $array_aluno[1]['nome_aluno']?>"><br><br>
		  <label for="lnasc">Nascimento:</label>
		  <input type="text" id="lnasc" name="lnasc" value="<?php echo $array_aluno[1]['aniversario_aluno']?>"><br><br>
		  <label for="lsexo">Sexo:</label>
		  <input type="text" id="lsexo" name="lsexo" value="<?php echo $array_aluno[1]['sexo_aluno']?>"><br><br>
	
		<button type="button" onclick="showUserAlterar(getElementById('fname').value,getElementById('lnasc').value,getElementById('lsexo').value,getElementById('id_aluno').value)">Alterar</button> 
	

		
			
	</body>
</html>

<?php

//mysqli_free_result($result);

?>