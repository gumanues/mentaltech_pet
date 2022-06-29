<?php require_once('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      margin-top: 55px;
    }
  </style>
  <title>Petshop</title>
</head> 

<!--  -->
<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema cadastrar o tipo de compromisso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Houve algum problema cadastrar o tipo de compromisso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Tipo de compromisso excluído com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Não é possível excluir um tipo de compromisso que possui compromissos!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==4){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Tipo de compromisso editado com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==5){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<span>Houve algum problema editar o tipo de compromisso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

	<?php } ?>
</div>
<!--  -->


<nav class="navbar text-light bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-light">Petshop</a>
    <form action="index.php" method="GET" class="d-flex" role="pesquisa">
      <input class="form-control me-2" type="pesquisa" name="pesquisa" aria-label="pesquisa">
      <button class="btn btn-outline-light" type="submit">Pesquisar</button>
    </form>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu de opções</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">

        <div>
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="offcanvasNavbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Cadastrar
              </a>
              <ul class="dropdown-menu bg-secondary" aria-labelledby="offcanvasNavbarDropdown">
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">
                    Cadastrar Serviço
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">
                    Cadastrar Cliente
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal3">
                    Cadastrar Pet
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal4">
                    Cadastrar Funcionário
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div>
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="offcanvasNavbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Editar
              </a>
              <ul class="dropdown-menu bg-secondary" aria-labelledby="offcanvasNavbarDropdown">
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal5">
                    Editar Serviço
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal6">
                    Editar Cliente
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal7">
                    Editar Pet
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal8">
                    Editar Funcionário
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div>
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="offcanvasNavbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Deletar
              </a>
              <ul class="dropdown-menu bg-secondary" aria-labelledby="offcanvasNavbarDropdown">
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal9">
                    Deletar Serviço
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal10">
                    Deletar Cliente
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal11">
                    Deletar Pet
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal12">
                    Deletar Funcionário
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div>
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="offcanvasNavbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Modalidade Serviço
              </a>
              <ul class="dropdown-menu bg-secondary" aria-labelledby="offcanvasNavbarDropdown">
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal13">
                    Adicionar descrição de serviço
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal14">
                    Editar descrição de serviço
                  </a>
                </li>
                <li>
                  <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal15">
                    Deletar descrição de serviço
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
       
        <div>
          <a type="button" class="mt-2 dropdown-item btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Multas
          </a>
        </div>
        <div>
          <a type="button" class="mt-3 dropdown-item btn-primary">
            Sair
          </a>
        </div>

      </div>
    </div>
  </div>
</nav>

