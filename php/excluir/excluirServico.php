<?php require_once('../conexao.php'); 

$servico_excluir = $_POST['servico_excluir'];


if ($servico_excluir != "") {
$ver = "SELECT * FROM multa WHERE agendamento_id = '$servico_excluir'";
$com = mysqli_query($conexao, $ver);
$v = mysqli_fetch_assoc($com);
$verificação = $v['agendamento_id'];
if($verificação) {

    echo "<script>alert('Este agendamento possui uma multa, exclua isto antes.'); history.go(-1); </script>";

} else {

    $comando = "DELETE FROM `agendamento` WHERE `agendamento`.`id` = '$servico_excluir'";
    mysqli_query($conexao, $comando);

}

header('Location: ../index.php?retorno=19.19');
    
} else {
    header('Location: ../index.php?retorno=19');
}