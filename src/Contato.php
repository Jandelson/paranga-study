<?php

namespace Agenda;

use Agenda\Connection;

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

    public function deleteById($id): array
    {
        return $this->connection->query(
            "delete from contato where id_contato = " . $id
        )->fetchObject();
    }

    public function create($request)
    {
    }
}