<?php
namespace Controller;
use Models\Users;

class authUserController extends Users
{   
    /**
     * Autentica sessão!
     * @param   Void  $_POST 
     * @return  Void
     */
    public function AutenticaUsuario()
    {
        $status = $this->VerificaLogin();

        if (!$status) {
            return $this->CriarSessao();
        }
    }

    /**
     * Verifica se já existe uma sessão no navegador 
     * @param Session $_SESSION
     * @return Boolval
     */
    public function VerificaLogin()
    {
        ob_start();
        if (!empty($_SESSION['usuario'])) {
            header('Location: home');
            exit;
        } else {
            return false;
        }
    }

    /**
     * Cria Sessão para iniciar o acesso 
     * @return Void
    */
    public function CriarSessao(){
        $data = $this->logarUsuario();
        if(!$data){
            return false;
        }
    }

    /**
     * Destroy sessão do usuario Logado!
     * Redirecionada para tela de Login
     * 
     * @return Void
     */
    public function Logout()
    {
        session_start();
        unset(
            $_SESSION['usuario'],
            $_SESSION['nome'],
            $_SESSION['id']
        );
        header('Location: login');
    }

    /**
     * Criar novo cadastro de usuario!
     */
    public function safeCad(){
        return $this->newCad();
    }
}
