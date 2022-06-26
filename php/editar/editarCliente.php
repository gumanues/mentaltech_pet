<?php require_once('../conexao.php'); 

$nomeCompleto = $_POST['nomeCompleto'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$cliente_edit = $_POST['cliente_edit'];

$comando = "UPDATE `clientes` SET `nomeCompleto` = '$nomeCompleto', `email` = '$email', `cpf` = '$cpf', `telefone` = '$telefone', `CEP` = '$cep', `numero` = '$numero' WHERE `clientes`.`id` = '$cliente_edit'";
mysqli_query($conexao, $comando);

echo "history.go(-1); </script>";