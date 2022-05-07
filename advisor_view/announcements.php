<?php
  include_once '../controller/announcement_controller.php';
  include '../settings/core.php';

  check_login();

  $announcements = select_all_announcements_controller();

  $number_of_result = number_of_announcements_controller();
  $results_per_page = 10;


  //determine the total number of pages available  
  $number_of_page = ceil ($number_of_result['count'] / $results_per_page);  

  //determine which page number visitor is currently on  

  if (!isset($_GET['page']) ) {  
    $page = 1;  
  } else {  
    $page = $_GET['page'];  
  }


  // onclick of page number... show => results from index results[(page_number*10)-10-1] to results[page_number*10] 


?>
<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Advising System - Announcements</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <script src="./assets/js/init-alpine.js"></script>
  <script src="./assets/js/focus-trap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Sweet Alert 2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div x-date="{ open: false }" class="flex h-screen bg-zinc-200" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-[#923] md:block flex-shrink-0">
      <div class="py-4 text-gray-500">
      <img class="mx-auto w-1/2 mb-4" src="./assets/img/ashesiLogo.png" alt="">
        <a class="mt-16 ml-6 text-lg font-bold text-white" href="#">
          Student Advising System
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-400"
              href="./home.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              <span class="ml-4">Home</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-400"
              href="./faq.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
              </svg>
              <span class="ml-4">FAQs</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-400"
              href="./announcements.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
              </svg>
              <span class="ml-4">Announcements</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-400"
                href="./shared_files.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">Shared files</span>
            </a>
          </li> 
          <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-400"
                  href="./courses.php">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path
                          d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                      </path>
                  </svg>
                  <span class="ml-4">Courses</span>
              </a>
          </li>
          <li class="relative px-6 py-3">
              <button
                  class="inline-flex items-center justify-between w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-400"
                  @click="togglePagesMenu" aria-haspopup="true">
                  <span class="inline-flex items-center">
                      <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path
                              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                          </path>
                      </svg>
                      <span class="ml-4">Student-Lecturer Pairing</span>
                  </span>
                  <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                  </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                  <ul x-transition:enter="transition-all ease-in-out duration-300"
                      x-transition:enter-start="opacity-25 max-h-0"
                      x-transition:enter-end="opacity-100 max-h-xl"
                      x-transition:leave="transition-all ease-in-out duration-300"
                      x-transition:leave-start="opacity-100 max-h-xl"
                      x-transition:leave-end="opacity-0 max-h-0"
                      class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                      aria-label="submenu">
                      <li
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                          <a class="w-full" href="./areas_of_interest.php">Areas of interest</a>
                      </li>
                      <li
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                          <a class="w-full" href="./lecturer_management.php"> Lecturer management</a>
                      </li>
                      <li
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                          <a class="w-full" href="./student_management.php">Student management</a>
                      </li>
                      <li
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                          <a class="w-full" href="./student_lecturer_pairing.php">Pairing and result simulator</a>
                      </li>
                  </ul>
              </template>
          </li>
        </ul>
        
      </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
      <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
        x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">
        <div class="py-4 text-gray-500">
          <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            Student Advising System
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                href="./home.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                  </path>
                </svg>
                <span class="ml-4">Home</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-400"
                href="./faq.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                  </path>
                </svg>
                <span class="ml-4">FAQs</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <span class="absolute inset-y-0 left-0 w-1 bg-[#923] rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                href="./announcements.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                  </path>
                </svg>
                <span class="ml-4">Annoucements</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                href="./shared_files.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">Shared Files</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                href="./courses.php">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                  </path>
                </svg>
                <span class="ml-4">Courses</span>
              </a>
            </li>
            <!-- <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                href="modals.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                  </path>
                </svg>
                <span class="ml-4">Modals</span>
              </a>
            </li> -->
            <!-- <li class="relative px-6 py-3">
              <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                href="tables.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4">Tables</span>
              </a>
            </li> -->
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                @click="togglePagesMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                    </path>
                  </svg>
                  <span class="ml-4">Student-Lecturer Pairing</span>
                </span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                  aria-label="submenu">
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                    <a class="w-full" href="./areas_of_interest.php">Areas of interest</a>
                  </li>
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                    <a class="w-full" href="./lecturer_management.php">
                      Lecturer management
                    </a>
                  </li>
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                    <a class="w-full" href="./student_management.php">
                      Student management
                    </a>
                  </li>
                  <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                    <a class="w-full" href="./student_lecturer_pairing.php">Pairing and result simulator</a>
                  </li>
                  <!-- <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-400">
                    <a class="w-full" href="pages/blank.html">Blank</a>
                  </li> -->
                </ul>
              </template>
            </li>
          </ul>
          
        </div>
      </aside>
      
      <div class="flex flex-col flex-1">
        <header class="z-10 py-4 bg-white shadow-md">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-[#923]">
            <!-- Mobile hamburger -->
            <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-red"
              @click="toggleSideMenu" aria-label="Menu">
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div class="relative w-full max-w-xl mr-6 focus-within:text-red-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-red-300 focus:outline-none focus:shadow-outline-red form-input"
                  type="text" placeholder="Search for projects" aria-label="Search" />
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Theme toggler -->
              <li class="flex">
                <button class="rounded-md focus:outline-none focus:shadow-outline-red" @click="toggleTheme"
                  aria-label="Toggle color mode">
                  <template x-if="!dark">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                  </template>
                </button>
              </li>
              <!-- Notifications menu -->
              
              <!-- Profile menu -->
              <li class="relative">
                <button class="align-middle rounded-full focus:shadow-outline-red focus:outline-none"
                  @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                  <img class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                    alt="" aria-hidden="true" />
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                    aria-label="submenu">
                    <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-400"
                        href="#">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-400"
                        href="#">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                          </path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-400"
                        href="../action/logout_action.php?logout=<?php echo $_SESSION['user_id'];?>">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                          </path>
                        </svg>
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-12 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
              Announcements
            </h2>
          
            <!-- Card -->
            <div class="flex items-center p-4 mb-4 bg-white border-solid border-1 border-black rounded-lg shadow-xs">
              
              <div class="mx-auto text-center">
                <p class="mb-2 text-xl font-medium text-gray-600">
                  Admin Announcement Page
                </p>
                <p class="font-semibold text-center text-gray-700 text-md">
                  Take over and be in control of the announcement content students receive.
                </p>
              </div>
            </div>

            <!-- General elements -->
            <div class="h-full px-4 py-3 mb-3 mb-8 bg-white rounded-lg shadow-md">
              <h2 class="my-3 text-center text-2xl font-semibold text-gray-700">
                Add an announcement
              </h2>
              <form action="../action/announcement_action.php" method="post" enctype="multipart/form-data">
                <label class="block text-sm">
                  <span class="text-gray-700">Subject</span>
                  <input
                    class="block w-full mt-1 text-sm border-gray-200 rounded-full focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
                    placeholder="Jane Doe"
                    name="subject" />
                </label>

                <label class="block mt-4 text-sm">
                  <span class="text-gray-700">
                    Files
                  </span>
                  <input
                    class="block w-full mt-1 text-sm border-gray-200 rounded-full focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100"
                    type="file"
                    name="uploaded_file"
                    id="uploaded_file"
                    placeholder="Jane Doe" />
                </label>


                <label class="block mt-4 text-sm">
                  <span class="text-gray-700">Message</span>
                  <textarea
                    class="block w-full mt-1 text-sm border-gray-200 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red rounded-2xl"
                    rows="3" name="desc" placeholder="Enter announcement"></textarea>
                </label>
                <button name="add_announcement" class="px-4 mt-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#923] border border-transparent rounded-lg active:bg-[#923] hover:bg-[#923] focus:outline-none focus:shadow-outline-[#923] rounded-full">
                    Submit
                </button>
              </form>
              
            </div>
            
            
            <div class="w-full mt-16 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-12 py-3">Subject</th>
                        <th class="px-4 py-3">Message</th>
                        <th class="px-4 py-3">File</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                      <?php if ($announcements) {
                        
                          for ($i=((int)$page*10)-(10); $i < (int)$page*10 && $i < $number_of_result['count']; $i++) { 
                            echo '
                            <tr class="text-gray-700">
                              <td class="hidden">' .$announcements[$i]['announcement_id'] .'</td>
                              <td class="px-4 py-3"><p class="font-semibold">'.$announcements[$i]['announcement_subject'] .'</p></td>
                              <td class="hidden">' .$announcements[$i]['announcement_message'] .'</td>
                              <td class="px-4 py-3 text-sm">';
                              if(strlen($announcements[$i]['announcement_message']) > 50){
                                echo substr($announcements[$i]['announcement_message'], 0, 50). '...';
                              }else {
                                echo $announcements[$i]['announcement_message'];
                              }
                              echo '</td>
                              <td class="px-4 py-3 text-xs">';
                              if ($announcements[$i]['attached_file'] == null) {
                                echo'
                              <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">
                                  No file
                              </span>';
                              }else{
                                echo'
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full ">
                                    File attached
                                </span>';
                              }
                              
                              echo'
                              </td>
                              <td class="px-4 py-3 text-sm">' .
                                  $announcements[$i]['date'] .
                                  '</td>
                                  <td class="px-4 py-3 flex">
                                  <button class="outline-none ml-8 editbtn" @click="openModal('.'editmodal'.')" data-modal-toggle="editmodal">
                                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M11.4922 2.789H7.75324C4.67824 2.789 2.75024 4.966 2.75024 8.048V16.362C2.75024 19.444 4.66924 21.621 7.75324 21.621H16.5772C19.6622 21.621 21.5812 19.444 21.5812 16.362V12.334" stroke="#2885C4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82763 10.9209L16.3006 3.44793C17.2316 2.51793 18.7406 2.51793 19.6716 3.44793L20.8886 4.66493C21.8196 5.59593 21.8196 7.10593 20.8886 8.03593L13.3796 15.5449C12.9726 15.9519 12.4206 16.1809 11.8446 16.1809H8.09863L8.19263 12.4009C8.20663 11.8449 8.43363 11.3149 8.82763 10.9209Z" stroke="#2885C4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15.165 4.60254L19.731 9.16854" stroke="#2885C4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  </button>
                                  <button class="outline-none ml-8 deletebtn">
                                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M19.325 9.4682C19.325 9.4682 18.782 16.2032 18.467 19.0402C18.317 20.3952 17.48 21.1892 16.109 21.2142C13.5 21.2612 10.888 21.2642 8.28003 21.2092C6.96103 21.1822 6.13803 20.3782 5.99103 19.0472C5.67403 16.1852 5.13403 9.4682 5.13403 9.4682" stroke="#D02B2B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M20.7082 6.23969H3.75024" stroke="#D02B2B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M17.4406 6.23967C16.6556 6.23967 15.9796 5.68467 15.8256 4.91567L15.5826 3.69967C15.4326 3.13867 14.9246 2.75067 14.3456 2.75067H10.1126C9.53358 2.75067 9.02558 3.13867 8.87558 3.69967L8.63258 4.91567C8.47858 5.68467 7.80258 6.23967 7.01758 6.23967" stroke="#D02B2B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  </button>
                                  
                              </td>
                            </tr>
                            ';
                          }
                        
                        
                      } else {
                          echo '
                            <tr class="text-gray-700">
                              <td></td>
                              <td class="text-center">
                                <div>
                                  <p class="font-semibold">No announcement available</p>
                                </div>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>';
                      } ?>
                        
                    </tbody>
                </table>
              </div>
              <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9">
                <span class="flex items-center col-span-3">
                    Showing <?php echo ($page*10)-(10-1)?> - <?php if($page*10 < $number_of_result['count']){echo $page*10;}else{echo $number_of_result['count'];} ?> of <?php echo $number_of_result['count'];?>
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">

                      <?php 
                        if ($page-1 != 0 ) {
                          echo '<li>
                            <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-red"
                              aria-label="Previous"><a href="./announcements.php?page='.$page-1 .'">
                              <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                  clip-rule="evenodd" fill-rule="evenodd"></path>
                              </svg>
                              </a>
                          </button>
                          </li>';

                        }else{
                          echo '<li>
                            <button disabled="disabled" class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-red"
                              aria-label="Previous">
                              <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                  clip-rule="evenodd" fill-rule="evenodd"></path>
                              </svg>
                          </button>
                          </li>';
                        }
                      ?>
                        
                        <?php 
                          for ($i=1; $i <= $number_of_page; $i++) { 
                            echo '<li>
                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                                      <a href="./announcements.php?page='.$i.'">'.$i.'</a>
                                        
                                    </button>
                                  </li>';
                          }
                        ?>
                        
                        <?php 
                        if ($page+1 <= $number_of_page ) {
                          echo '<li>
                          <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-red"
                              aria-label="Next">
                              <a href="./announcements.php?page='.$page+1 .'">
                              <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" fill-rule="evenodd"></path>
                              </svg>
                              </a>
                          </button>
                        </li> ';

                        }else{
                          echo '<li>
                          <button disabled="disabled" class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-red"
                              aria-label="Next">
                              <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" fill-rule="evenodd"></path>
                              </svg>
                              
                          </button>
                        </li> ';
                        }
                      ?>
                    </ul>
                    </nav>
                </span>
              </div>
            </div>

            
            
          </div>
        </main>
      </div>
  </div>



  <script>

    $(document).ready(function(){
        $('.editbtn').on('click',function(){
            $('#editModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();

            $('#id').val(data[0]);
            $('#subject').val(data[1]);
            $('#desc').val(data[2]);

        });
    });

    

    $(document).ready(function(){
        $('.deletebtn').on('click',function(){
          $tr = $(this).closest('tr');
          var data = $tr.children('td').map(function(){
              return $(this).text();
          }).get();

          $('#ann_id').val(data[0]);
          $('#ann_subject').text(data[1]);

          var subject =  data[1];
          var id =  data[0]

          Swal.fire({
            title: `Are you sure you want to delete "${subject}"?`,
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              // ajax post request to php to perform delete function
              $.ajax({
                type:"POST",
                url: '../action/announcement_action.php',
                data: {
                  delete_announcement:true,
                  ann_id: id
                },
                success: function(data){
                  console.log(data);
                  Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                  ).then((result) => {
                    if(result.isConfirmed){
                      setTimeout(location.reload(), 5000);
                    }
                  })
                },
                error: function(xhr, status, error){
                  console.error(xhr);
                  Swal.fire(
                    'Not deleted!',
                    'Your file has been deleted.',
                    'success'
                  )
                }
              })
            
            }
          })

        });
    });
  </script>

  <!-- EDIT  MODAL -->

  <!-- Modal backdrop. This what you want to place close to the closing body tag -->
  <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
      @keydown.escape="closeModal"
      class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg sm:rounded-lg sm:m-4 sm:max-w-xl"
      role="dialog" id="editmodal">
      <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
      <header class="flex justify-end">
        <button
          class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded hover: hover:text-gray-700"
          aria-label="close" @click="closeModal">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
            <path
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </header>
      <!-- Modal body -->
      <div class="mt-4 mb-6">
        <!-- Modal title -->
        <p class="mb-2 text-xl text-center font-semibold text-gray-700 ">
          Edit announcement
        </p>
        <!-- Modal description -->
        <form action="../action/announcement_action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="id">
          <label class="block text-sm">
            <span class="text-gray-700">Subject</span>
            <input
              class="block w-full mt-1 text-sm border-gray-200 rounded-full focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
              placeholder="Enter subject"
              name="subject" id="subject" />
          </label>


          <label class="block mt-4 text-sm">
            <span class="text-gray-700">Message</span>
            <textarea
              class="block w-full mt-1 text-sm border-gray-200 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red rounded-2xl"
              rows="8" name="desc" id="desc" placeholder="Enter announcement" ></textarea>
          </label>
          <button name="edit_announcement" class="px-4 mt-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#923] border border-transparent rounded-lg active:bg-[#923] hover:bg-[#923] focus:outline-none focus:shadow-outline-[#923] rounded-full">
              Submit
          </button>
        </form>
      </div>
      <footer
        class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50">
        <button @click="closeModal"
          class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
          Cancel
        </button>
        <!-- <button
          class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
          Accept
        </button> -->
      </footer>
    </div>
  </div>
  <!-- End of modal backdrop -->

  
</body>

</html>