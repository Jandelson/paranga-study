<?php 
$login = true;
require 'header.php';
?>

<main class="container p-5">
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card shadow mt-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">Insira seu usuario para acessar</div>
                        <!-- <form action=""> -->
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row mt-3 p-2">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center>

                                <a href="home">
                                    <button class="btn btn-success w-50 mt-5">
                                        Entrar
                                    </button>
                                </a>
                            </center>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
require 'footer.php'; ?>