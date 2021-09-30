<?php

require_once '../vendor/autoload.php';

use App\Conexao;

abstract class Crud extends Conexao
{
    protected $tabela;
    abstract public function insert();
    abstract public function update($id);

    public function buscar($id, $indice)
    {
        $sql = "SELECT * FROM {$this->tabela} WHERE $indice = :id";
        $comando = Conexao::prepare($sql);
        $comando->bindParam(':id', $id, PDO::PARAM_INT);
    }

    public function buscarTudo()
    {
        $sql = "SELECT * FROM {$this->tabela}";
        $comando = Conexao::prepare($sql);
        $comando->execute();
        $comando->fetchAll();
    }

    public function delete($id, $indice)
    {
        $sql = "SELECT * FROM {$this->tabela} WHERE $indice = :id";
        $comando = Conexao::prepare($sql);
        $comando->bindParam(':id', $id, PDO::PARAM_INT);
        $comando->execute();
    }
}
