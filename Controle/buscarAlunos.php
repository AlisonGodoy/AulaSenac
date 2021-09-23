<?php

	include('../modelo/conexao.php');
	
	$user = "fname";

	$fname = $_GET["fname"];
	$okdb = mysqli_connect("localhost", "root", "", "aula");


	$sql="SELECT 
			id_aluno,
			nome_aluno,
			aniversario_aluno,
			sexo_aluno
		 FROM aluno  
		 WHERE nome_aluno LIKE '%" . $fname. "%'";
 				
	  $result = mysqli_query($okdb,$sql);
	 
  	
	
	 echo "<table border='1'>
<tr>
<th>Nome</th>
<th>Aniversário</th>
<th>Sexo</th>
</tr>";

 while($rows = $result->fetch_assoc()){
  //$id = $rows['id_aluno'];
  echo "<tr>";
  echo"<td><a href='../visao/alterarAlunos?id=".$rows['id_aluno']."'>" . $rows['nome_aluno'] . "</a></td>";
  echo"<td><a href='../visao/alterarAlunos?id=".$rows['id_aluno']."'>" . $rows['aniversario_aluno'] . "</a></td>";
  echo"<td><a href='../visao/alterarAlunos?id=".$rows['id_aluno']."'>" . $rows['sexo_aluno'] . "</a></td>";     
  }
echo "</table>";

mysqli_close($okdb);
	
      
?>