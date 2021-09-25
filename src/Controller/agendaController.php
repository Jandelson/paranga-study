<?php



/**
 * Metodo Funcionalidades da Agenda
 */
class Agenda
{
    
    public function InsertAgenda()
    {

        $titulo  = $_POST['titulo'];
        $anotacao = $_POST['anotacao'];
        $url = $_POST['url'];
        $idContato = $_POST['idContato'];
        $tipo = $_POST['tipo'];
        $data_start = $_POST['start'];
        $data_end = $_POST['end'];

        $sql = $this->Conn->prepare("INSERT INTO agenda(id_contato, data_start, data_end, titulo_agenda, anotacao_agenda, url_event, tipo)VALUES(:id_contato, :data_start, :data_end, :titulo_agenda, :anotacao_agenda, :url_event, :tipo)");
        $sql->bindParam(':id_contato', $idContato);
        $sql->bindParam(':data_start', $data_start);
        $sql->bindParam(':data_end', $data_end);
        $sql->bindParam(':titulo_agenda', $titulo);
        $sql->bindParam(':anotacao_agenda', $anotacao);
        $sql->bindParam(':url_event', $url);
        $sql->bindParam(':tipo', $tipo);
        $sql->execute();

        echo 'FOI';
    }
}

// if (isset($_POST)) {
//     require '../Core/connection.php';
//     $agenda = new Agenda;
//     $agenda->InsertAgenda($_POST);
// }