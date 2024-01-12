<?php
use Myapp\Controllers\WikiControllers;
use Myapp\Controllers\CategoriesControllers;
use Myapp\Controllers\TagControllers;

require 'vendor/autoload.php';

$WikiControllers= new WikiControllers();
$wiki= $WikiControllers->showwikis();


$CategoriesControllers= new CategoriesControllers();
$caty= $CategoriesControllers->showcategories();

$tagController = new TagControllers();
$tags = $tagController->showTags();


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../public/css/annonce.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
         <link rel="stylesheet"href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
         
        <script src="https://cdn.tailwindcss.com"></script>

    <title>WIKIHOME</title>
</head>
<style>
    .search{
    position: relative;
    width: 300px;
    border: none;
    border-radius: 15px;
    height: 45px;
    padding-left:10px;
}
body{
    background:rgb(230 230 230);
}
</style>
<body >

<!-- =================================== header/navbar ============================== -->
   


<nav  class="dark:bg-gray-800 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">WIKI</span>
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="/ImmoConnect/public/image/7O2A0316.JPG" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="viewChat" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Chat</a>

          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md: dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<!-- ================================= first View ========================= -->


<div class="flex flex-row bg-gray pb-20 justify-evenly items-center mt-10 md: relative">
<img style="width:48rem;height:24rem" class="pl-6 md:flex " src="public/image/background.png" />
<div style="background-color:rgba(30, 30, 30, 0.55)" class=" rounded-2xl h-52 w-96 flex flex-col space-y-5 md:right-8 w-8	">
  <h1 style="" class="relative text-white top-5 left-2">Welcome to wiki, the most trusted how-to site on the internet.</h1>
    <p class="text-white">What will you learn on wikiHow today?</p>
   <div class="head-left">
            <div class="search">
                <input type="text" placeholder="Search" class="search" id="searchInput" oninput="searchCards()">
                <div class="icon">
                    <i class='bx bx-search-alt'></i>
                </div>
            </div>
        </div>
</div>
</div>
<div class="overflow-x-auto">

<div class="container mx-auto pt-20 text-center">
          <hr>
            <h2 class="text-4xl font-extrabold mb-4">Explore catigorie</h2>
            <!-- Add more content or links as needed -->
        </div>

<div class="flex flex-row justify-evenly ">
    <div>
<form method="get" action="">

    <table class="w-min text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                catigorie_nom 
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
	 
	 foreach($caty as $catis){
	?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4"><?php echo $catis['nom'] ?>
            </td>
            </tr>
            
      <?php
	    }
	     ?>
        </tbody>
    </table>
    </form>
</div>

<div class="bg-gray-300  pt-10 gap-10 w-96 h-64 rounded-3xl	">
<form action="">
<div>
<?php
	 foreach($caty as $catis){
	?>
                <button type="submit" class="bg-blue-500 gap-10 text-white py-2 px-4 rounded-md"><?php echo $catis['nom'] ?></button>
            
      <?php
	    }
	     ?>
</div>
</form>
</div>
</div>
    </div>
<!-- ============================= derniers wikis ============== -->




<div class="container mx-auto pb-20 text-center relative">
    <button type="submit" class="absolute left-10 bg-blue-500 text-white ml-0 py-2 px-4 rounded-md">
        <a href="view/dashboard/wikiview/ajouterwiki.php">ajouter Wiki + </a>
    </button>

    <h2 class="text-4xl font-extrabold mb-4">Explore Wikis</h2>
    <p class="text-lg">Discover a vast collection of wikis covering various topics. Dive into knowledge!</p>
    <!-- Add more content or links as needed -->
</div>

<div class="container mx-auto flex flex-wrap justify-center gap-4">
       <?php 
    foreach ($wiki as $wikis):
        ?>
        <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4 relative overflow-hidden">
            <div class="h-0 border-b-4 border-solid border-transparent absolute top-0 left-0 right-0"></div>
            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $wikis['titre']?></h3>
            <h5 class="font-normal text-gray-700 pb-10 dark:text-gray-400"><?php echo $wikis['contenu']?></h5>
            <button type="submit" class="bg-blue-500 gap-10 text-white py-2 px-4 rounded-md"><a href="categorie/update.php?id=<?php echo $wikis["id"] ?>">show more</button>

        </div>
    <?php endforeach; ?>
</div>



<br>


<!-- ================================= caty ==================================== -->



<!-- ======================================= FOOTER ============= -->


<!-- ======================================= FOOTER ============= -->
<footer class="relative bg-teal-900 pt-8 pb-6 mt-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-bold text-white">WIKI</h4>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-teal-700 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-3/12 px-4 ml-auto">
                            <span class="block uppercase text-white text-sm font-bold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-white font-semibold py-1">
                        Copyright © <span id="get-current-year">2023</span><a
                            href="https://www.creative-tim.com/product/notus-js"
                            class="tegratext-gray-500er:tteatext-teal-700" target="_blank"> ImmoConnect by
                            <a href="https://www.creative-tim.com?ref=njs-profile" class ="gratext-gray-500
                                hover:text-teal-700">To Be Or Not To Be</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

     <!-- Add this to the head of your HTML file -->

     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

     <!-- Add this to your HTML file where the form is located -->
   

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>