<?php

require __DIR__ . '/../vendor/autoload.php';

use Agenda\Controller;

$dados = [];
$id = 0;

if ($_SERVER['REQUEST_URI']) {
    $request = explode('/', $_SERVER['REQUEST_URI']);

    $pagina = $request[1];
    $id = $request[2];

    if ($pagina == "") {
        $pagina = 'index';
    }

    if (isset($_POST)) {
        $route = $_SERVER['REQUEST_URI'];
        $dados = $_POST;
        Controller::route($route, $dados);
    }

    echo Controller::view($pagina, $id, $dados);
}