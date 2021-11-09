<?php

namespace Test;

require_once '../vendor/autoload.php';

use App\Conexao;

$db = Conexao::novaConexao();
$st = $db->prepare("insert into contato (nome,email,telefone) values ('abrahao2','abrahao2@gmail.com','12331321321');");
$st->execute();
