<?php

namespace Myapp\model;
use Myapp\config\Database;
require "../../vendor/autoload.php";


class User
{
    private $id;
    private $nom;
    private $email;
    private $motedepasse;
    private $conn;

    public function __construct($id, $nom, $email, $motedepasse)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->motedepasse = $motedepasse;

        $this->conn = Connection::connect();

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMotedepasse()
    {
        return $this->motedepasse;
    }
    private function setMotedepasse($motedepasse) {
       $this->password = password_hash($motedepasse, PASSWORD_DEFAULT);
    }


    public function ajouter(){
       $hashedPassword = password_hash($this->motedepasse, PASSWORD_DEFAULT);

       $requet = "INSERT INTO `utilisateur`(`nom`,`email`, `motedepasse`) VALUES (:nom, :email, :motedepasse)";

       $stmt = $this->conn->prepare($requet);
       $stmt->BindParam(':nom',$this->nom);
       $stmt->BindParam(':email',$this->email);
       $stmt->bindParam(':motedepasse', $hashedPassword);
       
       $resultUser = $stmt->execute();

//        if ($resultUser) {

//            $lastUserId = $this->conn->lastInsertId();
   
//            // Role insertion
//            $queryRole = "INSERT INTO `users_role`(`users_id`, `role_id`) VALUES (:users_id, 7)";
            
//            $stmtRole = $this->conn->prepare($queryRole);
//            $stmtRole->bindParam(':users_id',$lastUserId);
   
//            $resultRole = $stmtRole->execute();
   
//            if ($resultRole) {
               
//                return true;
//            } else {
//                echo "Error adding user role";
//            }
//        } else {
//            echo "Error adding user";
//        }
   
//        return false;
//    }

}

public function fetchUtilisateur(){

       $query = "SELECT * FROM `utilisateur`";

       $stmt = $this->conn->prepare($query);

       $stmt->execute();

       $rows = $stmt->fetchAll();

       return $rows;
   }
}

?>
