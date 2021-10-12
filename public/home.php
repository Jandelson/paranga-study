<?php
include_once("bootstrap.php");
session_start();
// include_once("cadastrarUsuario.php");
// if (isset($_SESSION['msg'])) {
//     $printMsg = $_SESSION['msg'];
//     $_SESSION['msg'] = '';
// }

include_once("/xampp/htdocs/paranga-study/database/connection.php");
// $user = [];
$query = "SELECT * FROM contato";
$stmt = $conn->prepare($query);
$stmt->execute();
$user = $stmt->fetchAll();
?>
<!DOCTYPE html>

<head>
    <title>Agenda Web</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-light">
                    <a href="cadastrarAgendamento.php"><i class="far fa-calendar-plus fa-2x">&nbsp;&nbsp;</i>Novo Agendamento</a>
                </button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#novoUsuario">
                    <i class="fas fa-user-plus fa-2x">&nbsp;&nbsp;</i>Cadastrar Contato
                </button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-light">
                    <a href=""><i class="fas fa-users fa-2x">&nbsp;&nbsp;</i>Listar Contato</a>
                </button>
            </div>
        </div>
    </div>
    <div class="group-buttons">
        <!-- <div class="grid"> -->
        <!-- <div class="g-col-4">
            <a href="cadastrarAgendamento.php" class="btn btn-success">Novo Agendamento</a>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#novoUsuario">
                Cadastrar Usuário
            </button>
            <a href="#" class="btn btn-primary">Listar Usuário</a>
        </div> -->
        <!-- </div> -->
        <!-- INÍCIO MODAL CADASTRAR USUÁRIO -->
        <div class="modal fade" id="novoUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Novo usuário</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="cadastrarAgendamento.php" method="POST">
                            <div class="mb-3 row">
                                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input name="nome" type="text" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
                                <div class="col-sm-10">
                                    <input name="telefone" class="form-control" type="text" id="telefone">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                                <div class="col-sm-10">
                                    <input name="endereco" type="text" class="form-control" id="endereco">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="funcao" class="col-sm-2 col-form-label">Função</label>
                                <div class="col-sm-10">
                                    <input name="funcao" type="text" class="form-control" id="funcao">
                                </div>
                            </div>
                            <!-- <div class="mb-3 row">
                                <label for="profissao" class="col-sm-2 col-form-label">Profissão</label>
                                <select class="form-select" name="profissao" id="profissao" aria-label="Default select example">
                                    <option selected>Escolha uma profissão abaixo</option>
                                    <option value="1">Marceneiro</option>
                                    <option value="2">Eletricista</option>
                                    <option value="3">Desenvolvedor</option>
                                </select>
                            </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-light">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FIM MODAL CADASTRAR USUÁRIO -->
    </div>
    <section>
        <div class="alert alert-dark" role="alert">
            <h3 class="agendamento-h3 text-center">Agendamentos</h3>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Nome</th>
                    <th class="text-center" scope="col">Descrição</th>
                    <th class="text-center" scope="col">Ações</th>
                </tr>
            <tbody>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="icons">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="icons">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="icons">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            </thead>
    </section>
    <!-- </div> -->
</body>

</html>