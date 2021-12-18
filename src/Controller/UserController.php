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
      * @param Integer $idUser
      * @return Array
      */
     public function MeusDados($idUser){
         return $this->getMeuDados($idUser);
     }

     /**
      * Update de Dados do usuario
      * @param Integer $idAluno
      */
      public function updateDados($idAluno){
        return $this->trayDadosUpdate($idAluno);
      }
 }
 