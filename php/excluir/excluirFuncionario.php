<?php require_once('../conexao.php'); 

$funcionario_excluir = $_POST['funcionario_excluir'];

$ver = "SELECT * FROM agendamento WHERE funcionarios_id = '$funcionario_excluir'";
$com = mysqli_query($conexao, $ver);
$v = mysqli_fetch_assoc($com);
$verificação = ['funcionarios_id'];
if($verificação) {

    echo "<script> alert('Este funcionario está atrelado a serviços, exclua isto antes.'); history.go(-1); </script>";

} else {

    $comando = "DELETE FROM `funcionarios` WHERE `funcionarios`.`id` = '$funcionario_excluir'";
    mysqli_query($conexao, $comando);

}