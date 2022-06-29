<?php require_once('../conexao.php'); 

$status = $_POST['status'];
$edit_status = $_POST['edit_status'];

$comando = "UPDATE `agendamento` SET `status` = '$status' WHERE `agendamento`.`id` = '$edit_status'";
mysqli_query($conexao, $comando);
header('Location: ../index.php');