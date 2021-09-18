<?php

namespace Agenda;

class Connection
{
    /* Consumir o mesmo statico Class::Conn() */
    public static function Conn()
    {
        try {
            $sql = new \PDO('mysql:host=localhost;dbname=agenda;charset=utf8', 'jandelson', 'admmysql');
            return $sql;
        } catch (\Exception $e) {
            echo $e;
        }
    }   
}