<?php

namespace App;

/**
* Esse jeito que eu estou usando não é o melhor mas visto como o projeto é pequeno farei dessa forma.
* Vou tratar todos os eventos dos botões aqui
**/

require_once '../vendor/autoload.php';

if(isset($_POST['evento'])) {
    switch ($_POST['evento']) {
        case 'inserir':
            return TRUE;
            break;
        case 'deletar':
            return TRUE;
            break;
    }
}
