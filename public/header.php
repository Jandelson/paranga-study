<?php

use Controller\Controller;

require __DIR__ . '/../vendor/autoload.php';

if (empty($login)) {
    /**  
     *   Como o header é para todas as paginas, 
     *   somente valido o login se for fora da tela de login 
     */
    $base = new Controller;
    $nomeUsu= $base->nomeUsu;
    $idUsu = $base->idUsu;
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Agenda Pessoal</title>
</head>

<body>
    <?php if (empty($login)) { ?>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary bg-gradient" aria-label="Main navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">Home</a>
                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
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
                        <b class="text-white ">Olá <?=$nomeUsu?> </b>
                        <a class="text-white" href="login"> [ Sair ]</a>
                    </form>
                </div>
            </div>
        </nav>
    <?php } ?>