</div>
</div>
</nav>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="cadastrar/cadastrarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Serviço</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="horarioInicio" name="horarioInicio" class="form-label">Horario Início</label>
                <input type="time" class="form-control" id="horarioInicio" name="horarioInicio" required>
              </td>
              <td>
                <label for="horarioFinal" name="horarioFinal" class="form-label">Horario Final</label>
                <input type="time" class="form-control" id="horarioFinal" name="horarioFinal" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="pet" name="pet" class="form-label">Pet</label>
                <select class="form-select" name="pet" id="pet" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="funcionario" name="funcionario" class="form-label">Funcionário</label>
                <select class="form-select" name="funcionario" id="funcionario" required>
                <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="servico" name="servico" class="form-label">Serviço</label>
                <select class="form-select" name="servico" id="servico" required>
                <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </td>
            </tr>
          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="cadastrar/cadastrarCliente.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="nomeCompleto" name="nomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" requided>
              </td>
              <td>
                <label for="email" name="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" requided>
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpf" name="cpf" class="form-label">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf" requided>
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefone" name="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" requided>
              </td>
            </tr>
            <tr>
              <td>
                <label for="cep" name="cep" class="form-label">CEP</label>
                <input type="number" class="form-control" id="cep" name="cep" requided>
              </td>
              <td>
                <label for="numero" name="numero" class="form-label">Nº</label>
                <input type="number" class="form-control" id="numero" name="numero" requided>
              </td>
            </tr>
          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="cadastrar/cadastrarPet.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Pet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="nome" name="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </td>
              <td>
                <label for="raca" name="raca" class="form-label">Raça</label>
                <input type="text" class="form-control" id="raca" name="raca" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="dataNasc" name="dataNasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNasc" name="dataNasc">
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeCliente" name="nomeCliente" class="form-label">Nome do Cliente</label>
                <select class="form-select" name="nomeCliente" id="nomeCliente" required>
                  <option value="1">2</option>
                  <option value="2">1</option>
                </select>
              </td>
            </tr>
          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="cadastrar/cadastrarFuncionario.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Funcionário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="nomeFuncionario" name="nomeFuncionario" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpfFuncionario" name="cpfFuncionario" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpfFuncionario" name="cpfFuncionario" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefoneFuncionario" name="telefoneFuncionario" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario" required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="editar/editarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Serviço</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="servico_edit" name="servico_edit" class="form-label">Selecione o serviço ao qual será editado</label>
                <select class="form-select" name="servico_edit" id="servico_edit" required>
                  <?php  
                  $com_servico = "SELECT * FROM agendamento";
                  $id_servico = mysqli_query($conexao, $com_servico);
                  
                  while ($id_ser = mysqli_fetch_assoc($id_servico)) {

                  $id_pet = $id_ser['pets_id'];

                  $listar_por_pets = "SELECT * FROM pets WHERE id = '$id_pet'";
                  $nome_pet = mysqli_query($conexao, $listar_por_pets);
                  $nom_pet = mysqli_fetch_assoc($nome_pet);

                  $list_pets = $nom_pet['nome'];

                  $listar_por_cli = "SELECT * FROM clientes WHERE id = ".$nom_pet['clientes_id'];
                  $nome_cli = mysqli_query($conexao, $listar_por_cli);
                  $nom_cli = mysqli_fetch_assoc($nome_cli);

                  $nom_client = $nom_cli['nomeCompleto'];
                  

                  echo "<option value='$id_pet'>$nom_client - $list_pets</option>";
                
                  }?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="horarioInicio" name="horarioInicio" class="form-label">Horario Início</label>
                <input type="time" class="form-control" id="horarioInicio" value="<?=$horarioInicio?>" name="horarioInicio" required>
              </td>
              <td>
                <label for="horarioFinal" name="horarioFinal" class="form-label">Horario Final</label>
                <input type="time" class="form-control" id="horarioFinal" value="<?=$horarioFinal?>" name="horarioFinal" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="funcionario" name="funcionario" class="form-label">Funcionário</label>
                <select class="form-select" name="funcionario" id="funcionario" required>
                <?php 
                $edit_pet_funcionario = "SELECT * FROM funcionarios";
                $editar_pet_func = mysqli_query($conexao, $edit_pet_funcionario);
                while ($func_pet = mysqli_fetch_assoc($editar_pet_func)){

                $nomeFunc = $func_pet['nomeCompleto'];
                $idFunc = $func_pet['id'];

                echo"<option value='$idFunc'>$nomeFunc</option>";
                }
                ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="servico" name="servico" class="form-label">Serviço</label>
                <select class="form-select" name="servico" id="servico" required>
                <?php 
                $edit_pet_servico = "SELECT * FROM servicos";
                $editar_pet_serv = mysqli_query($conexao, $edit_pet_servico);
                while ($serv_pet = mysqli_fetch_assoc($editar_pet_serv)){

                $nomeserv = $serv_pet['descricao'];
                $idserv = $serv_pet['id'];

                echo"<option value='$idserv'>$nomeserv</option>";
                }
                ?>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="editar/editarCliente.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="cliente_edit" name="cliente_edit" class="form-label">Selecione o cliente ao qual será editado</label>
                <select class="form-select" name="cliente_edit" id="cliente_edit" required>
                  <?php 
                  $com_client = "SELECT * FROM clientes";
                  $res_clienes = mysqli_query($conexao, $com_client);
                  while ($clientes = mysqli_fetch_assoc($res_clienes)) {
                  
                  $id_cliente = $clientes['id'];
                  $nom_cliente = $clientes['nomeCompleto'];

                  echo "<option value='$id_cliente'>$nom_cliente</option>";
                  
                  }?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeCompleto" name="nomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required>
              </td>
              <td>
                <label for="email" name="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpf" name="cpf" class="form-label">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefone" name="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="cep" name="cep" class="form-label">CEP</label>
                <input type="number" class="form-control" id="cep" name="cep" required>
              </td>
              <td>
                <label for="numero" name="numero" class="form-label">Nº</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="editar/editarPet.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Pet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="pet_edit" name="pet_edit" class="form-label">Selecione o Pet ao qual será editado</label>
                <select class="form-select" name="pet_edit" id="pet_edit" required>
                <?php
                $com_servico = "SELECT * FROM agendamento";
                  $id_servico = mysqli_query($conexao, $com_servico);
                  
                  while ($id_ser = mysqli_fetch_assoc($id_servico)) {

                  $id_pet = $id_ser['pets_id'];

                  $listar_por_pets = "SELECT * FROM pets WHERE id = '$id_pet'";
                  $nome_pet = mysqli_query($conexao, $listar_por_pets);
                  $nom_pet = mysqli_fetch_assoc($nome_pet);

                  $list_pets = $nom_pet['nome'];

                  $listar_por_cli = "SELECT * FROM clientes WHERE id = ".$nom_pet['clientes_id'];
                  $nome_cli = mysqli_query($conexao, $listar_por_cli);
                  $nom_cli = mysqli_fetch_assoc($nome_cli);

                  $nom_client = $nom_cli['nomeCompleto'];
                  

                  echo "<option value='$id_pet'>$nom_client - $list_pets</option>";
                  }?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="nome" name="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
              </td>
              <td>
                <label for="raca" name="raca" class="form-label">Raça</label>
                <input type="text" class="form-control" id="raca" name="raca" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="raca" name="raca" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="raca" name="dataNasc" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeCliente" name="nomeCliente" class="form-label">Nome do Cliente</label>
                <select class="form-select" name="nomeCliente" id="nomeCliente" required>
                  <?php 
                  $com_nomCli = "SELECT * FROM clientes";
                  $res_nomCli = mysqli_query($conexao, $com_nomCli);
                  while ($nome_cliente = mysqli_fetch_assoc($res_nomCli)){

                  $id_cli = $nome_cliente['id'];
                  $nome_client = $nome_cliente['nomeCompleto'];

                  echo "<option value='$id_cli'>$nome_client</option>";
                  }
                  ?>
                </select>
              </td>
            </tr>
          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="editar/editarFuncionario.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Funcionário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="funcionario_edit" name="funcionario_edit" class="form-label">Selecione o Funcionário</label>
                <select class="form-select" name="funcionario_edit" id="funcionario_edit" required>
                  <?php
                  $com_fun = "SELECT * FROM funcionarios";
                  $res_fun = mysqli_query($conexao, $com_fun);
                  while ($fun = mysqli_fetch_assoc($res_fun)) {
                  
                  $nome_fun = $fun['nomeCompleto'];
                  $id_fun = $fun['id'];

                  echo "<option value='$id_fun'>$nome_fun</option>";
                  }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeFuncionario" name="nomeFuncionario" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpfFuncionario" name="cpfFuncionario" class="form-label">CPF</label>
                <input type="number" class="form-control" id="cpfFuncionario" name="cpfFuncionario" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefoneFuncionario" name="telefoneFuncionario" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario" required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- -------------------------------------------------------- -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="excluir/excluirServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deletar Serviço</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
              <label for="servico_excluir" name="servico_excluir" class="form-label">Selecione o serviço</label>
                <select class="form-select" name="servico_excluir" id="servico_excluir" required>
                  <?php  
                  $com_servico = "SELECT * FROM agendamento";
                  $id_servico = mysqli_query($conexao, $com_servico);
                  
                  while ($id_ser = mysqli_fetch_assoc($id_servico)) {

                  $id_pet = $id_ser['pets_id'];

                  $listar_por_pets = "SELECT * FROM pets WHERE id = '$id_pet'";
                  $nome_pet = mysqli_query($conexao, $listar_por_pets);
                  $nom_pet = mysqli_fetch_assoc($nome_pet);

                  $list_pets = $nom_pet['nome'];

                  $listar_por_cli = "SELECT * FROM clientes WHERE id = ".$nom_pet['clientes_id'];
                  $nome_cli = mysqli_query($conexao, $listar_por_cli);
                  $nom_cli = mysqli_fetch_assoc($nome_cli);

                  $nom_client = $nom_cli['nomeCompleto'];
                  

                  echo "<option value='$id_pet'>$nom_client - $list_pets</option>";
                
                  }?>
                </select>
              </td>
            </tr>       
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Excluir</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="excluir/excluirCliente.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deletar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="cliente_excluir" name="cliente_excluir" class="form-label">Selecione o cliente</label>
                <select class="form-select" name="cliente_excluir" id="cliente_excluir" required>
                  <?php 
                  $com_client = "SELECT * FROM clientes";
                  $res_clienes = mysqli_query($conexao, $com_client);
                  while ($clientes = mysqli_fetch_assoc($res_clienes)) {
                  
                  $id_cliente = $clientes['id'];
                  $nom_cliente = $clientes['nomeCompleto'];

                  echo "<option value='$id_cliente'>$nom_cliente</option>";
                  
                  }?>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Excluir</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="excluir/excluirPet.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deletar Pet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="pet_excluir" name="pet_excluir" class="form-label">Selecione o Pet</label>
                <select class="form-select" name="pet_excluir" id="pet_excluir" required>
                <?php
                $com_servico = "SELECT * FROM agendamento";
                  $id_servico = mysqli_query($conexao, $com_servico);
                  
                  while ($id_ser = mysqli_fetch_assoc($id_servico)) {

                  $id_pet = $id_ser['pets_id'];

                  $listar_por_pets = "SELECT * FROM pets WHERE id = '$id_pet'";
                  $nome_pet = mysqli_query($conexao, $listar_por_pets);
                  $nom_pet = mysqli_fetch_assoc($nome_pet);

                  $list_pets = $nom_pet['nome'];

                  $listar_por_cli = "SELECT * FROM clientes WHERE id = ".$nom_pet['clientes_id'];
                  $nome_cli = mysqli_query($conexao, $listar_por_cli);
                  $nom_cli = mysqli_fetch_assoc($nome_cli);

                  $nom_client = $nom_cli['nomeCompleto'];
                  

                  echo "<option value='$id_pet'>$nom_client - $list_pets</option>";
                  }?>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Excluir</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="excluir/excluirFuncionario.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deletar Funcionário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="funcionario_excluir" name="funcionario_excluir" class="form-label">Selecione o Funcionário</label>
                <select class="form-select" name="funcionario_excluir" id="funcionario_excluir" required>
                  <?php
                  $com_fun = "SELECT * FROM funcionarios";
                  $res_fun = mysqli_query($conexao, $com_fun);
                  while ($fun = mysqli_fetch_assoc($res_fun)) {
                  
                  $nome_fun = $fun['nomeCompleto'];
                  $id_fun = $fun['id'];

                  echo "<option value='$id_fun'>$nome_fun</option>";
                  }
                  ?>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Excluir</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ------------------------------------------------------- -->
