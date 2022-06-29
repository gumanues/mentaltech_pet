<?php require_once('../conexao.php'); 

$descricaoServico = $_POST['descricaoServico'];
$valorServico = $_POST['valorServico'];
$servico_edit = $_POST['servico_edit']

$comando = "UPDATE `servicos` SET `descricao` = '$descricaoServico', `valor` = '$valorServico' WHERE `servicos`.`id` = '$servico_edit'";
mysqli_query($conexao, $comando);
echo "<script>history.go(-1);</script>";