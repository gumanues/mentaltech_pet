<?php require_once('../conexao.php'); 

$nomeCompleto = $_POST['nomeCompleto'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];

if ($nomeCompleto != "") {
    $comando = "INSERT INTO `clientes` (`id`, `nomeCompleto`, `email`, `cpf`, `telefone`, `CEP`, `numero`) VALUES (NULL, '$nomeCompleto', '$email', '$cpf', '$telefone', '$cep', '$numero')";
    mysqli_query($conexao, $comando);
    header('Location: ../index.php?retorno=1.1');
    
} else {
    header('Location: ../index.php?retorno=1');
}