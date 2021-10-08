<?php

require __DIR__ . '/../vendor/autoload.php';

use Agenda\Page;

$dados = [];
$id = 0;

if ($_SERVER['REQUEST_URI']) {
    $request = explode('/', $_SERVER['REQUEST_URI']);

    $pagina = $request[1];
    $id = $request[2];

    if ($pagina == "") {
        $pagina = 'index';
    }
    echo Page::view($pagina, $id, $dados);
}