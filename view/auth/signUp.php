
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/ImmoConnect/public/css/tailwind.css" rel="stylesheet">
    <link href="../../public/css/sign_login.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <section class="img-background bg-blue-500 p-0 m-0">
    <div class=" pl-16 pt-20 ">
             <h1 class="text-5xl font-bold">WiKi</h1>
          </div>

        <div class="form-container max-w-sm mx-auto mt-1">
        <form id="signupForm" class="max-w-sm mx-auto" action="../../app/Controllers/AuthControllers.php" method="post">
                <h1 class="text-3xl text-white font-bold text-center">
                    Sign Up
                </h1>
                <p class="text-white font-sans text-center">Create your account for free</p>
                <div class="form-input mb-2 pt-5">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="nom" name="nom" required>
                    <span id="nomError" class="error-message"></span>
                </div>
                <div class="form-input mb-2 pt-2">
                    <label for="email">email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" name="email" required>
                    <span id="emailError" class="error-message"></span>
                </div>
                <div class="form-input mb-2 pt-2">
                   <label for="motdepass" class="">MotedePasse</label>
                    <input type="password" id="motdepass" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="password" name="motdepasse" required>
                    <span id="motdepassError" class="error-message"></span>
                </div>

                <div class="form-input mb-5 pt-2">
                <button type="submit" name='registerUser' class="text-white bg-green-700 hover:bg-green-800 ...">Submit</button>
                    <a href="signin" class=" text-black p-5">Already Have an account !!<span class="text-white hover:text-blue-500 p-1">Login</span></a>
                </div>
            </form>
        </div>
    </section>

</body>

<link href="../../public/js/sign_login.js" rel="stylesheet">

</html>