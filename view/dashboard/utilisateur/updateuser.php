<?php 

use Myapp\controllers\UserControllers;

require __DIR__.'/../../../vendor/autoload.php';

$userControllers= new UserControllers();
$currentUser= $userControllers->obteniruserid($_GET['id']);
echo "<pre>";
var_dump($currentUser);
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
        <input type="hidden" name="id" value="<?php echo $currentCategory['id']; ?>" class="form-input w-full h-10" id="id">
        <input type="text" name="nom" value="<?php echo $currentCategory['nom']; ?>" class="form-input w-full h-10" id="nom">
        <label for="categorie_Nom" class="text-black block">email</label>
        <input type="text" name="email" value="<?php echo $currentCategory['email']; ?>" class="form-input w-full h-10" id="email">
        <label for="categorie_Nom" class="text-black block">statut</label>
        <input type="text" name="statut" value="<?php echo $currentCategory['statut']; ?>" class="form-input w-full h-10" id="statut">
        <label for="categorie_Nom" class="text-black block">role</label>
        <input type="text" name="role" value="<?php echo $currentCategory['role']; ?>" class="form-input w-full h-10" id="role">

    </div>
    <button type="submit" name="submit" class="bg-green-500 text-white py-2 px-4 rounded-md">Save</button>
</form>


</div>

</body>
</html>


  