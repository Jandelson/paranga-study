<?php

namespace Controller;

use Models\Agenda;
/**
 * Metodo Funcionalidades da Agenda
 */
class agendaController extends Agenda
{
    /**
     * Metodo Insere dados na agenda!
     */
    public function TrayInsertAgenda()
    {
        return $this->InsertAgenda();
    }

    /**
     * Metodo Traz dados da agenda!
     * @param Int $idUsu
     */
    public function AllgetEvents($idUsu){
        $this->AllgetEventsDb($idUsu);
    }
}

// if (isset($_POST)) {
//     require '../Core/connection.php';
//     $agenda = new Agenda;
//     $agenda->InsertAgenda($_POST);
// }