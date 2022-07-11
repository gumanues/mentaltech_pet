<?php

require_once("../conexao.php");

$id=$_POST['id'];

$comando="SELECT * FROM pets WHERE id=".$id;
$resultado=mysqli_query($conexao,$comando);
$pet=array();
$pet=mysqli_fetch_assoc($resultado);
echo json_encode($pet);

?>