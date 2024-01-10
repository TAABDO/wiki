<?php

namespace Myapp\Controllers;
require_once __DIR__ . "/../../vendor/autoload.php";

use Myapp\model\User;





    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registerUser'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $motdepasse = $_POST['motdepasse']; 
        $role_id=2;
        
        $result = User::signUp($nom, $email, $motdepasse, $role_id);

        if ($result) {
            header("Location:../../view/auth/login.php");
            exit();
        } else {
            echo "Error in signup";
        }
    }


// =============================== signIn =============================


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
         
         $user= new User('','',$_POST['email'],$_POST['motdepasse'],'');
   
         $row = $user->findUserByEmail();

        if (password_verify($user->getMotedepasse(),$row['motedepasse'])) {
                
        if ($row['role_id'] == 1) {

                header("Location:../../view/dashboard/dashboard_Admin.php");
                exit;
            } else {
                header("location:../../index.php");
                exit;
                
            }
        } else {
            
            echo "Invalid password.";
        }
    }

    
// }