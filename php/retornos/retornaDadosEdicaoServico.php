<?php

require_once("../conexao.php");

$id=$_POST['id'];

$comando="SELECT * FROM agendamento WHERE pets_id=".$id;
$resultado=mysqli_query($conexao,$comando);
$servico=array();
$servico=mysqli_fetch_assoc($resultado);
echo json_encode($servico);

?>