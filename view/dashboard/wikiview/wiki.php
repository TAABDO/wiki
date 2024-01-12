<!-- wiki_crud.php -->

<?php
use Myapp\Controllers\WikiControllers;

require __DIR__.'/../../../vendor/autoload.php';

$wikiController = new WikiControllers();
$wikis = $wikiController->showwikis();

var_dump($wikis);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki CRUD</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

</head>
<body class="bg-gray-100">

<div class="container mx-auto p-8 bg-white shadow-lg rounded-md mt-16">

    <h1 class="text-3xl font-bold mb-8">Wiki CRUD</h1>

    <!-- Display Wikis -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold mb-4">All Wikis</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                <th scope="col" class="px-6 py-3" >User_id</th>
                <th scope="col" class="px-6 py-3">titre</th>
                <th scope="col" class="px-6 py-3">contenu</th>
                <th scope="col" class="px-6 py-3">statut</th>
                <th scope="col" class="px-6 py-3">utilisateur_id</th>
                <th scope="col" class="px-6 py-3">categorie_id</th>
                <th scope="col" class="px-6 py-3">Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wikis as $wiki): ?>
                    <tr>
                    <td class="px-6 py-4"><?php echo $wiki['id'] ?></td>
                    <td class="px-6 py-4"><?php echo $wiki['titre']?></td>
                    <td class="px-6 py-4"><?php echo $wiki['contenu']?></td>
                    <td class="px-6 py-4"><?php echo $wiki['statut']?></td>
                    <td class="px-6 py-4"><?php echo $wiki['utilisateur_id']?></td>
                    <td class="px-6 py-4"><?php echo $wiki['categorie_id']?></td>
                        <!-- Add more columns based on your Wiki model -->
                        <td class="py-2 px-4 border-b">
                            <a href="edit_wiki.php?id=<?php echo $wiki['id']; ?>" class="text-blue-500">Edit</a>
                            <a href="delete_wiki.php?id=<?php echo $wiki['id']; ?>" class="text-red-500 ml-2">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Add Wiki Form -->
    <div>
        <h2 class="text-2xl font-bold mb-4">Add New Wiki</h2>
        <form action="wiki.php" method="post">
            <!-- Add your form fields based on your Wiki model -->
            <div class="mb-4">
                <label for="title" class="text-black block">Title</label>
                <input type="text" name="title" class="form-input w-full h-10" required>
            </div>
            <div class="mb-4">
                <label for="category" class="text-black block">contenu</label>
                <input type="text" name="category" class="form-input w-full h-10" required>
            </div>
            <div class="mb-4">
                <label for="description" class="text-black block">statut</label>
                <textarea name="description" class="form-input w-full" required></textarea>
            </div>
            
            <div class="mb-4">
                <label for="description" class="text-black block">category</label>
                <textarea name="description" class="form-input w-full" required></textarea>
            </div>
            <button type="submit" name="ajouterwiki" class="bg-blue-500 text-white py-2 px-4 rounded-md">Add Wiki</button>
        </form>
    </div>

</div>

</body>
</html>
