<?php

namespace Models;

use Core\Connection;

class Users extends Connection
{
    public $Conn;

    /**
     * COnstrutor ja definindo conexao
     * @param Void
     */
    public function __construct()
    {
        $this->Conn = Users::Conn();
    }

    /**
     * Listando Todos os cadatros do banco
     * @return Array
     */
    public function listAllUsers()
    {
        $contatos = $this->Conn->query("SELECT * FROM contato")->fetchAll();
        return $contatos;
    }

    /**
     * Metodo para mostrar meus dados
     * @return Array
     */
    public function getMeuDados()
    {
        $dados = [];
        $basico = $this->dadosBasico(1);
        $endereco = $this->dadosEndereco(1);

        $dados[] = array(
            'basico' => $basico,
            'endereco' => $endereco,
        );
        return $dados;
    }

    /**
     * Busca dados basico aluno de acorodo com Id
     * 
     * @param Int $id
     * @return Array
     */
    public function dadosBasico($id)
    {
        $sql = $this->Conn->prepare("SELECT * FROM contato where id_contato = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $dados = $sql->fetch(\PDO::FETCH_ASSOC);

        return $dados;
    }

    /**
     * Busca dados Endereco aluno de acorodo com Id
     * 
     * @param Int $id
     * @return Array
     */
    public function dadosEndereco($id)
    {
        $sql = $this->Conn->prepare("SELECT * FROM endereco where id_endereco = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $dados = $sql->fetch(\PDO::FETCH_ASSOC);

        return $dados;
    }

    public function logarUsuario()
    {
        $sql = $this->Conn->prepare('SELECT email,nome,id_contato FROM contato where email = :e ');
        $sql->bindParam(':e', $_POST['email']);
        $sql->execute();
        session_start();
        $dados = $sql->fetch(\PDO::FETCH_ASSOC);
        if (!empty($dados)) {
            $_SESSION['usuario'] = true; //Validando Sessão no Controller


            $_SESSION['id'] = $dados['id_contato'];
            $_SESSION['nome'] = $dados['nome'];
            echo '<script>window.location.href="home"</script>';
            return true;
        } else {
            return false;
        }
    }
}
