<?php

namespace Myapp\model;

use Myapp\config\Database;
require_once __DIR__ . "/../../vendor/autoload.php";



class Tag
{
    public static function obtenirTagparName($Nomtag)
    {
        try {
            $conn=Database::connect();
            $requet = "SELECT id FROM `tag` WHERE nom = :nom";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(1, $tagName);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result ? $result['id'] : null;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function obtenirTagId($tagid)
    {
        try {
            $conn=Database::connect();
            $requet = "SELECT id FROM `tag` WHERE `id` = :id";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(':id', $tagid);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result ? $result['id'] : null;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
    

    public static function ajouterTag($tag){
        try{
            $conn=Database::connect();

            $requet = "INSERT INTO `tag` (`nom`) VALUES (:nom)";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(':nom',$tag);
            $stmt->execute();
    
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function getAllTags(){
        try{
            $conn=Database::connect();
            $requet = "SELECT * FROM `tag`";
            $stmt = $conn->prepare($requet);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
    
    

    public static function updateTag($tagId, $nouveauTagNom)
{
    try {
        $conn = Database::connect();

        $requet = "UPDATE `tag` SET `nom` = :nom WHERE `id` = :id";
        $stmt = $conn->prepare($requet);
        $stmt->bindParam(':nom', $nouveauTagNom);
        $stmt->bindParam(':id', $tagId);
        $result = $stmt->execute();

        return $result;
    } catch (\PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}
}