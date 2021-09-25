<?php

class Connection{
    public static function Conn(){
        try{
            $sql = new \PDO('mysql:host=localhost;dbname=bancoagenda;charset=utf8','root', '');
            return $sql;
        }catch(\Exception $e){
            echo $e;
        }
    }
}