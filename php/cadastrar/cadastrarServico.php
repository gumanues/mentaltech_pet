<?php require_once('../conexao.php'); 

$horarioInicio = $_POST ['horarioInicio'];
$horarioFinal = $_POST ['horarioFinal'];
$pet = $_POST ['pet'];
$funcionario = $_POST ['funcionario'];
$servico = $_POST ['servico'];

$comando = "INSERT INTO `agendamento` (`id`, `data`, `status`, `horarioInicio`, `horarioFinal`, `pets_id`, `funcionarios_id`, `servicos_id`) VALUES (NULL, '$today', '0', '$horarioInicio', '$horarioFinal', '$pet', '$funcionario', '$servico')";
mysqli_query($conexao, $comando);

echo "<script>history.go(-1);</script>";