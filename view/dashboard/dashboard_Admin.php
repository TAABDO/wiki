 <?php

use Myapp\Controllers\UserControllers;
use Myapp\Controllers\WikiControllers;

require '../../vendor/autoload.php';
$UserControllers= new UserControllers();
$users= $UserControllers->show();
$WikiControllers= new WikiControllers();
$wiki= $WikiControllers->showwikis();


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
      .affichage{
      display: flex;
      flex-direction: column;
      justify-content: center;
      flex-wrap:wrap;
      gap: 1em;
      padding-top: 8em;
     

}
 .users{
  border: 7px solid #222222;
  border-radius: 10px;
  box-shadow: 10px 10px #bd9a9ae1;
  background-color:#fe7f32;
  font-style: #050505;
  width: 36em;

}

td ,th{
color: antiquewhite;
}
td:hover{
  background: #eeeeee;
  color: #222222;
}
    </style>
</head>
<body>


<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="flex ms-2 md:me-24">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">users</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Wiki</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Catigorie</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         
         
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               
               <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               
               <span class="flex-1 ms-3 whitespace-nowrap">Wiki</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               
               <span class="flex-1 ms-3 whitespace-nowrap">Catigorie</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Sign </span>
            </a>
         </li>
        
      </ul>
   </div>
</aside>


<div class="affichage pl-44 pt-44 items-center">

		<div class="users ">

	<form method="POST" action="../../app/Controllers/UserControllers.php">
    <table class="table">
    <thead >
      <tr class="flex flex-row justify-evenly	">		
        <th scope="col"class="User_id ">User_id</th>
        <th scope="col"class="Nom ">Nom</th>
        <th scope="col"class="email ">Email</th>
        <th scope="col"class="email ">role</th>
        <th scope="col"class="email ">Action</th>


      </tr>
    </thead>
    <tbody>

	<?php
	 
	 foreach($users as $user){
	?>
        <tr class="flex flex-row justify-around gap-10 ">		
        <td><?php echo $user['id'] ?></td>
        <td><?php echo $user['nom'] ?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo $user['nom']?></td>
        <td> 
			      <button type="submit" class=""><a href="update.php?id=<?php echo $row["id"] ?>">UpDate</a></button>
            <button type="submit" class=""><a href="delete.php?id=<?php echo $row["id"] ?>">delete</a></button>
        </td>

        </tr>
	  <?php
	  }
	  ?>

    </tbody>
  </table>
    </form>
</div>
<div class="users ">

	<form method="POST" action="../../app/Controllers/UserControllers.php">
    <table class="table">
    <thead >
      <tr class="flex flex-row justify-evenly	">		
        <th scope="col"class="User_id ">User_id</th>
        <th scope="col"class="Nom ">Nom</th>
        <th scope="col"class="email ">Email</th>
        <th scope="col"class="email ">role</th>
        <th scope="col"class="email ">Action</th>


      </tr>
    </thead>
    <tbody>

	<?php
	 
	 foreach($wiki as $wikis){
	?>
        <tr class="flex flex-row justify-around gap-10 ">		
        <td><?php echo $wikis['id'] ?></td>
        <td><?php echo $wikis['nom'] ?></td>
        <td><?php echo $wikis['titre']?></td>
        <td><?php echo $wikis['contenu']?></td>
        <td><?php echo $wikis['statut']?></td>
        <td><?php echo $wikis['utilisateur_id']?></td>
        <td><?php echo $wikis['categorie_id']?></td>

       
        <td> 
			      <button type="submit" class=""><a href="update.php?id=<?php echo $wikis["id"] ?>">UpDate</a></button>
        </td>

        </tr>
	  <?php
	  }
	  ?>

    </tbody>
  </table>
    </form>
</div>
	</div> 

</body>
</html>