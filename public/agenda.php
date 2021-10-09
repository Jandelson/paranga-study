<?php
require 'header.php';

use Controller\agendaController;
$use = new agendaController;

if($_POST && !empty($_POST)){
    $formAjax = $use->TrayInsertAgenda();

    if(!empty($formAjax)){
        echo $formAjax;
        exit;
    }
}
?>

<main class="container p-5">
    <div class="card shadow mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">

                    <div id='calendar'></div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <center>
                            <h3>

                                Detalhes
                            </h3>
                        </center>
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="titulo">Titulo do evento</label>
                                        <input class="form-control" id="titulo" type="text">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="anotacao">Anotação</label>
                                        <input class="form-control" id="anotacao" type="text">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="url">Url</label>
                                        <input class="form-control" id="url" type="text">
                                        <input id="idContato" type="hidden" value="1">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tipo">Tipo do evento</label>
                                        <select class="form-select" name="tipo_evento" id="tipo">
                                            <option value="Dentista">Dentista</option>
                                            <option value="Medico">Medico</option>
                                            <option value="Psicologo">Psicologo</option>
                                            <option value="Remédio">Remédio</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="ObrigaCampos" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agenda</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-exclamation-circle" aria-hidden="true"></i></strong> Preencha todos os campo!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<?php
require 'footer.php'; ?>