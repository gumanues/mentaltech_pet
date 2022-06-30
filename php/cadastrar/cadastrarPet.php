<?php require_once('../conexao.php'); 

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$dataNasc = $_POST['dataNasc'];
$nomeCliente = $_POST['nomeCliente'];


if ($raca != "") {
$comando = "INSERT INTO `pets` (`id`, `nome`, `raca`, `dataNasc`, `clientes_id`) VALUES (NULL, '$nome', '$raca', '$dataNasc', '$nomeCliente')";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=5.5');
    
} else {
    header('Location: ../index.php?retorno=5');
}