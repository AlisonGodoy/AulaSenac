<?php
$q=$_GET["q"];

$okdb =  mysqli_connect("localhost", "root", "", "aula");
 
 

$sql="SELECT nome_aluno, aniversario_aluno, sexo_aluno FROM aluno WHERE id_aluno =". $q;


$result = mysqli_query($okdb,$sql);

echo "<table border='1'>
<tr>
<th>Nome</th>
<th>Aniversário</th>
<th>Sexo</th>
</tr>";

 while($rows = $result->fetch_assoc()){
  echo "<tr>";
  echo "<td>" . $rows['nome_aluno'] . "</td>";
  echo "<td>" . $rows['aniversario_aluno'] . "</td>";
  echo "<td>" . $rows['sexo_aluno'] . "</td>";  
  }
echo "</table>";

mysqli_close($okdb);
?>