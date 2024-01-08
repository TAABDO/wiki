<?php

namespace Myapp\Controllers;
use Myapp\model\User;
require "../../vendor/autoload.php";


class UserControllers{

public function user(){

     $user= new User(null , null , null );
     $row = $user->fetchUtilisateur();

    return $row;


}

}





















?>