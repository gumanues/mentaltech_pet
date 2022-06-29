<?php require_once('../conexao.php'); 

$multa_excluir = $_POST['multa_excluir'];

$comando = "DELETE FROM `multa` WHERE `multa`.`id` = '$multa_excluir'";
mysqli_query($conexao, $comando);
echo "<script>history.go(-1);</script>";