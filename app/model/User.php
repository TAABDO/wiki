<?php


namespace Myapp\model;

use Myapp\config\Database;
require_once __DIR__ . "/../../vendor/autoload.php";



class User
{
    private $id;
    private $nom;
    private $email;
    private $motedepasse;
    private $role_id;
    private $conn;

    public function __construct($id, $nom, $email, $motedepasse ,$role_id)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->motedepasse = $motedepasse;
        $this->role_id=$role_id;

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
        $this->motedepasse = password_hash($motedepasse, PASSWORD_DEFAULT);
     }
     
    
    public function getRole_id()
    {
        return $this->role_id;
    }

    public function setRole_id($role_id)
    {
        $this->role_id = $role_id;
    }


    
    public static function signUp($nom, $email, $motedepasse, $role_id) {
        try {
            $conn=Database::connect();
            $hashedPassword = password_hash($motedepasse, PASSWORD_DEFAULT);

            $query = "INSERT INTO `utilisateur`(`nom`, `email`, `motedepasse`, `role_id`) VALUES (:nom, :email, :motedepasse, :role_id)";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':motedepasse', $hashedPassword);
            $stmt->bindParam(':role_id', $role_id);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }

        
    }
    

    public function findUserByEmail() {

            $conn = Database::connect();

            $query = "SELECT * FROM utilisateur WHERE `email` = :email ";
            $stmt = $conn->prepare($query);
            $stmt-> bindParam(':email',$this->email);
            $stmt-> execute();
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $row;
        }
         
    

public static function fetchUtilisateur(){

       $conn=Database::connect();

       $query = "SELECT u.id,u.nom,u.email,r.nom FROM utilisateur as u INNER JOIN role as r on u.role_id=r.id";

       $stmt = $conn->prepare($query);

       $stmt->execute();

       $rows = $stmt->fetchAll();

       return $rows;

   }

   public static function MisajourUtilisateur(){
    
    $conn=Database::connect();



   }
}
?>
