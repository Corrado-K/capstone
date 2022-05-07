
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./css/output.css" rel="stylesheet">
    <link rel="icon" href="./img/logo.png">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <title>SaS Student Homepage</title>
</head>
<body class="bg-white">
<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="w-full h-screen bg-center bg-no-repeat bg-cover ">
    <div class="w-full h-screen bg-opacity-50">
        <div class="mx-4 ">
        <img class="mx-auto w-48 mt-8 mb-8" src="./login/assets/img/ashesiLogo1.png" alt="">
            <!-- <h1 class="font-semibold text-black text-6xl ml-10 mb-15 mt-8">SaS</h1> -->
            <h2 class="font-semibold text-5xl text-center mt-5 mb-12">Student Advising System</h2>
            <div class="grid grid-cols-2 gap-4 text-center">
                <div class="border-r border-r-red-900">
                    <h3 class="text-3xl font-bold text-red-700">
                        Student
                    </h3>
                    <p class="self-center text-justify mx-auto w-96">
                        Student who wish to have access to information
                       
                    </p>
                </div>    
                <div>
                    <h3 class="text-3xl font-bold text-red-700">
                        Advisors
                    </h3>
                    <p class="self-center text-justify mx-auto w-96">
                        The Academic Advisor 
                    </p>
                </div>            
                
            </div>
            <div class="text-center absolute inset-x-5 bottom-32 mb-0">
                <a href="./login/login.html" class="rounded-full text-white bg-red-900 px-10 py-3">Get started</a>
 
            </div>
        </div>
    </div>
</div>

</body>
</html>

