<?php require_once('../conexao.php'); 

$multa_excluir = $_POST['multa_excluir'];




if ($multa_excluir != "") {

$comando_update_status = "SELECT * FROM multa WHERE id =".$multa_excluir;
$sql_update = mysqli_query($conexao, $comando_update_status);
$x = mysqli_fetch_assoc($sql_update);

$comando_status = "UPDATE `agendamento` SET `status` = '3' WHERE `agendamento`.`id_agendamento` = ".$x['agendamento_id'];
mysqli_query($conexao, $comando_status);

$comando = "DELETE FROM `multa` WHERE `multa`.`id` = '$multa_excluir'";
mysqli_query($conexao, $comando);

echo "<script>history.go(-1);</script>";

header('Location: ../index.php?retorno=17.17');
    
} else {
    header('Location: ../index.php?retorno=17');
}