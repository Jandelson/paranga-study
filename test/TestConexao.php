<?php

namespace Test;

require_once '../vendor/autoload.php';

use App\Conexao;

$conexaoBanco = new Conexao();
var_dump($conexaoBanco->novaConexao());
