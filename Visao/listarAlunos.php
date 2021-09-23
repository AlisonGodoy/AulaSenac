<?php
include('../controle/controleSession.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Listagem</title>
</head>

<?php
include('../modelo/conexao.php');  
$acaoLista = 'LnomeAniverSexo';
include('../controle/listarAlunos.php');
 ?>

<body>
    <div class="container">
<?php
include('menuSuperior.php');
?>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Aniversario</th>
        <th>Sexo</th>
    </tr>
 <?php
   foreach ($array_aluno as $value) {    
     ?>
    <tr>
        <td><?php echo $value['nome_aluno'] ?></td>
        <td><?php echo $value['aniversario_aluno'] ?></td>
        <td><?php echo $value['sexo_aluno'] ?></td>
    </tr>
<?php
      }

     ?> 
</table>
</div>
</body>
</html>