<?php

namespace Myapp\Controllers;
use Myapp\model\Categorie;
require __DIR__. "/../../vendor/autoload.php";



class CategoriesControllers{


public function showcategories(){


    $categories= Categorie::obtenirCategories();
    return $categories;
}

public function obtenirCategoriesid($id){

    $category = Categorie::obtenirCategoriesid($id);
    return $category;
}

public function ajoutercategories() {

    $name = $_POST['categorie_Nom'];
    $result = Categorie::AjouterCategorie($name);
    return $result;

    if($result) {
        echo ('add with success');
    } else {
        echo ('add failed');
    }
}

public function updatecategories()
{
    $idCategorie = $_POST['id'];
    $nouveauCatNom = $_POST['categorie_Nom'];
    $result = Categorie::updateCategorie($idCategorie,$nouveauCatNom); 
    if ($result) {
        echo "Category information updated!";
    } else {
        echo "Error updating category information.";
    }
}

}

if(isset($_POST['submit'])) {

    $categoryController = new CategoriesControllers();
    $result = $categoryController->ajoutercategories();
}

if (isset($_POST['update'])) {
    
    $CategoriesController = new CategoriesControllers();
    $result = $CategoriesController->updateCategories();
}

?>
