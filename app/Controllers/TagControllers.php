<?php

namespace Myapp\Controllers;

use Myapp\model\Tag;
require __DIR__. "/../../vendor/autoload.php";

class TagControllers
{
    public function showTags()
    {
        $tags = Tag::getAllTags();
        return $tags;
    }

    public function ajoutertag() {

        $tag = $_POST['tag_Nom'];
        $result = Tag::ajouterTag($tag);
        return $result;
    
        if($result) {
            echo ('add with success');
        } else {
            echo ('add failed');
        }
    }
    public function obtenirTagid($id){

        $tag = Tag::obtenirTagId($id);
        return $tag;
    }
    public function updatetag()
    {   
        $tagId = $_POST['id'];
        $nouveauTagNom = $_POST['tag_Nom'];
        $result = Tag::updateTag($tagId, $nouveauTagNom);
        return $result;
    }

    // public function deleteTag($tagId)
    // {
    //     $result = Tag::deleteTag($tagId);
    //     return $result;
    // }
}
if (isset($_POST['update'])) {
    
    $tagController = new TagControllers();
    $result = $tagController->updatetag();
}

if (isset($_POST['submit'])){
    $tagController = new TagControllers();
    $result = $tagController->ajoutertag();
}