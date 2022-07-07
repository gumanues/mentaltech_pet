<?php require_once('../conexao.php'); 

$multa = $_POST['multa'];
$edit_status = $_POST['edit_status'];
$status = $_POST['status'];


if ($multa != "") {
$comando_multa = "INSERT INTO `multa` (`id`, `valor`, `agendamento_id`) VALUES (NULL, '$multa', '$edit_status')";
mysqli_query($conexao, $comando_multa);


$comando = "UPDATE `agendamento` SET `status` = '$status' WHERE `agendamento`.`id_agendamento` = '$edit_status'";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=4.4');
    
} else {
    header('Location: ../index.php?retorno=4');
}