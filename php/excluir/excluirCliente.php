<?php require_once('../conexao.php'); 

$cliente_excluir = $_POST['cliente_excluir'];

if ($cliente_excluir != "") {

$ver = "SELECT * FROM pets WHERE clientes_id = '$cliente_excluir'";
$com = mysqli_query($conexao, $ver);
$v = mysqli_fetch_assoc($com);
$verificação = $v['clientes_id'];
if($verificação) {

    echo "<script> alert('Este cliente está atrelado a um pet, exclua isto antes.'); history.go(-1); </script>";

} else {

    $comando = "DELETE FROM `clientes` WHERE `clientes`.`id` = '$cliente_excluir'";
    mysqli_query($conexao, $comando);

}
header('Location: ../index.php?retorno=14.14');
    
} else {
    header('Location: ../index.php?retorno=14');
}