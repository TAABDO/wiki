<?php 

use Myapp\controllers\CategoriesControllers;

require __DIR__.'/../../../vendor/autoload.php';

$CategoriesControllers= new CategoriesControllers();
$currentCategory= $CategoriesControllers->obtenirCategoriesid($_GET['id']);
echo "<pre>";
var_dump($currentCategory);
echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateCategories</title>
   
    <link rel="stylesheet" href="../../../public/Dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	
</head>

<body class="bg-gray-100">

<div class="container mx-auto p-8 bg-white shadow-lg rounded-md mt-16">

    <div class="flex justify-between items-center mb-8">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <h1 class="text-3xl font-bold">Good Morning!</h1>
            <p>Here's what's happening with your store today.</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 btns">
        <button class="bg-blue-500 text-white py-2 px-4 rounded-md"><a href="../dashboard_Admin.php"> &lt; Go Back </a></button>
        </div>
    </div>
<div>

<form class="max-w-md mx-auto" action="../../../app/Controllers/CategoriesControllers.php" method="post">
    <div class="mb-4">
        <label for="categorie_Nom" class="text-black block">Categorie Nom</label>
        <input type="hidden" name="id" value="<?php echo $currentCategory['id']; ?>" class="form-input w-full h-10" id="categorie_Nom">
        <input type="text" name="categorie_Nom" value="<?php echo $currentCategory['nom']; ?>" class="form-input w-full h-10" id="categorie_Nom">
    </div>
    <button type="submit" name="update" class="bg-green-500 text-white py-2 px-4 rounded-md">Save</button>
</form>


</div>

</body>
</html>


  