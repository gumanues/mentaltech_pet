<?php

require_once("../conexao.php");

$id=$_POST['id'];

$comando="SELECT * FROM multa WHERE agendamento_id=".$id;
$resultado=mysqli_query($conexao,$comando);
$cliente=array();
$cliente=mysqli_fetch_assoc($resultado);
echo json_encode($cliente);

?>