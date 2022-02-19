
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
    <h1 class="mt-8 mb-10 ml-10 text-6xl font-semibold text-black">SaS</h1>
        <!-- <div class="mx-4">
            
            <h2 class="mt-5 mb-12 text-5xl font-semibold text-center">Student Advising System</h2>
            <div class="grid grid-cols-2 gap-4 text-center">
                <div class="border-r border-r-red-900">
                    <h3 class="text-3xl font-bold text-red-700">
                        Student
                    </h3>
                    <p class="self-center mx-auto w-96">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dolor dicta ex maxime eum, ab quam officia tenetur porro obcaecati voluptate reiciendis dolores voluptatem facere saepe nisi qui, accusamus dolore.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dolor dicta ex maxime eum, ab quam officia tenetur porro obcaecati voluptate reiciendis dolores voluptatem facere saepe nisi qui, accusamus dolore.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dolor dicta ex maxime eum, ab quam officia tenetur porro obcaecati voluptate reiciendis dolores voluptatem facere saepe nisi qui, accusamus dolore.

                    </p>
                </div>    
                <div>
                    <h3 class="text-3xl font-bold text-red-700">
                        Faculty and Advisors
                    </h3>
                    <p class="self-center mx-auto w-96">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint perferendis illum necessitatibus, labore eum rem molestiae vel placeat accusantium ipsa minus, voluptates laborum reprehenderit quasi ad architecto molestias eveniet. Culpa!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dolor dicta ex maxime eum, ab quam officia tenetur porro obcaecati voluptate reiciendis dolores voluptatem facere saepe nisi qui, accusamus dolore.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dolor dicta ex maxime eum, ab quam officia tenetur porro obcaecati voluptate reiciendis dolores voluptatem facere saepe nisi qui, accusamus dolore.

                    </p>
                </div>            
                
            </div>
            <div class="mt-10 text-center">
                <a href="./view/student_view/home.php" class="px-10 py-3 text-white bg-red-900 rounded-full">Get started</a>
 
            </div>
        </div> -->

        <div class="flex px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px-4">
            <div class="pr-0 lg:w-3/6 lg:pr-0">
                <h1 class="text-5xl font-medium text-black">Sign up to </h1>
                <p class="mt-4 leading-relaxed text-black">
                    Ashesi Student Advising System</p>
            </div>
            <div class="flex flex-col w-full p-8 mt-10 rounded-md lg:w-3/6 xl:w-2/5 md:w-full bg-gray-50 lg:ml-auto lg:mt-0">
                <div class="relative mb-4">
                    <label for="full-name" class="text-sm leading-7 text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="text-sm leading-7 text-gray-600">Phone</label>
                    <input type="email" id="phone" name="phone" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="text-sm leading-7 text-gray-600">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200"> </textarea>
                </div>
                <button class="px-8 py-2 text-lg text-white bg-indigo-500 border-0 rounded-md focus:outline-none hover:bg-indigo-600">Submit</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>

