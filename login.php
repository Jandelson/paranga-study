<!DOCTYPE html>
<html lang="PT-Br">

<head>
    <meta charset="utf-8">
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/login.css"/>
    <title>Paranga Agenda</title>
</head>
<?php
include "config.php";
?>

<body>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2">ParangAgenda</h2>
                            <p class="text-white-50 mb-5">Entre com seu Usuário e Senha!</p>
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="email" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX">Email</label>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="senha" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Senha</label>
                            </div>
                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu sua Senha?</a></p>
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </div>
                        <div>
                            <p class="mb-0">Não tem uma conta? <a href="#!" class="text-white-50 fw-bold">Criar Conta</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>