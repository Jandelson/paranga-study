<?php

use Agenda\Contato;

$contato = new Contato(
    $dados['nome'],
    $dados['email'],
    $dados['telefone']
);

var_dump($contato->getContato());