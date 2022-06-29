<?php require_once('../conexao.php'); 

$descricaoServico = $_POST['descricaoServico'];
$valorServico = $_POST['valorServico'];

$comando = "INSERT INTO `servicos` (`id`, `descricao`, `valor`) VALUES (NULL, '$descricaoServico', '$valorServico')";
mysqli_query($conexao, $comando);
echo "<script>history.go(-1);</script>";