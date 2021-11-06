<?php 
require 'header.php';
use Controller\UserController;
$use = new UserController;
$meuDados = $use->MeusDados()[0];

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
                        <form action="" method="POST">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true"><i class="fa fa-id-card-o" aria-hidden="true"></i> Basico</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false"><i class="fa fa-home" aria-hidden="true"></i> Endereço</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row mt-3 p-2">
                                        <div class="col-md-6">
                                            <label for="inputnome4" class="form-label">Nome</label>
                                            <input name="nome" type="nome" required value="<?= $meuDados['basico']['nome'] ?>" class="form-control" id="inputnome4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input name="email" type="email" required value="<?=$meuDados['basico']['email'] ?>" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputnumber4" class="form-label">Telefone</label>
                                            <input name="telefone" type="text" required value="<?=$meuDados['basico']['telefone'] ?>" class="form-control" id="inputnumber4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputnumber5" class="form-label">Tipo ( <small>Agente Profissional será visivel a todos</small> )</label>
                                            <select class="form-select" name="id_tipo_contato" id="inputnumber5">
                                                <option <?php if($meuDados['basico']['id_tipo_contato'] == 1){echo 'selected';} ?> value="1">Pessoal</option>
                                                <option <?php if($meuDados['basico']['id_tipo_contato'] == 2){echo 'selected';} ?> value="2">Profissional</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row mt-3 p-2">
                                        <div class="col-md-6">
                                            <label for="Endereco" class="form-label">Endereco</label>
                                            <input type="text" required value="<?=$meuDados['endereco']['logradouro'] ?>" name="logradouro" class="form-control" id="Endereco"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputBairro" class="form-label">Bairro</label>
                                            <input type="text" required value="<?=$meuDados['endereco']['bairro'] ?>" name="bairro" class="form-control" id="inputBairro"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputNumero" class="form-label">Nº</label>
                                            <input type="text" required value="<?=$meuDados['endereco']['numero'] ?>" name="numero" class="form-control" id="inputNumero"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" required value="<?=$meuDados['endereco']['cidade'] ?>" name="cidade" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" name="uf" class="form-select">
                                                <option>Selecione</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'AC'){ echo 'selected';} ?> value="AC">AC</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'AL'){ echo 'selected';} ?> value="AL">AL</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'AM'){ echo 'selected';} ?> value="AM">AM</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'AP'){ echo 'selected';} ?> value="AP">AP</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'BA'){ echo 'selected';} ?> value="BA">BA</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'CE'){ echo 'selected';} ?> value="CE">CE</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'DF'){ echo 'selected';} ?> value="DF">DF</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'ES'){ echo 'selected';} ?> value="ES">ES</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'GO'){ echo 'selected';} ?> value="GO">GO</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'MA'){ echo 'selected';} ?> value="MA">MA</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'MG'){ echo 'selected';} ?> value="MG">MG</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'MS'){ echo 'selected';} ?> value="MS">MS</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'MT'){ echo 'selected';} ?> value="MT">MT</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'PA'){ echo 'selected';} ?> value="PA">PA</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'PB'){ echo 'selected';} ?> value="PB">PB</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'PE'){ echo 'selected';} ?> value="PE">PE</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'PI'){ echo 'selected';} ?> value="PI">PI</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'PR'){ echo 'selected';} ?> value="PR">PR</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'RJ'){ echo 'selected';} ?> value="RJ">RJ</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'RN'){ echo 'selected';} ?> value="RN">RN</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'RO'){ echo 'selected';} ?> value="RO">RO</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'RR'){ echo 'selected';} ?> value="RR">RR</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'RS'){ echo 'selected';} ?> value="RS">RS</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'SC'){ echo 'selected';} ?> value="SC">SC</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'SE'){ echo 'selected';} ?> value="SE">SE</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'SP'){ echo 'selected';} ?> value="SP">SP</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'TO'){ echo 'selected';} ?> value="TO">TO</option>
                                                <option <?php if($meuDados['endereco']['uf'] == 'EX'){ echo 'selected';} ?> value="EX">EX</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="complemento" class="form-label">Complemento</label>
                                            <input type="text" name="complemento" required value="<?=$meuDados['endereco']['complemento'] ?>" class="form-control" id="complemento">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center>

                                <button type="submit" class="btn btn-success w-50 mt-5 shadow">
                                    Salvar
                                </button>
                                <input type="hidden" name="acao" value="Salvar">
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
require 'footer.php';
if(!empty($_POST) && $_POST['acao'] == 'Salvar'){
    $use->updateDados($idUsu);
}

?>