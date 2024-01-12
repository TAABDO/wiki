<?php

namespace Myapp\model;

use Myapp\config\Database;
require_once __DIR__ . "/../../vendor/autoload.php";

class Categorie
{

    public static function AjouterCategorie($Categorie){
        try{
            $conn=Database::connect();

            $requet = "INSERT INTO `Categorie` (`nom`) VALUES (:nom)";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(':nom',$Categorie);
              $result= $stmt->execute();

             return $result;
    
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function obtenirCategories(){
        try{
            $conn=Database::connect();
            $requet = "SELECT * FROM `Categorie`";
            $stmt = $conn->prepare($requet);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function CategorieparNom($NomCategorie)
    {
        try {
            $conn=Database::connect();

            $requet = "SELECT `id` FROM `Categorie` WHERE `nom` = :nom";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(':nom', $NomCategorie);
            $stmt->execute();

            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($result) {
                return $result['id'];
            }

            return false;
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public static function obtenirCategoriesid($idCategorie)
    {
        try {
            $conn=Database::connect();

            $requet = "SELECT * FROM `Categorie` WHERE `id` = :id";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(':id', $idCategorie);
            $stmt->execute();

            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

                return $result;
            

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public static function updateCategorie($idCategorie, $nouveauCatNom)
{
    try {
        $conn = Database::connect();

        $requet = "UPDATE `Categorie` SET `nom` = :nom WHERE `id` = :id";
        $stmt = $conn->prepare($requet);
        $stmt->bindParam(':nom', $nouveauCatNom);
        $stmt->bindParam(':id', $idCategorie);
        $result = $stmt->execute();

        return $result;
    } catch (\PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

}