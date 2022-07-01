<?php

require_once('conexao.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$comando = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";

$resultado=mysqli_query($conexao,$comando);

$linhas=mysqli_num_rows($resultado);
session_start();

$_SESSION['login'] = 1;

if($linhas==0){
    $_SESSION['nao_autenticado'] = true;
	echo "<script> alert('A senha ou usuário está incorreta.'); history.go(-1); </script>";
	exit();
}else{
	$_SESSION['id'] = $usuario;
	header('Location: index.php');	
	exit();
}

?>



?>