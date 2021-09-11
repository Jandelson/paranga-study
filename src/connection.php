<?php
namespace Agenda;

class Connection
{
    /* Consumir o mesmo statico Class::Conn() */
    public static function Conn(){
        try {
            $sql = new \PDO('mysql:host=localhost;dbname=paranga_study;charset=utf8','root', '');
            return $sql;
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
?>