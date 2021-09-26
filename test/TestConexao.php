<?php

require '../src/Conexao.php';

$conexaoBanco = new ConexaoBanco();
var_dump($conexaoBanco->novaConexao());
