<?php

namespace Agenda;

use Agenda\Model\Contato;

class Controller {

    public static function view(string $view = 'index', $id , array $dados = [])
    {
        if (empty($dados)) {
            $dados = (new Contato)->all();
        }

        if ($id > 0) {
            $id = (int) $id;
            $dados = (new Contato)->getById($id);
        }

        include('../view/layout/app.php');
        include('../view/' . $view . '.php');
        include('../view/layout/footer.php');
    }

    public static function route(string $route, array $dados)
    {
        include('../' . $route . '.php');
    }
}