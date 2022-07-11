<?php

require_once("../conexao.php");

$id=$_POST['id'];

$comando="SELECT * FROM funcionarios WHERE id=".$id;
$resultado=mysqli_query($conexao,$comando);
$funcionario=array();
$funcionario=mysqli_fetch_assoc($resultado);
echo json_encode($funcionario);

?>