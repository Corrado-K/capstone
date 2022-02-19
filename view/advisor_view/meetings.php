<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="../../css/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../../img/logo.png">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <title>SaS Student Homepage</title>
</head>
<body>
<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
  <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-transparent dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 mt-12 flex flex-row items-center justify-between">
        <a href="./home.php" class="text-lg font-semibold tracking-widest text-white rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="../../img/logo.png" alt="" width="25%"></a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
        </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block mt-7 px-4 pb-4 md:pb-0 md:overflow-y-auto">
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./home.php">Home</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-gray-900 bg-white rounded-full dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./meetings.php">Meetings</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./faq.php">FAQ</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./advisor.php">Advisor</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./course.php">Course</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./settings.php">Settings</a>

        <div class="max-w-sm overflow-hidden shadow-lg mr-8 mt-20 rounded-[15px] h-[31.5vh] bg-gradient-to-r from-purple-500 to-pink-500">
            <div class="px-4 py-4">
                <div class="font-medium text-white text-sm mb-2">Launch zoom meeting</div>
                <p class="font-normal text-white text-xs">Create a zoom meeting now</p>
            </div>
            <div class="mt-20">
                <img src="#" alt="" srcset="" width="50%">
            </div>
            <div class="text-center">
              <button class="self-center mt-7 py-2 px-4 rounded-full bg-black text-white hover:bg-blue-600 active:bg-violet-600 focus:outline-none focus:ring focus:ring-violet-300" >
                <a href="<?php echo $_SESSION['start_zoom']; ?>">Start meeting</a>  
              </button>
            </div>
        </div>
    </nav>
  </div>
  <div class="container overflow-y-auto my-4 mx-auto md:-ml-9 md:mr-5 rounded-[30px] p-5 bg-white h-[95 vh]">
    <h4 class="p-10 pb-5 text-2xl">Upcoming</h4>
    <div class="bg-white overflow-x flex flex-row px-10">
      <div class="bg-gray-300 text-black rounded-md overflow-x flex flex-row w-[100%]">
        <p class="p-5 font-normal text-lg"><i data-feather="alert-circle"></i>No upcoming meetings</p>
 
      </div>
      
    </div> 
    <h4 class="p-10  text-2xl">Goals</h4>
    <div class="bg-white overflow-x flex flex-row px-10">
      
      
    </div> 

  </div>
</div>

<script>
    feather.replace()
</script>

</body>
</html>






