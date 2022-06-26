<?php require_once('../conexao.php'); 

$nomeFuncionario = $_POST['nomeFuncionario'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$telefoneFuncionario = $_POST['telefoneFuncionario'];

$comando = "INSERT INTO `funcionarios` (`id`, `nomeCompleto`, `cpf`, `telefone`) VALUES (NULL, '$nomeFuncionario', '$cpfFuncionario', '$nomeFuncionario')";
mysqli_query($conexao, $comando);