<?php

declare(strict_types=1);

namespace Agenda;

class Endereco {
    
    private $cep;
    private $rua;
    private $cidade;
    private $bairro;
    private $uf;

    public function __construct(
        string $cep, 
        string $rua, 
        string $cidade,
        string $bairro,
        string $uf)
    {
        $this->cep = $cep;
        $this->rua = $rua;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->uf = $uf;
    }

    public function cep(): string
    {
        return $this->cep;
    }
    public function rua(): string
    {
        return $this->rua;
    }
    public function cidade(): string
    {
        return $this->cidade;
    }
    public function bairro(): string
    {
        return $this->bairro;
    }
    public function uf(): string
    {
        return $this->uf;
    }
}