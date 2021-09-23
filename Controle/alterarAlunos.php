<?php
//include('../modelo/conexao.php');
$okdb = mysqli_connect("localhost","root","", "aula");
// Recebe valores do post - Start
$fname = $_GET['fname'];
$lnasc = $_GET['lnasc'];
$lsexo = $_GET['lsexo'];
$lid   = $_GET['lid'];
// Recebe valores do post - End

// Tratamento - Start 
//$lnasc = date('Y-m-d',strtotime($lnasc) );
// Tratamento - End  




/// EXECUTAR QUERY - START

   $execQuery = "
          UPDATE aluno SET 
          		
          		 nome_aluno = '".$fname."', 
          		 aniversario_aluno = '".$lnasc."', 
          		 sexo_aluno = '".$lsexo."'
               WHERE id_aluno=".$lid;

    // $result = mysqli_query($okdb,$execQuery)or die(mysqli_error($okdb));
    $nGrav = 0;
    $result = mysqli_query($okdb,$execQuery)or die( false);
    echo true;

  /// EXECUTAR QUERY - START
?>