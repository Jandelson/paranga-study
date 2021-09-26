<?php

require '../src/Conexao.php';

echo 'law';
echo 'law2';


$conexaoBanco = new ConexaoBanco();
var_dump($conexaoBanco->novaConexao());
