<?php

namespace Test;

require_once '../vendor/autoload.php';

use App\Conexao;
use App\Contato;

$c = new Contato();
$c->setNome('abrahao');
$c->setEmail('abrahao@gmail.com');
$c->setTelefone('123123123');
var_dump($c->insert());
