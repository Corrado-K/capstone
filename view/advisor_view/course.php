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
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <title>SaS Student Homepage</title>
</head>
<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+3),
	tr th:nth-child(n+3) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
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
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./meetings.php">Meetings</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./faq.php">FAQ</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-white bg-transparent rounded-full dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./advisor.php">Advisor</a>
        <a class="block px-4 py-3 mt-[0.2px] text-sm font-semibold text-gray-900 bg-white rounded-full dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./course.php">Course</a>
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
  <div class="container overflow-y-auto my-4 md:-ml-9 md:mr-5 rounded-[30px] p-5 bg-white h-[95 vh]">

  <div class="grid grid-cols-2 gap-4">
    <div class="p-10 w-full">
      <!-- beginning of file manager -->
      <div class="sm:max-w-lg w-full p-10 bg-gray-200 rounded-xl z-10">
        <div class="text-left">
          <h2 class="mt-5 text-3xl font-bold text-gray-900">
            Files uploaded
          </h2>
          <p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
        </div>
        <table class="table text-gray-800 border-separate space-y-6 text-sm">
          <thead class="bg-gray-100 text-gray-800">
            <tr>
              <th class="p-3">File</th>
              <th class="p-3 text-left">Size</th>
              <th class="p-3 text-left"></th>
              
            </tr>
          </thead>
          <tbody>
            <tr class="bg-gray-100">
              <td class="p-3">
                <div class="flex align-items-left">
                  <img class="rounded-full h-12 w-12 object-cover" src="../../img/file-regular.svg" alt="unsplash image">
                  <div class="ml-3">
                    <div class="">Apple</div>
                    <div class="text-gray-800">mail@rgmail.com</div>
                  </div>
                </div>
              </td>
              <td class="p-3">
                2MB
              </td>
              
              
              <td class="p-3 ">
                <a href="#" class=" text-gray-400 hover:text-gray-100 mr-2">
                  <i class="material-icons-outlined text-base">visibility</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                  <i class="material-icons-outlined text-base">edit</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                  <i class="material-icons-round text-base">delete_outline</i>
                </a>
              </td>
            </tr>
            <tr class="bg-gray-100">
              <td class="p-3">
                <div class="flex align-items-center">
                  <img class="rounded-full h-12 w-12 object-cover" src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="unsplash image">
                  <div class="ml-3">
                    <div class="">Realme</div>
                    <div class="text-gray-500">mail@rgmail.com</div>
                  </div>
                </div>
              </td>
              <td class="p-3">
                2MB
              </td>
              
              <td class="p-3">
                <a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
                  <i class="material-icons-outlined text-base">visibility</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                  <i class="material-icons-outlined text-base">edit</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                  <i class="material-icons-round text-base">delete_outline</i>
                </a>
              </td>
            </tr>
            <tr class="bg-gray-100">
              <td class="p-3">
                <div class="flex align-items-center">
                  <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                  <div class="ml-3">
                    <div class="">Samsung</div>
                    <div class="text-gray-500">mail@rgmail.com</div>
                  </div>
                </div>
              </td>
              <td class="p-3">
                2MB
              </td>
              
              
              <td class="p-3">
                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                  <i class="material-icons-outlined text-base">visibility</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                  <i class="material-icons-outlined text-base">edit</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                  <i class="material-icons-round text-base">delete_outline</i>
                </a>
              </td>
            </tr>
          </tbody>
			  </table>
        
      </div>
      <!-- end of file manager -->
    </div>

    <div class="p-10">
      <!-- Beginning of form -->
      <div class="sm:max-w-lg w-full p-10 bg-gray-200 rounded-xl z-10">
        <div class="text-center">
          <h2 class="mt-5 text-3xl font-bold text-gray-900">
            File Upload!
          </h2>
          <p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
        </div>
        <form class="mt-8 space-y-3" action="#" method="POST">
            <div class="grid grid-cols-1 space-y-2">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Purpose</label>
                    <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="" placeholder="File purpose">
            </div>
            <div class="grid grid-cols-1 space-y-2">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col rounded-lg border-4 border-dashed bg-white w-full h-60 p-10 group text-center">
                        <div class="h-full w-full text-center flex flex-col justify-center items-center  ">
                            <!---<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>-->
                            <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                            <img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
                            </div>
                            <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
                        </div>
                        <input type="file" class="hidden">
                    </label>
                </div>
            </div>
                    <p class="text-sm text-gray-500">
                        <span>File type: doc,pdf,types of images</span>
                    </p>
            <div>
                <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                            font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                Upload
            </button>
            </div>
        </form>
      </div>
      <!-- End of form -->
    </div>
  </div>






    <!-- <h4 class="p-10 font-bold text-2xl">Completed</h4>
    <div class="bg-white overflow-x flex flex-row px-10">

      
    </div> 
    <h4 class="p-10 font-bold text-2xl">Academic Resources</h4>
    <div class="bg-white overflow-x flex flex-row px-10">
      
    
      
    </div>  -->

  </div>
</div>

<script>
    feather.replace()
</script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


</body>
</html>


