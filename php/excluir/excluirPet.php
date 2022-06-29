<?php require_once('../conexao.php'); 

$pet_excluir = $_POST['pet_excluir'];

$ver = "SELECT * FROM agendamento WHERE pets_id = '$pet_excluir'";
$com = mysqli_query($conexao, $ver);
$v = mysqli_fetch_assoc($com);
$verificação = ['pets_id'];
if($verificação) {

    echo "<script>alert('Este pet está atrelado a serviços, exclua isto antes.'); history.go(-1); </script>";

} else {

    $comando = "DELETE FROM `pets` WHERE `pets`.`id` = '$pet_excluir'";
    mysqli_query($conexao, $comando);

}