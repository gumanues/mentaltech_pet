<?php require_once('../conexao.php'); 

$descricaoServico = $_POST['descricaoServico'];
$valorServico = $_POST['valorServico'];
$servico_edit = $_POST['servico_edit']


if ($nomeFuncionario != "") {
$comando = "UPDATE `servicos` SET `descricao` = '$descricaoServico', `valor` = '$valorServico' WHERE `servicos`.`id` = '$servico_edit'";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=9.9');
    
} else {
    header('Location: ../index.php?retorno=9');
}