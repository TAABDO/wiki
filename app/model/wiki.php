<?php

namespace Myapp\model;
require __DIR__.'/../../vendor/autoload.php';
use Myapp\config\Database;

class Wiki
{
 
        public static function ajouterWiki($title, $contenu , $user_id , $category_id, $tags)
    {
        try {
            $conn=Database::connect();
    
            $categoryId = Categorie::obtenirCategoriesid($category_id);
    
            if (!$categoryId) {
                echo "Error: Category not found.";
                return false;
            }

            $requet = "INSERT INTO `wiki`(`titre`, `contenu`,`utilisateur_id`, `categorie_id`) VALUES (?,?,?,?)";
            $stmt = $conn->prepare($requet);
            $stmt->bindParam(1, $title);
            $stmt->bindParam(2, $contenu);
            $stmt->bindParam(3, $user_id);
            $stmt->bindParam(4, $category_id);

            $stmt->execute();
            $lastid = $conn->lastInsertId();
            self::ajouterTagspourWiki($lastid , $tags);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    
    public static function ajouterTagspourWiki($wikiId, $tags)
    {
        try {
            $conn=Database::connect();
    
            foreach ($tags as $tag) {
                $tagId = Tag::obtenirTagId($tag);
    
                if ($tagId !== null) {
                    $requet = "INSERT INTO `tag_wiki` (`wiki_id`, `tag_id`) VALUES (?, ?)";
                    $stmt = $conn->prepare($requet);
                    $stmt->bindParam(1, $wikiId);
                    $stmt->bindParam(2, $tagId);
                    $stmt->execute();
                } else {
                    echo "Error: Tag not found - $tag";
                }
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
    

        public static function obtenirtoutsWikis(){
            try{
                $conn=Database::connect();

                $requet = "SELECT * FROM `wiki` where statut = 'accepte' ";
                $stmt = $conn->prepare($requet);
                $stmt->execute();
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
    
            }
            catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
        public static function updateStatus($wikiId, $nouveauStatus)
        {
            try {
                $conn = Database::connect();
    
                $request = "UPDATE `wiki` SET `statut` = :newStatus WHERE `id` = :wikiId";
                $stmt = $conn->prepare($request);
                $stmt->bindParam(':newStatus', $nouveauStatus);
                $stmt->bindParam(':wikiId', $wikiId);
                $stmt->execute();
    
    
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
    
        public static function updateWiki($wikiId , $status){
            try{
                $conn=Database::connect();
                $requet = "UPDATE `wiki` SET `statut` = :statut WHERE `id` = :id";
                $stmt = $conn->prepare($requet);
                $stmt->bindParam(':statut', $statut);
                $stmt->bindParam(':id', $wikiId);
                $stmt->execute();
            }
            catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
    
       
}


    
