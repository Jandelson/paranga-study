<?php 
require 'header.php';

use Controller\UserController;

$use = new UserController;
$list = $use->getAllUsers();

?>

<main class="container p-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow mt-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="https://cdn.dribbble.com/users/102974/screenshots/2726841/head_bob.gif"
                                class="img-fluid" alt="">
                        </div>
                        <center>
                            <b>
                                Jozuka
                            </b>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card shadow mt-4">
                <div class="card-body">
                    <div class="row">
                        <center>
                            Lista de cadastros
                        </center>

                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telefone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list as $key => $value) { ?>
                                    <tr>
                                        <td> <?= $value['id_contato'] ?></td>
                                        <td> <?= $value['nome'] ?></td>
                                        <td> <?= $value['email'] ?></td>
                                        <td> <?= $value['telefone'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
require 'footer.php'; ?>