<div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="cadastrar/cadastrarModalidade.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Descrição de Serviço</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="descricaoServico" name="descricaoServico" class="form-label">Descrição do Serviço</label>
                <input type="text" class="form-control" id="descricaoServico" name="descricaoServico" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="valorServico" name="valorServico" class="form-label">Valor do Serviço</label>
                <input type="number" class="form-control" placeholder="350,00 R$" id="valorServico" name="valorServico" required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="editar/editarModalidade.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Descrição de Serviço</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="servico_edit" name="servico_edit" class="form-label">Selecione o Serviço</label>
                <select class="form-select" name="servico_edit" id="servico_edit" required>
                  <?php
                  $com_ser = "SELECT * FROM servicos";
                  $res_ser = mysqli_query($conexao, $com_ser);
                  while ($ser = mysqli_fetch_assoc($res_ser)) {
                  
                  $nome_ser = $ser['descricao'];
                  $id_ser = $ser['id'];

                  echo "<option value='$id_ser'>$nome_ser</option>";
                  }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="descricaoServico" name="descricaoServico" class="form-label">Descrição do Serviço</label>
                <input type="text" class="form-control" id="descricaoServico" name="descricaoServico" required>
              </td>
            </tr>
            <tr>
              <td>
                <label for="valorServico" name="valorServico" class="form-label">Valor do Serviço</label>
                <input type="number" class="form-control" placeholder="350,00 R$" id="valorServico" name="valorServico" required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="excluir/excluirModalidade.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deletar descrição do serviço</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
              <label for="servico_excluir" name="servico_excluir" class="form-label">Selecione o Serviço</label>
                <select class="form-select" name="servico_excluir" id="servico_excluir" required>
                  <?php
                  $com_ser = "SELECT * FROM servicos";
                  $res_ser = mysqli_query($conexao, $com_ser);
                  while ($ser = mysqli_fetch_assoc($res_ser)) {
                  
                  $nome_ser = $ser['descricao'];
                  $id_ser = $ser['id'];

                  echo "<option value='$id_ser'>$nome_ser</option>";
                  }
                  ?>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Deletar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Multas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="height: 300px; overflow-y: scroll;">
      <table class='text-center'> 
          <tr class='m-5'>
            <td class='pe-3'>Cliente</td>
            <td class='pe-3'>Telefone</td>
            <td class='pe-3'>Serviço</td>
            <td class='pe-3'>Multa</td>
            <td class='pe-3'>Editar</td>
            <td class='pe-3'>Excluir</td>
        </tr>
        <?php 
        $c_multas = "SELECT * FROM multa";
        $res_multas = mysqli_query($conexao, $c_multas);
        while ($multas = mysqli_fetch_assoc($res_multas)) {
        
        $valor = $multas['valor'];
        $id_multa = $multas['id'];
        $id_ag = $multas['agendamento_id'];

        $c_ag = "SELECT * FROM agendamento WHERE id = '$id_ag'";
        $res_ag = mysqli_query($conexao, $c_ag);
        $ag = mysqli_fetch_assoc($res_ag);

        $servicos_id = $ag['servicos_id'];
        $pets_id = $ag['pets_id'];

        $ser = "SELECT * FROM servicos WHERE id = '$servicos_id'";
        $res_ser = mysqli_query($conexao, $ser);
        $serv = mysqli_fetch_assoc($res_ser);

        $nome_servic = $serv['descricao'];

        $c_nome = "SELECT * FROM pets WHERE id = '$pets_id'";
        $res_nome = mysqli_query($conexao, $c_nome);
        $pt = mysqli_fetch_assoc($res_nome);

        $nome_usu = $pt['clientes_id'];

        $nome_usuario = "SELECT * FROM clientes WHERE id = '$nome_usu'";
        $res_usuario = mysqli_query($conexao, $nome_usuario);
        $nm = mysqli_fetch_assoc($res_usuario);

        $nm_usuario = $nm['nomeCompleto'];
        $nr_usuario = $nm['numero'];

       


        echo '
          <tr class="m-5">
            <td class="pe-3">'.$nm_usuario.'</td>
            <td class="pe-3">'.$nr_usuario.'</td>
            <td class="pe-3">'.$nome_servic.'</td>
            <td class="pe-3">'.$valor.'</td>
            <td class="pe-3"><button class="btn btn-link" data-bs-toggle="modal"
            data-bs-target="#exampleModalMulta"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg></button></td>
            <td class="pe-3"><form action="excluir/excluirMulta.php" method="post"><input type="hidden" name="multa_excluir" value='.$id_multa.'><button type="submit" class="btn btn-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg></button></form></td>
          </tr>';
        }
        // <input type="hidden" name="multa_edit" value='.$id_multa.'>

        ?> 
      </table> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalMulta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="editar/editarMulta.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Multa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="multa_edit" name="multa_edit" class="form-label">Selecione o cliente</label>
                <select class="form-select" name="multa_edit" id="multa_edit" required>
                  <?php 
                  $com_multa = "SELECT * FROM multa";
                  $res_clienes = mysqli_query($conexao, $com_multa);
                  while ($multaes = mysqli_fetch_assoc($res_clienes)) {
                  
                  $id_multae = $multaes['agendamento_id'];
                  $nom_multae = $multaes['valor'];

                  $multa_find = "SELECT * FROM agendamento WHERE id = '$id_multae'";
                  $res_petag = mysqli_query($conexao, $multa_find);
                  $ag_find = mysqli_fetch_assoc($res_petag);
                  $pet = $ag_find['pets_id'];

                  $multa_pet = "SELECT * FROM pets WHERE id = '$pet'";
                  $res_pet = mysqli_query($conexao, $multa_pet);
                  $ag_pet = mysqli_fetch_assoc($res_pet);
                  $petid = $ag_pet['clientes_id'];

                  $multa_cli = "SELECT * FROM clientes WHERE id = '$petid'";
                  $res_clien = mysqli_query($conexao, $multa_cli);
                  $ag_cli = mysqli_fetch_assoc($res_clien);
                  $clinome = $ag_cli['nomeCompleto'];

                  echo "<option value='$id_multae'>$clinome</option>";
                  
                  }?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="multa" name="multa" class="form-label">Valor</label>
                <input type="number" class="form-control" id="multa" name="multa" required>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<body class="bg-light">

