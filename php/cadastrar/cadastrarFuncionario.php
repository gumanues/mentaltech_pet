<?php require_once('../conexao.php'); 

$nomeFuncionario = $_POST['nomeFuncionario'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$telefoneFuncionario = $_POST['telefoneFuncionario'];



if ($nomeFuncionario != "") {

    $comando = "INSERT INTO `funcionarios` (`id`, `nomeCompleto`, `cpf`, `telefone`) VALUES (NULL, '$nomeFuncionario', '$cpfFuncionario', '$nomeFuncionario')";
    mysqli_query($conexao, $comando);
    header('Location: ../index.php?retorno=2.2');
    
} else {
    header('Location: ../index.php?retorno=2');
}