<?php require_once('../conexao.php'); 

$data = $_POST ['data'];
$horarioInicio = $_POST ['horarioInicio'];
$horarioFinal = $_POST ['horarioFinal'];
$funcionario = $_POST ['funcionario'];
$servico = $_POST ['servico'];
$servico_edit = $_POST ['servico_edit'];


if ($horarioFinal != "") {
$comando = "UPDATE `agendamento` SET `data` = '$data', `horarioInicio` = '$horarioInicio', `horarioFinal` = '$horarioFinal', `funcionarios_id` = '$funcionario', `servicos_id` = '$servico' WHERE `agendamento`.`id` = '$servico_edit'";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=12.12');
    
} else {
    header('Location: ../index.php?retorno=12');
}