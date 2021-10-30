<?php
$login = true;
require 'header.php';

use Controller\authUserController;
$loginUser = new authUserController;

if (!is_writable(session_save_path())) {
    echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
}
ob_start();
?>

<main class="container-fluid login">
    <div class="row">
        <div class="col-md-8">
            <center>
                <h1 class="text-white">
                    Sua Agenda Pessoal
                </h1>
            </center>
            <div class="row">

                <div class="col-md-4">
                    <center>
                        <h5 class="text-white">
                            Beneficios
                        </h5>
                    </center>
                    <div class="card p-2 card-animado">
                        <small>
                            Controle seu horario com o intevalo minimos de 30 minutos, isso evita que eventos conflitem!
                        </small>
                    </div>
                </div>
                <div class="offset-md-8 col-md-4">
                    <center>
                        <h5 class="text-white">
                            Filtros!
                        </h5>
                    </center>
                    <div class="card p-2 card-animado small">
                        <ul>
                            <li>Dentista</li>
                            <li>Medico</li>
                            <li>Psicologo</li>
                            <li>Remédio</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <center>
                        <h5 class="text-white">
                            Para o Escritorio
                        </h5>
                    </center>
                    <div class="card p-2 card-animado">
                        <small>
                            Para seu consultorio á a possibilidade de que seus cliente agende horarios de acorodo com as disponibilidade,
                            assim evitando que acha algum imprevisto por agendamentos!
                        </small>
                    </div>
                </div>

                <div class="offset-md-8 col-md-4">
                    <center>
                        <h5 class="text-white">
                            Uso Pessoal e Profissional
                        </h5>
                    </center>
                    <div class="card p-2 card-animado small">
                        <small>
                            Como o agendamento é administrado pela logica, é ate mesmo possivel em seu espediente agendar para uso profissional ou pessoal,
                            com isso aquela data especificado e horario estçao indisponivel para agendamentos!
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow mt-4">
                <div class="card-body">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Sing in</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Sing up</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <!-- <form action=""> -->
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <form action="" method="POST">
                                            <div class="col-md-12">Insira seu usuario para acessar</div>
                                            <div class="row mt-3 p-2">
                                                <div class="col-md-12">
                                                    <label for="inputEmail4" class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" id="inputEmail4">
                                                </div>
                                                <center>
                                                    <a href="home">
                                                        <button type="submit" class="btn btn-success w-50 mt-5">
                                                            Entrar
                                                        </button>
                                                        <input type="hidden" value="login" name="login">
                                                    </a>
                                                </center>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="" method="post">
                                    <center>
                                        <h3 class="mt-2">Novo Cadastro</h3>
                                    </center>
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" id="email" name="email">
                                </form>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require 'footer.php';
if (isset($_POST) && !empty($_POST['login'])) {
    $loginUser->AutenticaUsuario();
}

 ?>