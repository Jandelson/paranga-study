<?php 
require 'header.php';
?>

<main class="container p-5">
    <div class="card shadow mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agenda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <center>
                        Insira as informações do agendamento
                    </center>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text">Titulo</span>
                            <input type="text" aria-label="First name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text">Dt. Inicio</span>
                            <input type="text" aria-label="First name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text">Dt. Fim</span>
                            <input type="text" aria-label="First name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text">Hora</span>
                            <input type="text" aria-label="First name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text">Link</span>
                            <input type="text" aria-label="First name" class="form-control">
                        </div>
                    </div>

                    <button id="#salvar">
                      Salvar
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<?php 
require 'footer.php'; ?>