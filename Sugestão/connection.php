<?php

class Conection
{
    /* Consumir o mesmo statico Class::Conn() */
    public static function Conn()
    {
       try {

        $sql = new PDO('mysql:host=localhost;dbname=NOME_DO_DB_TAB;charset=utf8', 'NOME_DO_DB', 'SENHA');
        return $sql;
        
       } catch (Exception $e) {
           echo $e;
       }
    }   
}
?>