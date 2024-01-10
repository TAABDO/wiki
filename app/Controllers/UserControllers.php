<?php

namespace Myapp\Controllers;
use Myapp\model\User;
require "../../vendor/autoload.php";


class UserControllers{



            public function show(){
               $users = User::fetchUtilisateur();
               return $users;

            }


}





















?>