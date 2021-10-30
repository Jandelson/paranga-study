<?php 

namespace Controller;

class Controller
{   
    public $idUsu;
    public $nomeUsu;
    // Verifica credenciais do usuario!
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['usuario'])){
            unset($_SESSION);
            header('Location:login');
            exit;
        }
        $this->idUsu = $_SESSION['id'];
        $this->nomeUsu = $_SESSION['nome'];
    }
}

