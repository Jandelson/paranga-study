<?php

namespace Controller;

use Models\Agenda;
/**
 * Metodo Funcionalidades da Agenda
 */
class agendaController extends Agenda
{
    
    public function TrayInsertAgenda()
    {
        return $this->InsertAgenda();
    }
}

// if (isset($_POST)) {
//     require '../Core/connection.php';
//     $agenda = new Agenda;
//     $agenda->InsertAgenda($_POST);
// }