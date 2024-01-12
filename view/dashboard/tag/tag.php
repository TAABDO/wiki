<?php

use Myapp\Controllers\TagControllers;

require __DIR__.'/../../../vendor/autoload.php';

$tagController = new TagControllers();
$tags = $tagController->showTags();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
    <!-- Add your Tailwind CSS CDN or include it in your project -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-8">
    <!-- Display tags -->
    <h1 class="text-2xl font-bold mb-4">All Tags</h1>
    <ul class="list-disc pl-4">
        <?php foreach ($tags as $tag): ?>
            <li class="mb-2"><?php echo $tag['nom']; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Update form -->
    <h2 class="text-2xl font-bold mt-8 mb-4">Update Tag</h2>
    <form action="updateTag.php" method="post" class="mb-8">
        <div class="mb-4">
            <label for="tagId" class="block text-sm font-medium text-gray-600">Tag ID:</label>
            <input type="text" name="tagId" id="tagId" class="form-input mt-1 block w-full">
        </div>
        <div class="mb-4">
            <label for="newTagName" class="block text-sm font-medium text-gray-600">New Tag Name:</label>
            <input type="text" name="newTagName" id="newTagName" class="form-input mt-1 block w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Update Tag</button>
    </form>

    <!-- Delete form -->
    <h2 class="text-2xl font-bold mb-4">Delete Tag</h2>
    <form action="deleteTag.php" method="post">
        <div class="mb-4">
            <label for="tagId" class="block text-sm font-medium text-gray-600">Tag ID:</label>
            <input type="text" name="tagId" id="tagId" class="form-input mt-1 block w-full">
        </div>
        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md">Delete Tag</button>
    </form>
</div>

</body>
</html>
