<?php

use Myapp\controllers\CategoriesControllers;

require __DIR__.'/../../../vendor/autoload.php';

$CategoriesControllers= new CategoriesControllers();
$result= $CategoriesControllers->showcategories();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Catigorie</title>
</head>
<body>

<!-- ================================= caty ==================================== -->


<div class="users ">

<div class="relative overflow-x-auto">
<form method="get" action="">

    <table class="w-min text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                catigorie_id
                </th>
                <th scope="col" class="px-6 py-3">
                catigorie_nom 
                </th>
                <th scope="col" class="px-6 py-3">
                Action  
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
	 
	 foreach($result as $catis){
	?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4"><?php echo $catis['id'] ?></td>
                <td class="px-6 py-4"><?php echo $catis['nom'] ?></td>
        <td> 
            <button type="submit" class=""><a href="update.php?id=<?php echo $catis["id"] ?>">Update</a></button>
			      <button type="submit" class=""><a href="delete.php?id=<?php echo $catis["id"] ?>">delete</a></button>
        </td>

        </tr>
	  <?php
	  }
	  ?>

    </tbody>
  </table>
    </form>
</div>
    
</body>
</html>