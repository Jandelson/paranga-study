<?php

namespace Agenda\Model;

use Agenda\Connection;
use Agenda\Endereco as DadosEndereco;

class Endereco {
    
    public $connection;

    public function __construct()
    {
        $this->connection = Connection::Conn();   
    }
    
    public function getEndereco(DadosEndereco $dadosEndereco): string
    {
        $search = $dadosEndereco->rua();
                
        $sql = "select id_endereco from endereco where logradouro like :search limit 1";
        
        $select = $this->connection->prepare($sql);
        $select->execute(array(':search' => '%'.$search.'%'));
        $result = $select->fetchAll(\PDO::FETCH_ASSOC);
        if ($result[0]['id_endereco']) {
            return $result[0]['id_endereco'];
        }
        return $this->create($dadosEndereco);
    }

    private function create(DadosEndereco $dadosEndereco): int
    {
        $sql = "insert into endereco (logradouro,cidade,bairro,uf) 
            values (?,?,?,?)";
        $insert = $this->connection->prepare($sql)->execute(
            [
                $dadosEndereco->rua(),
                $dadosEndereco->cidade(),
                $dadosEndereco->bairro(),
                $dadosEndereco->uf(),
            ]
        );
        if (!$insert) {
            return 0;
        }
        return $this->connection->lastInsertId();
    }
}