<?php

namespace Models;

use Core\Connection;

/**
 * Metodo Funcionalidades da Agenda
 */
class Agenda extends Connection
{
    
    public function InsertAgenda()
    {

        $titulo  = $_POST['titulo'];
        $anotacao = $_POST['anotacao'];
        $url = $_POST['url'];
        $idContato = $_POST['idContato'];
        $tipo = $_POST['tipo'];
        $data_start = $this->converteData($_POST['start'], 'start', false);
        $data_end = $this->converteData($_POST['end'], 'end', $data_start);

       $sql = $this->Conn->prepare("INSERT INTO agenda(id_contato, data_start, data_end, titulo_agenda, anotacao_agenda, url_event, tipo)VALUES(:id_contato, :data_start, :data_end, :titulo_agenda, :anotacao_agenda, :url_event, :tipo)");
       $sql->bindParam(':id_contato', $idContato);
       $sql->bindParam(':data_start', $data_start);
       $sql->bindParam(':data_end', $data_end);
       $sql->bindParam(':titulo_agenda', $titulo);
       $sql->bindParam(':anotacao_agenda', $anotacao);
       $sql->bindParam(':url_event', $url);
       $sql->bindParam(':tipo', $tipo);
       $sql->execute();

        return 'FOI';
    }

    /**
     * Metodo convert data de acordo com a origem
     * 
     * @param Array     $date
     * @param String    $origem
     * @param Date      $inicial
     */
    public function converteData($data, $origem, $inicial){
        switch ($origem) {
            case 'start':
                $data = $data[2] .'-'. $data[1]. '-'.$data[0] . 'T'. $data[3];
                break;
            
            case 'end':
                
                $data = $data[2] .'-'. $data[1]. '-'.$data[0] . 'T'. $data[3];
                break;
        }

        return $data;
         
    }
}
