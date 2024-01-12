<?php
require __DIR__.'/../../../vendor/autoload.php';
use Myapp\Controllers\WikiControllers;
use Myapp\Controllers\CategoriesControllers;
use Myapp\Controllers\TagControllers;

session_start();
$WikiControllers= new WikiControllers();
$wiki= $WikiControllers->showwikis();


$CategoriesControllers= new CategoriesControllers();
$category= $CategoriesControllers->showcategories();

$tagController = new TagControllers();
$tags = $tagController->showTags();


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
<h2 class="text-2xl font-bold mt-8 mb-4">Ajouter Wiki</h2>

<form class="max-w-md mx-auto" action="../../../app/Controllers/WikiControllers.php" method="post">

    <div class="mb-4">
                <label for="title" class="text-black block">Title</label>
                <input type="text" name="title" class="form-input w-full h-10" required>
            </div>
            <div class="mb-4">
                <label for="contenu" class="text-black block">contenu</label>
                <input type="text" name="contenu" class="form-input w-full h-10" required>
            </div>
            
            <div class="form-group">
                                    <select name="categorie" id="tag_Nom">
                                        <option value="option1" default>Choose your category</option>
                                        <?php foreach ($category as $ctg): ?>
                                            <option value="<?= $ctg['id'] ?>">
                                                <?= $ctg['nom'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

            <div class="form-group">
            <div class="tag-container" id="tag-container"></div>
            <label for="tags">Choose Your Tags</label>
            <select name="tags[]" id="tags" multiple class="select2">
                                        <option value="option1" default>Choose your Tags</option>
                                        <?php foreach ($tags as $tg): ?>
                                            <option value="<?= $tg['id'] ?>">
                                                <?= $tg['nom'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
            <button type="submit" name="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Add Wiki</button>

        
    </div>
</form>



</div>

</body>
</html>


  