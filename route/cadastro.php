<?php

use Agenda\Contato;
use Agenda\Endereco;
use Agenda\Model\Contato as ModelContato;
use Agenda\Model\Endereco as ModelEndereco;

$modelContato = new ModelContato();
$modelEndereco =  new ModelEndereco();

$contato = new Contato(
    $dados['nome'],
    $dados['email'],
    $dados['telefone']
);

$endereco = new Endereco(
    $dados['cep'],
    $dados['rua'],
    $dados['cidade'],
    $dados['bairro'],
    $dados['uf']
);


$contato->setIdEndereco($modelEndereco->getEndereco($endereco));

if (!$modelContato->create($contato)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
header('Location: /');