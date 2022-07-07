<?php require_once('../conexao.php'); 

echo $status = $_POST['status'];
echo $edit_status = $_POST['edit_status'];

$comando = "UPDATE `agendamento` SET `status` = '$status' WHERE `agendamento`.`id_agendamento` = '$edit_status'";
mysqli_query($conexao, $comando);
header('Location: ../index.php');