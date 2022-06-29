<?php require_once('../conexao.php'); 

$nomeFuncionario = $_POST['nomeFuncionario'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$telefoneFuncionario = $_POST['telefoneFuncionario'];
$funcionario_edit = $_POST ['funcionario_edit'];

$comando = "UPDATE `funcionarios` SET `nomeCompleto` = '$nomeFuncionario', `cpf` = '$cpfFuncionario', `telefone` = '$telefoneFuncionario' WHERE `funcionarios`.`id` = '$funcionario_edit'";
mysqli_query($conexao, $comando);
echo "<script>history.go(-1);</script>";