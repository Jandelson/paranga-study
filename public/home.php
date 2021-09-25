<?php
require('bootstrap.php');
?>
<!DOCTYPE html>

<head>
    <title>Agenda Web</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div class="container">
        <div class="group-buttons">
            <div class="grid">
                <div class="g-col-4">
                    <a href="#" class="btn btn-success">Novo Agendamento</a>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#novoUsuario">
                        Cadastrar usuário
                    </button>
                    <!-- <a href="#" class="btn btn-success">Novo agendamento</a>            -->
                </div>
            </div>
            <!-- INÍCIO MODAL CADASTRAR USUÁRIO -->
            <div class="modal fade" id="novoUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Novo usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label for="login" class="col-sm-2 col-form-label">Login</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="login">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="senha">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="profissao" class="col-sm-2 col-form-label">Profissão</label>
                                <select class="form-select" name="profissao" id="profissao" aria-label="Default select example">
                                    <option selected>Escolha uma profissão abaixo</option>
                                    <option value="1">Marceneiro</option>
                                    <option value="2">Eletricista</option>
                                    <option value="3">Desenvolvedor</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM MODAL CADASTRAR USUÁRIO -->
        </div>
        <section>
            <h3 class="agendamento-h3">Agendamentos</h3>
            <table class="table table-striped table-secondary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
        </section>
    </div>
</body>

</html>