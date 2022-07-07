<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>PDF</title>
</head>
<body>
    
</body>
</html>

<?php
// Require composer autoload
require_once("vendor/autoload.php");
require_once("conexao.php");

$idPDF = $_POST['idPDF'];
$comando = "SELECT * FROM agendamento A 
INNER JOIN servicos S on S.id = A.servicos_id
INNER JOIN funcionarios F ON F.id = A.funcionarios_id
INNER JOIN pets P ON P.id = A.pets_id
INNER JOIN clientes C ON C.id = P.clientes_id
WHERE A.id_agendamento = '$idPDF'";

$resultado = mysqli_query($conexao, $comando);
$comp = mysqli_fetch_assoc($resultado);

$dt = $comp['data'];
$data = date('d/m/Y', strtotime($dt));

$hi = $comp['horarioInicio'];
$hf = $comp['horarioFinal'];

$horarioI = date('H:i', strtotime($hi));
$horarioF = date('H:i', strtotime($hf));

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();


$mpdf->WriteHTML('

<h2>Comprovante</h2>
<table>
<tr>
    <td><p class="card-text"><b>Horário: Das </b>'.$horarioI.'<b> às </b>'.$horarioF.'</p></td>
</tr>
</table>
<table>
<tr>
  <td><p class="card-text"><b>Cliente: </b>'.$comp['nomeCompleto'].'</p></td>
</tr>
<tr>
  <td><p class="card-text"><b>Telefone: </b>'.$comp['telefone'].'<hr></p></td>
</tr>
</table>
<table>
<tr>
  <td><p class="card-text"><b>Raça: </b>'.$comp['raca'].'</p></td>
</tr>
<tr>
    <td><p class="card-text"><b>Nome do Pet: </b>'.$comp['nome'].'</p></td>
</tr>
<tr>
  <td><p class="card-text"><b>Serviço: </b>'.$comp['descricao'].'</p></td>
</tr>
<tr>
  <td><p class="card-text"><b>Funcionário dirigente: </b>'.$comp['nomeComp'].'</p><hr></td>
</tr>
<tr>
  <td><p class="card-text"><b>Valor: </b>R$ '.$comp['valor'].'</p></td>
</tr>
</table>
<h6>Obrigado por escolher a Petshop, Cuidamos com muito carinho do seu pet!</h6>

<h3>Ass:________________________________________, '.$data.'.</h3> 

');


    $mpdf->Output();

?>
</body>
</html>
