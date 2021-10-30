<?php

declare(strict_types=1);

namespace Agenda;

class Contato {
    
    private $nome;
    private $email;
    private $telefone;

    public function __construct(string $nome, string $email, string $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getContato(): Contato
    {
        return $this;
    }
}