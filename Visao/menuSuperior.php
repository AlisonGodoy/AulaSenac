<?php

$server = $_SERVER['HTTP_HOST'];

?>

<link rel="stylesheet" href="<?php echo "http://".$server."/AulaSenac/css/stilo.css" ?>">
<script language="JavaScript" src="<?php echo "http://".$server."/aulaSenac/js/funcoes.js" ?>"></script> 
<div id="banner" title = "Meu banner">
</div>	

 <div class="topnav">
  <a href="<?php echo "http://".$server."/AulaSenac/visao/" ?>listarAlunos.php">Listar Alunos</a>
  <a href="<?php echo "http://".$server."/AulaSenac/visao/" ?>inserirAlunos.php">Inserir Alunos</a>
  <a href="<?php echo "http://".$server."/AulaSenac/visao/" ?>buscarAluno.php">Buscar Alunos</a>
  <a id ="logout" onclick="logout('<?php echo $server?>');" >Sair</a>
</div>


