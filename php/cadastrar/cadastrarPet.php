<?php require_once('../conexao.php'); 

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$dataNasc = $_POST['dataNasc'];
$nomeCliente = $_POST['nomeCliente'];

$comando = "INSERT INTO `pets` (`id`, `nome`, `raca`, `dataNasc`, `clientes_id`) VALUES (NULL, '$nome', '$raca', '$dataNasc', '$nomeCliente')";
mysqli_query($conexao, $comando);