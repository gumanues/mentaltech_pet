<?php require_once('../conexao.php'); 

$descricaoServico = $_POST['descricaoServico'];
$valorServico = $_POST['valorServico'];


if ($descricaoServico != "") {
$comando = "INSERT INTO `servicos` (`id`, `descricao`, `valor`) VALUES (NULL, '$descricaoServico', '$valorServico')";
mysqli_query($conexao, $comando);

header('Location: ../index.php?retorno=3.3');
    
} else {
    header('Location: ../index.php?retorno=3');
}