<?php

namespace App;

require '../vendor/autoload.php';

use PDO;
use PDOException;

class Conexao
{
    private static $novaConexao = null;
    private $usuario = 'abrahao';
    private $senha = 'R9lx3uh%';
    private $nomeBanco = 'agenda';
    private $host = '127.0.0.1';

    public function __construct()
    {
        try {
            self::$novaConexao = new PDO("mysql:host={$this->host};
            dbname={$this->nomeBanco}", $this->usuario, $this->senha);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }

    public static function get()
    {
        if (self::$novaConexao != null) {
            return self::$novaConexao;
        }
        self::$novaConexao = new Conexao();
    }

    public static function prepare($sql)
    {
        return self::get()->prepare($sql);
    }
}
