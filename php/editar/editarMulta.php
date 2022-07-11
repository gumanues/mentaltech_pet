<?php require_once('../conexao.php'); 

$multa_edit = $_POST['multa_edit'];
$valor = $_POST['multa'];


if ($multa_edit != "") {
$comando = "UPDATE `multa` SET `valor` = '$valor' WHERE `multa`.`agendamento_id` = '$multa_edit'";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=10.10');
    
} else {
    header('Location: ../index.php?retorno=10');
}