<?php
// listar nome, aniver,sexo


if($acaoLista == 'LnomeAniverSexo'){

// EXECUTAR QUERY

$result = mysqli_query($okdb, "SELECT nome_aluno,
aniversario_aluno,
sexo_aluno
 FROM aluno");
$contar = 0;

while($rows = $result -> fetch_assoc()){
$contar ++;

  $array_aluno[$contar]['nome_aluno']     = $rows['nome_aluno'];
  $array_aluno[$contar]['aniversario_aluno']   = $rows['aniversario_aluno'];
  $array_aluno[$contar]['sexo_aluno'] = $rows['sexo_aluno'];

  
  }
}else if($acaoLista == 'IdAluno'){
$result = mysqli_query($okdb, "SELECT nome_aluno,
aniversario_aluno,
sexo_aluno
 FROM aluno
 WHERE id_aluno=" .$id);
$contar = 0;

while($rows = $result -> fetch_assoc()){
$contar ++;

  $array_aluno[$contar]['nome_aluno']     = $rows['nome_aluno'];
  $array_aluno[$contar]['aniversario_aluno']   = $rows['aniversario_aluno'];
  $array_aluno[$contar]['sexo_aluno'] = $rows['sexo_aluno'];
}
}
?>