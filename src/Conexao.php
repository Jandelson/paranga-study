<?php


namespace App;

require '../vendor/autoload.php';

use PDO;
use PDOException;

class Conexao
{
    private static $db;
    public static $usuario = "abrahao";
    public static $senha = "R9lx3uh%";
    public static $dsn = "mysql:host=127.0.0.1;dbname=agenda";

    //Para impedir de clonar ou instanciar a classe!
    final private function __construct() { }
    final private function __clone() { }

    public static function novaConexao()
    {
        self::$db = new PDO(self::$dsn, self::$usuario, self::$senha);
        return self::$db;
    }
}
