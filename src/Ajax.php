<?php

namespace App;

/**
* Esse jeito que eu estou usando não é o melhor mas visto como o projeto é pequeno farei dessa forma.
* Vou tratar todos os eventos dos botões aqui
**/

require_once '../vendor/autoload.php';


if(isset($_POST['data'])) {
    switch ($_POST['data'][0]) {
        case 'inserir':
            return TRUE;

        case 'deletar':
            return TRUE;
            break;
    }
} else {
    echo 'Nao veio $POST';
}
