<?php

namespace App;

require_once '../vendor/autoload.php';

use App\Conexao;

abstract class Crud extends Conexao
{
    protected $tabela;
    abstract public function insert();
    abstract public function update($id);

    public function buscar($id,$indice)
    {
        $sql = "SELECT * FROM $this->tabela WHERE $indice = :id";
        $prepararQuery = Conexao::novaConexao;  
    }

}
