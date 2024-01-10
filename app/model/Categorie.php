<?php



class Categorie
{

    public static function AjouterCategorie($Categorie){
        try{
            $conn=Database::connect();

            $requet = "INSERT INTO `Categorie` (`nom`) VALUES (:nom)";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(':nom',$Categorie);
            $stmt->execute();
    
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

    
    public static function updateCategory($idCategorie, $newCategoryName)
    {
        try {
            $conn=Database::connect();

            $requet = "UPDATE `Categorie` SET `nom` = :nom WHERE `id` = :id";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(':nom', $newCategoryName);
            $stmt->bindParam(':id', $idCategorie);
            $stmt->execute();
            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}