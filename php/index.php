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
<nav class="navbar text-light bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-light">Petshop</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" aria-label="Search">
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
                <input type="time" class="form-control" id="horarioInicio" name="horarioInicio">
              </td>
              <td>
                <label for="horarioFinal" name="horarioFinal" class="form-label">Horario Final</label>
                <input type="time" class="form-control" id="horarioFinal" name="horarioFinal">
              </td>
            </tr>
            <tr>
              <td>
                <label for="pet" name="pet" class="form-label">Pet:</label>
                <select class="form-select" name="pet" id="pet">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="funcionario" name="funcionario" class="form-label">Funcionário:</label>
                <select class="form-select" name="funcionario" id="funcionario">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="servico" name="servico" class="form-label">Serviço:</label>
                <select class="form-select" name="servico" id="servico">
                  <option value="">A</option>
                  <option value="">B</option>
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
      <form action="cadastrar/cadastrarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="nomeCompleto" name="nomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto">
              </td>
              <td>
                <label for="email" name="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpf" name="cpf" class="form-label">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf">
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefone" name="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone">
              </td>
            </tr>
            <tr>
              <td>
                <label for="cep" name="cep" class="form-label">CEP</label>
                <input type="number" class="form-control" id="cep" name="cep">
              </td>
              <td>
                <label for="numero" name="numero" class="form-label">Nº</label>
                <input type="number" class="form-control" id="numero" name="numero">
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
      <form action="cadastrar/cadastrarServico.php" method="post">
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
                <input type="text" class="form-control" id="raca" name="raca">
              </td>
            </tr>
            <tr>
              <td>
                <label for="raca" name="raca" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="raca" name="raca">
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeCliente" name="nomeCliente" class="form-label">Nome do Cliente</label>
                <select class="form-select" name="nomeCliente" id="nomeCliente">
                  <option value="">A</option>
                  <option value="">B</option>
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
      <form action="cadastrar/cadastrarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Funcionário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="nomeFuncionario" name="nomeFuncionario" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario">
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpfFuncionario" name="cpfFuncionario" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpfFuncionario" name="cpfFuncionario">
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefoneFuncionario" name="telefoneFuncionario" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario">
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
      <form action="Editar/EditarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Serviço</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="servico_edit" name="servico_edit" class="form-label">Selecione o serviço</label>
                <select class="form-select" name="servico_edit" id="servico_edit">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="horarioInicio" name="horarioInicio" class="form-label">Horario Início</label>
                <input type="time" class="form-control" id="horarioInicio" name="horarioInicio">
              </td>
              <td>
                <label for="horarioFinal" name="horarioFinal" class="form-label">Horario Final</label>
                <input type="time" class="form-control" id="horarioFinal" name="horarioFinal">
              </td>
            </tr>
            <tr>
              <td>
                <label for="pet" name="pet" class="form-label">Pet</label>
                <select class="form-select" name="pet" id="pet">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="funcionario" name="funcionario" class="form-label">Funcionário</label>
                <select class="form-select" name="funcionario" id="funcionario">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="servico" name="servico" class="form-label">Serviço</label>
                <select class="form-select" name="servico" id="servico">
                  <option value="">A</option>
                  <option value="">B</option>
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
      <form action="Editar/EditarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="cliente_edit" name="cliente_edit" class="form-label">Selecione o cliente</label>
                <select class="form-select" name="cliente_edit" id="cliente_edit">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeCompleto" name="nomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto">
              </td>
              <td>
                <label for="email" name="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpf" name="cpf" class="form-label">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf">
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefone" name="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone">
              </td>
            </tr>
            <tr>
              <td>
                <label for="cep" name="cep" class="form-label">CEP</label>
                <input type="number" class="form-control" id="cep" name="cep">
              </td>
              <td>
                <label for="numero" name="numero" class="form-label">Nº</label>
                <input type="number" class="form-control" id="numero" name="numero">
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
      <form action="Editar/EditarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Pet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <td>
                <label for="pet_edit" name="pet_edit" class="form-label">Selecione o Pet</label>
                <select class="form-select" name="pet_edit" id="pet_edit">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="nome" name="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </td>
              <td>
                <label for="raca" name="raca" class="form-label">Raça</label>
                <input type="text" class="form-control" id="raca" name="raca">
              </td>
            </tr>
            <tr>
              <td>
                <label for="raca" name="raca" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="raca" name="raca">
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeCliente" name="nomeCliente" class="form-label">Nome do Cliente</label>
                <select class="form-select" name="nomeCliente" id="nomeCliente">
                  <option value="">A</option>
                  <option value="">B</option>
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
      <form action="Editar/EditarServico.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Funcionário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td>
                <label for="funcionario_edit" name="funcionario_edit" class="form-label">Selecione o Funcionário</label>
                <select class="form-select" name="funcionario_edit" id="funcionario_edit">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="nomeFuncionario" name="nomeFuncionario" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario">
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpfFuncionario" name="cpfFuncionario" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpfFuncionario" name="cpfFuncionario">
              </td>
            </tr>
            <tr>
              <td>
                <label for="telefoneFuncionario" name="telefoneFuncionario" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario">
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        aaaa
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<body class="bg-light">
  <header>
    <div class="mt-2 card text-center">
      <div class="bg-light card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">

            <div class="dropdown">
              <a class="nav-link text-dark active" aria-current="true" href="#" id="dropdownMenu2"
                data-bs-toggle="dropdown" aria-expanded="false">

                #


              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                    </svg>
                    Em aberto
                  </button></li>
                <li><button class="dropdown-item" type="button">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z" />
                    </svg>
                    Em andamento
                  </button></li>
                <li><button class="dropdown-item" type="button">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                      <path
                        d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg>
                    Cancelado
                  </button></li>
                <li><button class="dropdown-item" type="button">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                      <path
                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                    Concluido
                  </button></li>
              </ul>
            </div>









            </a>

          </li>
          <li class="nav-item">
            <a class="dropdown-item btn-primary nav-link text-dark" data-bs-toggle="modal"
              data-bs-target="#exampleModal5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path
                  d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd"
                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg></a>
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

          <li class="nav-item">
            <a class="nav-link text-dark "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path
                  d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd"
                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
              </svg></a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </header>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>