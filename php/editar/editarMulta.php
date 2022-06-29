<?php require_once('../conexao.php'); 

$multa_edit = $_POST['multa_edit'];
$valor = $_POST['multa'];

$comando = "UPDATE `multa` SET `valor` = '$valor' WHERE `multa`.`id` = '$multa_edit'";
mysqli_query($conexao, $comando);

echo "<script>history.go(-1);</script>";