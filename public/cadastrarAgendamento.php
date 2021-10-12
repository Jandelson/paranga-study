<?php
include_once('bootstrap.php');

// if(isset($_POST['login'],$_POST['email'],$_POST['senha'], $_POST['funcao'])){
//     die('Cadastrado');
// }

?>

<!DOCTYPE html>

<head>
    <title>Novo Agendamento</title>
    <link rel="stylesheet" href="css/agendamento.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
    <header>
        <div class="alert alert-dark" role="alert">
            <h3 class="agendamento-h3">Novo Agendamento</h3>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="data" class="col-sm-2 col-form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Teste de campos">
                </div>
                <div class="col">
                    <label for="data" class="col-sm-2 col-form-label">Função</label>
                    <input type="text" class="form-control" placeholder="Teste de campos">
                </div>
            </div>
            <!-- <div class="row col-sm-4">
                <div class="col-sm">
                    <label for="data" class="col-sm-2 col-form-label">Data início</label>
                    <input type="text" class="form-control" placeholder="Informe o dia inicial da consulta">
                </div>
                <div class="col-sm">
                <label for="data" class="col-sm-2 col-form-label">Data fim</label>
                    <input type="text" class="form-control" placeholder="Informe o dia final da consulta">
                </div>
            </div> -->
        </div>
    </section>

</body>

</html>