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
     * @param Integer $idUser
     * @return Array
     */
    public function getMeuDados($idUser)
    {
        $dados = [];
        $basico = $this->dadosBasico($idUser);
        $endereco = $this->dadosEndereco($idUser);

        $dados[] = array(
            'basico' => $basico,
            'endereco' => $endereco,
        );
        return $dados;
    }

    /**
     * Atualiza meus dados
     * @param Integer $idUser
     * @return Void
     */
    public function trayDadosUpdate($idUser)
    {
        $this->updateDadosBasicos($idUser);
        $this->updateDadosEndereco($idUser);
        $this->ModalSucess('Sucesso', 'Dados Atualizados', 'profile');
    }
    /**
     * Atualiza dados basico do usuario
     * @return boolval
     */
    public function updateDadosBasicos($idUser)
    {
        $sql = $this->Conn()->prepare("UPDATE contato SET nome = :n, email = :e, telefone = :t, id_tipo_contato = :c WHERE id_contato = :id");
        $sql->bindParam(':n', $_POST['nome']);
        $sql->bindParam(':e', $_POST['email']);
        $sql->bindParam(':t', $_POST['telefone']);
        $sql->bindParam(':c', $_POST['id_tipo_contato']);
        $sql->bindParam(':id', $idUser);

        $sql->execute();
        return true;
    }

    /**
     * Atualiza dados basico do usuario
     * @return boolval
     */
    public function updateDadosEndereco($idUser)
    {
        $sql = $this->Conn()->prepare("UPDATE endereco SET logradouro = :l, cidade = :c, bairro = :b, uf = :u, numero = :n, complemento = :cp WHERE id_endereco = :id");
        $sql->bindParam(':l', $_POST['logradouro']);
        $sql->bindParam(':c', $_POST['cidade']);
        $sql->bindParam(':b', $_POST['bairro']);
        $sql->bindParam(':u', $_POST['uf']);
        $sql->bindParam(':n', $_POST['numero']);
        $sql->bindParam(':cp', $_POST['complemento']);
        $sql->bindParam(':id', $idUser);

        $sql->execute();
        return true;
    }

    /**
     * Busca dados basico aluno de acorodo com Id
     * 
     * @param Int $id
     * @return Array
     */
    public function dadosBasico($id, $email = null)
    {
        if ($email == null) {
            $sql = $this->Conn->prepare("SELECT * FROM contato where id_contato = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
            $dados = $sql->fetch(\PDO::FETCH_ASSOC);
        } else {

            $sql = $this->Conn->prepare("SELECT * FROM contato where email = :em");
            $sql->bindParam(':em', $email);
            $sql->execute();
            $dados = $sql->fetch(\PDO::FETCH_ASSOC);

            var_dump($dados);
            if (!$dados) {
                $this->sqlDadosBasico('insert');
            } else {
                $this->ModalError('Ops!', 'Email já utilizado por outro usuario', 'login');
                return false;
            }
        }

        return $dados;
    }

    /**
     * SQL Contato
     * @param String $type
     * @return Boolval
     */
    public function sqlDadosBasico($type)
    {
        switch ($type) {
            case 'insert':
                $pwd = $this->ValidPWD($_POST['password'], 'Nova');

                $sql = $this->Conn->prepare("INSERT INTO contato (nome,email,password)values(:nome, :email, :pwd)");
                $sql->bindParam(':nome', $_POST['nome']);
                $sql->bindParam(':email', $_POST['email']);
                $sql->bindParam(':pwd', $pwd);
                $sql->execute();
                $lastId =  $this->Conn->lastInsertId();

                $this->sqlDadosEndereco($type, $lastId);

                $this->ModalSucess('Bem-Bindo(a)!', 'Seu cadastro foi efetuado com sucesso, vamos testar?', 'login');
                return true;
                break;

            default:
                # code...
                break;
        }
    }
    /**
     * SQL Contato
     * @param String $type
     * @return Boolval
     */
    public function sqlDadosEndereco($type, $idCad = '')
    {
        switch ($type) {
            case 'insert':
                $latsId = $idCad;

                $sql = $this->Conn->prepare("INSERT INTO endereco (id_contato)values(:contato)");
                $sql->bindParam(':contato', $latsId);
                $sql->execute();

                $this->ModalSucess('Bem-Bindo(a)!', 'Seu cadastro foi efetuado com sucesso, vamos testar?', 'login');
                return true;
                break;

            default:
                # code...
                break;
        }
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

    /**
     * Cria a sessão do usuario caso o mesmo tenha cadastro
     * @return boolval
     */
    public function logarUsuario()
    {
        $sql = $this->Conn->prepare('SELECT email,nome,id_contato,password FROM contato where email = :e ');
        $sql->bindParam(':e', $_POST['email']);
        $sql->execute();
        session_start();
        $dados = $sql->fetch(\PDO::FETCH_ASSOC);
        if (!empty($dados)) {
            $confirmPass = $this->ValidPWD($_POST['password'], 'Comparar', $dados['password']);
            // var_dump($dados['password']);
            if ($confirmPass) {
                $_SESSION['usuario'] = true; //Validando Sessão no Controller


                $_SESSION['id'] = $dados['id_contato'];
                $_SESSION['nome'] = $dados['nome'];
                echo '<script>window.location.href="home"</script>';
                return true;
            } else {
                $this->ModalError('Ops!', 'Usuario e/ou senhas não conferem com nossa base!, tente novamente', 'login');
                return false;
            }
        } else {

            $this->ModalError('Ops!', 'Não encontramos seu cadastro, tente novamente', 'login');
            return false;
        }
    }

    public function newCad()
    {

        $this->dadosBasico(0, $_POST['email']);
    }

    /**
     * Metodo para valdiar senhas em HASH
     * 
     * @param String $pwd   Senha digitada
     * @param String $action   Metodo a usar?
     * @param String $hash  Senha do Banco
     * @return String|Booleval
     */
    public function ValidPWD($pwd, $action, $hash = '')
    {

        switch ($action) {
            case 'Nova':
                $ret = password_hash($pwd, PASSWORD_DEFAULT);
                break;

            case 'Comparar':
                var_dump($hash);
                if (password_verify($pwd, $hash)) {
                    $ret = true;
                } else {
                    $ret = false;
                }
                break;
        }
        return $ret;
    }
}
