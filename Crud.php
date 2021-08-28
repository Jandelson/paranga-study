<?php
require_once 'Connection.php';

abstract class Crud extends Connection
{
    protected $table;

    abstract public function insert();
    abstract public function update($id);

    public function find($id, $prefix)
    {
        $sql = "SELECT * FROM $this->table WHERE $prefix = :id";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = Connection::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id, $prefix)
    {
        $sql = "DELETE FROM $this->table WHERE $prefix = :id";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
