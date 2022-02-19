<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../css/output.css" rel="stylesheet">
    <link rel="icon" href="../../img/logo.png">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <title>SaS Student Homepage</title>
</head>a
<body>
<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
  <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-transparent md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800" x-data="{ open: false }">
    <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4 mt-12">
        <a href="./home.php" class="text-lg font-semibold tracking-widest text-white rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="../../img/logo.png" alt="" width="25%"></a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
        </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block mt-7 md:pb-0 md:overflow-y-auto">
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./home.php">Home</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./meetings.php">Meetings</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-gray-900 bg-white rounded-full dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./faq.php">FAQ</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./advisor.php">Advisor</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./course.php">Shared files</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./settings.php">Settings</a>

        <div class="max-w-sm overflow-hidden shadow-lg mr-8 mt-20 rounded-[15px] h-[31.5vh] bg-gradient-to-r from-purple-500 to-pink-500">
            <div class="px-4 py-4">
                <div class="mb-2 text-sm font-medium text-white">Launch zoom meeting</div>
                <p class="text-xs font-normal text-white">Create a zoom meeting now</p>
            </div>
            <div class="mt-20">
                <img src="#" alt="" srcset="" width="50%">
            </div>
            <div class="text-center">
              <button class="self-center px-4 py-2 text-white bg-black rounded-full mt-7 hover:bg-blue-600 active:bg-violet-600 focus:outline-none focus:ring focus:ring-violet-300" >
                <a href="<?php echo $_SESSION['start_zoom']; ?>">Start meeting</a>  
              </button>
            </div>
        </div>
    </nav>
  </div>
  <div class="container my-4 mx-auto md:-ml-9 md:mr-5 rounded-[30px] p-5 bg-white h-[95 vh]">
    <span>
      <h4 class="p-5 text-2xl font-bold md:pl-10">Frequently Asked Questions (FAQ) <span class="lg:ml-[5%]"> <i data-feather="help-circle"></i></span></h4>
      <!-- <h3 class="p-5 text-2xl font-bold md:pr-10 text-right">POSE Question</h3> -->
    </span>
    
    <div class="relative w-full">
      <input class="h-10  px-5 pr-16 ml-10 text-sm bg-white border-2 border-gray-300 rounded-lg w-96 focus:outline-none"
        type="search" name="search" placeholder="Search">
      <button type="submit" class="-ml-10">
        <svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
          viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
          width="512px" height="512px">
          <path
            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
        </svg>
      </button>
      <!-- <br><br> -->

      <!-- <span class="text-right text-base font-normal ml-10">Your question isn't here? <a class="text-blue-900" href="">Ask question</a> </span> -->
    </div>
    
      
    
    <div class="flex flex-wrap lg:w-[93%] w-full lg:ml-10 sm:mx-auto sm:mb-2 ">
      <div class="w-full px-1 py-2">
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            How Long is this site live?
          </summary>

          <span>
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            Can I install/upload anything I want on there?
          </summary>

          <span>
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            How can I migrate to another site?
          </summary>

          <span>
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            How Long is this site live?
          </summary>

          <span>
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            Can I install/upload anything I want on there?
          </summary>

          <span>
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            How can I migrate to another site?
          </summary>

          <span>
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
      
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            Can I change the domain you give me?
          </summary>

          <span class="px-4 py-2">
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
        <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            How many sites I can create at once?
          </summary>

          <span class="px-4 py-2">
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details>
        <!-- <details class="mb-6">
          <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
            How can I communicate with you?
          </summary>

          <span class="px-4 py-2">
            Laboris qui labore cillum culpa in sunt quis sint veniam.
            Dolore ex aute deserunt esse ipsum elit aliqua. Aute quis
            minim velit nostrud pariatur culpa magna in aute.
          </span>
        </details> -->
      </div>
    </div>

  </div>
</div>

<script>
    feather.replace()
</script>

</body>
</html>






