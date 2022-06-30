<?php

include('conexao.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$comando = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
$resultado = mysqli_query($conexao, $comando);
$row = mysqli_num_rows($resultado);
 
if($row == 1) {
    session_start();
	$_SESSION['id'] = 1;
	header('Location: index.php');	
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	echo "<script> alert('A senha ou usuário está incorreta.'); history.go(-1); </script>";
    exit();
}





?>