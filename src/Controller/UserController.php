<?php 
namespace Controller;

use Models\Users;

class UserController extends Users
 {      
     /**
      * Disparando requisição para o Model Responsavel pelos dados
      * @return Array 
      */
     public function getAllUsers(){
         return $this->listAllUsers();
     }

     /**
      * Busca no Model os meus dados
      * @return Array
      */
     public function MeusDados(){
         return $this->getMeuDados();
     }
 }
 