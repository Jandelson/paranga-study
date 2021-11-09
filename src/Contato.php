<?php

namespace App;

require_once '../vendor/autoload.php';

use App\Conexao;

class Contato {

    protected $tabela = 'contato';
    private $nome;
    private $email;
    private $telefone;

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome,email,telefone) VALUES (:nome, :email, :telefone)";
        $db = Conexao::novaConexao();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        return $stmt->execute();
    }

}
