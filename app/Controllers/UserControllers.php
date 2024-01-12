<?php

namespace Myapp\Controllers;
use Myapp\model\User;
require __DIR__."/../../vendor/autoload.php";


class UserControllers{

            public function show(){
               $users = User::fetchUtilisateur();
               return $users;

            }
            public function ajouterutilisateur() {

               $name = $_POST['categorie_Nom'];
               $result = Categorie::AjouterCategorie($name);
               return $result;
           
               if($result) {
                   echo ('add with success');
               } else {
                   echo ('add failed');
               }
           }

           public function updateutilisateur(){



           }

}





















?>