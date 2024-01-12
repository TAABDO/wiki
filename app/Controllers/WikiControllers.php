<?php
namespace Myapp\Controllers;
use Myapp\model\Wiki;
require __DIR__. "/../../vendor/autoload.php";

session_start();

class WikiControllers{

    public function showwikis(){
        
        $wikis = Wiki::obtenirtoutsWikis();
        return $wikis;
    }


       public function ajouterwiki()
       {
        $title = $_POST['title'];
        $contenu = $_POST['contenu'];
        $category_id = $_POST['categorie'];
        $tags = $_POST['tags'];
        $user_id =  $_SESSION['user']['id'];


        $result = Wiki::ajouterWiki($title, $contenu , $user_id , $category_id, $tags);

        if ($result) {
            echo 'Successfully added wiki.';
        } else {
            echo 'Failed to add wiki.';
        }
    }

    public function editwiki($wikiId){
        $wiki = Wiki::getWikisById($wikiId);
        // Render the edit wiki form view
        include 'edit_wiki.php';
    }
    
    public function deletewiki($wikiId){
        Wiki::deleteWiki($wikiId);
        header('Location: wiki.php');
        exit();
    }
}

if(isset($_POST['submit'])){

    $WikiControllers=new WikiControllers();
     $newwiki= $WikiControllers->ajouterwiki();

   if($newwiki){

    echo 'sussefuly';

    header('Location: wiki.php');
   }else{
    echo 'dfghjkl';
   }

} 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateStatus'])) {
    $wikiId = $_POST['wikiId'];
    $nouveauStatus = $_POST['newStatus'];
  
    $result=Wiki::updateStatus($wikiId, $nouveauStatus);


    if($result){

        header('Location:dashboard.php');

    }
  
  }
  

