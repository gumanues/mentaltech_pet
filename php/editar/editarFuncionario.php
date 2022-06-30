<?php require_once('../conexao.php'); 

$nomeFuncionario = $_POST['nomeFuncionario'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$telefoneFuncionario = $_POST['telefoneFuncionario'];
$funcionario_edit = $_POST ['funcionario_edit'];


if ($nomeFuncionario != "") {
$comando = "UPDATE `funcionarios` SET `nomeCompleto` = '$nomeFuncionario', `cpf` = '$cpfFuncionario', `telefone` = '$telefoneFuncionario' WHERE `funcionarios`.`id` = '$funcionario_edit'";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=8.8');
    
} else {
    header('Location: ../index.php?retorno=8');
}