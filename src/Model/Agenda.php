<?php

namespace Models;

use Core\Connection;
use DateTime;
/**
 * Metodo Funcionalidades da Agenda
 */
class Agenda extends Connection
{

    /**
     * Metodo busca todos os agendamentos
     * @param Int $idUsu
     * @return Array
     */

     public function AllgetEventsDb($idUsu){
         $sql = $this->Conn()->prepare('SELECT * FROM agenda WHERE id_contato = :idUsu');
         $sql->bindParam(':idUsu', $idUsu);
         $sql->execute();

         $dados = $sql->fetchAll(\PDO::FETCH_ASSOC);
     }

    /**
     * Metodo Insere dados para agendamento
     * @return String
     */
    public function InsertAgenda()
    {

        $titulo  = $_POST['titulo'];
        $anotacao = $_POST['anotacao'];
        $url = $_POST['url'];
        $idContato = $_POST['idContato'] ?? 1;
        $tipo = $_POST['tipo'];
        $data_start = $this->converteData($_POST['start'], 'start', false);
        $data_end = $this->converteData($_POST['end'], 'end', $data_start);

        $sql = $this->Conn()->prepare("INSERT INTO agenda(id_contato, data_start, data_end, titulo_agenda, anotacao_agenda, url_event, tipo)VALUES(:id_contato, :data_start, :data_end, :titulo_agenda, :anotacao_agenda, :url_event, :tipo)");
        $sql->bindParam(':id_contato', $idContato);
        $sql->bindParam(':data_start', $data_start);
        $sql->bindParam(':data_end', $data_end);
        $sql->bindParam(':titulo_agenda', $titulo);
        $sql->bindParam(':anotacao_agenda', $anotacao);
        $sql->bindParam(':url_event', $url);
        $sql->bindParam(':tipo', $tipo);
        $sql->execute();

        return 'Send';
    }

    /**
     * Metodo convert data de acordo com a origem
     * 
     * @param Array     $date
     * @param String    $origem
     * @param Date      $inicial
     */
    public function converteData($data, $origem, $inicial)
    {
        switch ($origem) {
            case 'start':
                $data = $data[2] . '-' . $data[1] . '-' . $data[0] . 'T' . $data[3];

                break;

            case 'end':
                $FirstDateEnd = $data[2] . '-' . $data[1] . '-' . $data[0] . 'T' . $data[3];
                $data = $this->GetDiffDate($inicial, $FirstDateEnd); // Validar Diferença!
                break;
        }

        return $data;
    }

    /**
     * Valido as diferença entre a data marcada e a data final
     * @param Date $start
     * @param Date $end
     * 
     * @return Date
     */
    public function GetDiffDate($start, $end)
    {
        $DateStart = new DateTime($start);
        $DateEnd = new DateTime($end);

        // Salvando Difereça das datas
        $diff = $DateEnd->diff($DateStart);

        // Separando oque vou usar
        $dias = $diff->format('%d');
        $horas = $diff->format('%h');
        $minutos = $diff->format('%i');

        if (
            $dias == 1
            and $horas == 0
            and $minutos == 30
        ) {
            //Se adiferença foi de 1 dia e o horario tem diferença de 30 foi clicado no dia!
            // Com isso pego a data informada e subtraio 1 dia!
            $result = date('Y-m-d h:i:s', strtotime('-1 days', strtotime($end)));
        } else {
            // Caso não, o mesmo foi especificado o momento e dia!
            $result = $end;
        }

        return $result;
    }
}
