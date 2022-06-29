<?php require_once('../conexao.php'); 

$horarioInicio = $_POST ['horarioInicio'];
$horarioFinal = $_POST ['horarioFinal'];
$funcionario = $_POST ['funcionario'];
$servico = $_POST ['servico'];
$servico_edit = $_POST ['servico_edit'];

$comando = "UPDATE `agendamento` SET `horarioInicio` = '$horarioInicio', `horarioFinal` = '$horarioFinal', `funcionarios_id` = '$funcionario', `servicos_id` = '$servico' WHERE `agendamento`.`id`  = '$servico_edit'";
mysqli_query($conexao, $comando);
echo "<script>history.go(-1);</script>";