<?php require_once('../conexao.php'); 

$multa = $_POST['multa'];
$edit_status = $_POST['edit_status'];


$validar = "SELECT * FROM multa";
$sql_validar = mysqli_query($conexao, $validar);
$x = mysqli_fetch_assoc($sql_validar);

$idexistente = $x['agendamento_id'];

if ($idexistente != $edit_status) {

if ($multa != "") {
$comando_multa = "INSERT INTO `multa` (`id`, `valor`, `agendamento_id`) VALUES (NULL, '$multa', '$edit_status')";
mysqli_query($conexao, $comando_multa);


$comando = "UPDATE `agendamento` SET `status` = '2' WHERE `agendamento`.`id_agendamento` = '$edit_status'";
mysqli_query($conexao, $comando);
header('Location: ../index.php?retorno=4.4');
    
} else {
    header('Location: ../index.php?retorno=4');
}
} else {
    echo "<script> alert('Já existe uma multa cadastrada a esta pessoa.'); history.go(-1); </script>";
}