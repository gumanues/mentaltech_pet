<?php require_once('../conexao.php'); 

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$dataNasc = $_POST['dataNasc'];
$nomeCliente = $_POST['nomeCliente'];
$pet_edit = $_POST ['pet_edit'];

$comando = "UPDATE `pets` SET `nome` = '$nome', `raca` = '$raca', `dataNasc` = '$dataNasc', `clientes_id` = '$nomeCliente' WHERE `pets`.`id` = '$pet_edit'";
mysqli_query($conexao, $comando);
echo "<script>history.go(-1);</script>";