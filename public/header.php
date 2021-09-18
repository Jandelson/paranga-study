<?php

require __DIR__ . '/../vendor/autoload.php';

?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Agenda Pessoal</title>
</head>

<body>
<?php if (empty($login)){ ?>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary bg-gradient" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">Home</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="agenda">agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastros">cadastros</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="text-white" href="login"> [ Sair ]</a>
                </form>
            </div>
        </div>
    </nav>
<?php } ?>