<div class="pt-2">
    <table>
      <tr>
        <td>
          <label style="margin-top: 5px;" for="filtrar" name="filtrar" class="form-label">Filtrar por </label>
          </td>
          <td>
            <div>
            <form action="index.php" method="get">
          <select class="form-select" name="filtrar" id="filtrar">
            <option value="ASC">Filtrar por ordem crescente</option>
            <option value="DESC">Filtrar por ordem decrescente</option>
          </select>
          </td>
          <td>
          <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
          </svg></button>
          </form>
          </div>
        </td>
      </tr>
    </table>
</div>

<?php 
$comando = "SELECT * FROM `agendamento` ORDER BY `agendamento`.`id` DESC";

if(isset($_GET['filtrar']) && $_GET['filtrar'] == "ASC") {
  $comando = "SELECT * FROM `agendamento` ORDER BY `agendamento`.`id` DESC";
}
if(isset($_GET['filtrar']) && $_GET['filtrar'] == "DESC") {
  $comando = "SELECT * FROM `agendamento` ORDER BY `agendamento`.`id` ASC";
}

if(isset($_GET['pesquisa']) && $_GET['pesquisa'] != ""){

  $pesquisa = $_GET['pesquisa'];

  $comando_clientes1 = "SELECT * FROM clientes WHERE nomeCompleto LIKE '".$pesquisa."%'";
  $res_clientes1 = mysqli_query($conexao, $comando_clientes1);
  $c1 = mysqli_fetch_assoc($res_clientes1);

  $comando_pets1 = "SELECT * FROM pets WHERE clientes_id = ".$c1['id'];
  $res_pets1 = mysqli_query($conexao, $comando_pets1);
  $p1 = mysqli_fetch_assoc($res_pets1);

  $comando_agendamento = "SELECT * FROM agendamento WHERE pets_id = ".$p1['id'];
  $res_agendamen=mysqli_query($conexao, $comando_agendamento);
  $z1 = mysqli_fetch_assoc($res_agendamen);

  $comando_funcionarios1 = "SELECT * FROM funcionarios WHERE id = ".$z1['funcionarios_id'];
  $res_funcionarios1 = mysqli_query($conexao, $comando_funcionarios1);
  $f1 = mysqli_fetch_assoc($res_funcionarios1);
  //
  $comando_servicos1 = "SELECT * FROM servicos WHERE id = ".$z1['servicos_id'];
  $res_servicos1 = mysqli_query($conexao, $comando_servicos1);
  $s1 = mysqli_fetch_assoc($res_servicos1);

  $comando="SELECT * FROM agendamento WHERE pets_id = ".$p1['id'];
// 
}


