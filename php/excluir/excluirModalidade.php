<?php require_once('../conexao.php'); 

$servico_excluir = $_POST['servico_excluir'];

if ($funcionario_excluir != "") {
$ver = "SELECT * FROM agendamento WHERE servicos_id = '$servico_excluir'";
$com = mysqli_query($conexao, $ver);
$v = mysqli_fetch_assoc($com);
$verificação = $v['servicos_id'];
if($verificação) {

    echo "<script>alert('Este serviço está atrelado a agendamentos, exclua isto antes.'); history.go(-1); </script>";

} else {

    $comando = "DELETE FROM `servicos` WHERE `servicos`.`id` = '$servico_excluir'";
    mysqli_query($conexao, $comando);

}
header('Location: ../index.php?retorno=16.16');
    
} else {
    header('Location: ../index.php?retorno=16');
}