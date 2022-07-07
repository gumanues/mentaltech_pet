<?php require_once('../conexao.php'); 

$data = $_POST ['data'];
$horarioInicio = $_POST ['horarioInicio'];
$horarioFinal = $_POST ['horarioFinal'];
$pet = $_POST ['pet'];
$funcionario = $_POST ['funcionario'];
$servico = $_POST ['servico'];


if (($funcionario != "") && ($horarioFinal != "") && ($horarioInicio != "") && ($pet != "") && ($servico != "")) {
$comando = "INSERT INTO `agendamento` (`id_agendamento`, `data`, `status`, `horarioInicio`, `horarioFinal`, `pets_id`, `funcionarios_id`, `servicos_id`) VALUES (NULL, '$data', '0', '$horarioInicio', '$horarioFinal', '$pet', '$funcionario', '$servico')";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=6.6');
    
} else {
    header('Location: ../index.php?retorno=6');
}