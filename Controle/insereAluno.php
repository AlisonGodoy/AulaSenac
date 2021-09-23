<?php
include('../modelo/conexao.php');

// Recebe valores do post - Start
$fname = $_GET['fname'];
$lnasc = $_GET['lnasc'];
$lsexo = $_GET['lsexo'];
// Recebe valores do post - End

// Tratamento - Start 
$lnasc = date('Y-m-d',strtotime($lnasc) );
// Tratamento - End  




/// EXECUTAR QUERY - START

   $execQuery = "
          INSERT INTO aluno 
          		(
          		 nome_aluno, 
          		 aniversario_aluno, 
          		 sexo_aluno
          		 ) VALUES(
          		      '".$fname."',
          		      '".$lnasc."',
          		      '".$lsexo."'
          		      ); ";

    // $result = mysqli_query($okdb,$execQuery)or die(mysqli_error($okdb));
    $nGrav = 0;
    $result = mysqli_query($okdb,$execQuery)or die( "<script>alert('Não foi cadastrado');location.href='../visao/inserirAlunos.php';</script>");       		      
    echo "<script>alert('Usuario cadastrado');location.href='../visao/listarAlunos.php';</script>";

  /// EXECUTAR QUERY - START
?>