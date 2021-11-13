<?php

namespace Agenda\Model;

use Agenda\Connection;
use Agenda\Contato as DadosContato;

class Contato {
    
    public $connection;

    public function __construct()
    {
        $this->connection = Connection::Conn();   
    }

    public function all(): array
    {
        return $this->connection->query(
            "select * from contato"
        )->fetchAll();
    }

    public function getById($id): object
    {
        return $this->connection->query(
            "select * from contato where id_contato = " . $id
        )->fetchObject();
    }

    public function deleteById($id): bool
    {
        $sql = "delete from contato where id_contato=?";
        $delete = $this->connection->prepare($sql)->execute(
            [$id]
        );
        return $delete;
    }

    public function create(DadosContato $dadosContato): bool
    {
        $sql = "insert into contato (nome,email,telefone,id_endereco) values (?,?,?,?)";
        $insert = $this->connection->prepare($sql)->execute(
            [
                $dadosContato->nome(),
                $dadosContato->email(),
                $dadosContato->telefone(),
                $dadosContato->endereco()
            ]
        );
        return $insert;
    }
}