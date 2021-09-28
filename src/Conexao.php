<?php

namespace App;

require '../vendor/autoload.php';

class Conexao {

private static $novaConexao;
private $usuario = 'abrahao';
private $senha = 'R9lx3uh%';
private $nomeBanco = 'agenda';
private $host = '127.0.0.1';

    public function __construct() {
        try {
            self::$instanciaConexao = new PDO("mysql:host={$this->host};
            dbname={$this->nomeBanco}", $this->usuario, $this->senha);

            echo 'Conexao Realizada com sucesso! <br>';
        } catch (PDOException $erro) {
            echo 'ERRO: '. $erro->getMessage();
        }

        return self::novaConexao;
    }

    public static function prepararQuery($sql) {
        return self::novaConexao
    }
}