$resultado=mysqli_query($conexao, $comando);

while($z = mysqli_fetch_assoc($resultado)){


// 
$comando_pets = "SELECT * FROM pets WHERE id = ".$z['pets_id'];
$res_pets = mysqli_query($conexao, $comando_pets);
$p = mysqli_fetch_assoc($res_pets);

$comando_clientes = "SELECT * FROM clientes WHERE id = ".$p['clientes_id'];
$res_clientes = mysqli_query($conexao, $comando_clientes);
$c = mysqli_fetch_assoc($res_clientes);
// 
$comando_funcionarios = "SELECT * FROM funcionarios WHERE id = ".$z['funcionarios_id'];
$res_funcionarios = mysqli_query($conexao, $comando_funcionarios);
$f = mysqli_fetch_assoc($res_funcionarios);
//
$comando_servicos = "SELECT * FROM servicos WHERE id = ".$z['servicos_id'];
$res_servicos = mysqli_query($conexao, $comando_servicos);
$s = mysqli_fetch_assoc($res_servicos);



?>
  <header>
    <div class="mt-2 card text-center">
      <div class="bg-light card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link text-dark active" aria-current="true" href="#" id="dropdownMenu2"
                data-bs-toggle="dropdown" aria-expanded="false">
<?php

$stat = $z['status'];

if ($stat == 0) {
echo'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
class="bi bi-clock" viewBox="0 0 16 16">
<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
</svg>';
} else if ($stat == 1) {
echo'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16">
<path fill-rule="evenodd"
  d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z" />
</svg>';  
} else if ($stat == 2) {
echo'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
class="bi bi-exclamation-circle" viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
<path
  d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
</svg>';
} else if ($stat == 3){
echo'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
class="bi bi-check-circle" viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
<path
  d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
</svg>';
}
                   
?>

              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><form action="editar/editarStatus.php" method="post"><button class="dropdown-item" type="submit">
                <input type="hidden" name="status" value="0">
                <input type="hidden" name="edit_status" value="<?=$z['id']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                    </svg>
                    Em aberto
                  </button></form></li>
                <li><form action="editar/editarStatus.php" method="post"><button class="dropdown-item" type="submit">
                <input type="hidden" name="status" value="1">
                <input type="hidden" name="edit_status" value="<?=$z['id']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z" />
                    </svg>
                    Em andamento
                  </button></form></li>
                <li><form action="editar/editarStatus.php" method="post"><button class="dropdown-item" type="submit">
                <input type="hidden" name="status" value="2">
                <input type="hidden" name="edit_status" value="<?=$z['id']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                      <path
                        d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg>
                    Cancelado
                  </button></form></li>
                <li><form action="editar/editarStatus.php" method="post"><button class="dropdown-item" type="submit">
                <input type="hidden" name="status" value="3">
                <input type="hidden" name="edit_status" value="<?=$z['id']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                      <path
                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                    Concluido
                  </button></form></li>
              </ul>
            </div>




            </a>

          </li>
          <li class="nav-item">
            <a type="button" class="dropdown-item btn-primary nav-link text-dark" data-bs-toggle="modal"
              data-bs-target="#exampleModal1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
              </svg></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
              </svg></a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-evenly card-body">
        <table>
          <tr>
            <td><p class="card-text"><b>Data de cadastro: </b><?=$z['data']?></p></td>
          </tr>
          <tr>
            <td><p class="card-text"><b>Horario de início: </b><?=$z['horarioInicio']?></p></td>
          </tr>
          <tr>
            <td><p class="card-text"><b>Horario de término: </b><?=$z['horarioFinal']?></p></td>
          </tr>
        </table>
        <table>
          <tr>
            <td><p class="card-text"><b>Cliente: </b><?=$c['nomeCompleto']?></p></td>
          </tr>
          <tr>
            <td><p class="card-text"><b>Telefone: </b><?=$c['telefone']?></p></td>
          </tr>
        </table>
        <table>
          <tr>
            <td><p class="card-text"><b>Raça e/ou nome do Pet: </b><?=$p['nome']. ' - ' . $p['raca']?></p></td>
          </tr>
          <tr>
            <td><p class="card-text"><b>Serviço: </b><?=$s['descricao']?></p></td>
          </tr>
          <tr>
            <td><p class="card-text"><b>Funcionário dirigente: </b><?=$f['nomeCompleto']?></p></td>
          </tr>
        </table>

        <p class="card-text text-muted"></p>
      </div>
    </div>
  </header>
<?php } ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>