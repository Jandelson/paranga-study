<?php

declare(strict_types=1);

namespace Agenda;
class Contato {
    
    private $nome;
    private $email;
    private $telefone;
    public $id_endereco;

    public function __construct(string $nome, string $email, string $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function nome(): string
    {
        return $this->nome;
    }
    public function email(): string
    {
        return $this->email;
    }
    public function telefone(): string
    {
        return $this->telefone;
    }

    public function setIdEndereco(string $id_endereco): void
    {
        $this->id_endereco = $id_endereco;
    }

    public function endereco(): string
    {
        return $this->id_endereco;
    }
}