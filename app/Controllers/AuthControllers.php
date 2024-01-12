<?php

namespace Myapp\Controllers;

require_once __DIR__ ."/../../vendor/autoload.php";

use Myapp\model\User;

session_start(); // Start or resume the session

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registerUser'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    $role_id = 2;

    $result = User::signUp($nom, $email, $motdepasse, $role_id);

    if ($result) {
        // Store user information in the session
        $_SESSION['user'] = [
            'nom' => $nom,
            'email' => $email,
            'role_id' => $role_id,
             'id' =>$id,
            // Add any other user-related information you want to store
        ];

        header("Location:../../view/auth/login.php");
        exit();
    } else {
        echo "Error in signup";
    }
}

// =============================== signIn =============================

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $user = new User('', '', $_POST['email'], $_POST['motdepasse'], '');

    $row = $user->findUserByEmail();

    if (password_verify($user->getMotedepasse(), $row['motedepasse'])) {
        // Store user information in the session
        $_SESSION['user'] =
        ['id'=> $row['id'],
            'nom' => $row['nom'],
            'email' => $row['email'],
            'role_id' => $row['role_id'],
            // Add any other user-related information you want to store
        ];

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

