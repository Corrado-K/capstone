<?php  

  include '../controller/faq_controller.php';

  session_start();

  $faqs = select_all_faqs_controller();
  
?>


<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ - Windmill Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="./assets/js/init-alpine.js"></script>
</head>

<body>
  <div class="flex h-screen bg-zinc-200" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-[#9b1c1c] md:block flex-shrink-0">
      <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-white" href="#">
          Student Advising System
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-800"
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
          <span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-800"
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
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-800"
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
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-800"
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
              <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-800"
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
                  class="inline-flex items-center justify-between w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-800"
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
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                          <a class="w-full" href="./areas_of_interest.php">Areas of interest</a>
                      </li>
                      <li
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                          <a class="w-full" href="./lecturer_management.php"> Lecturer management</a>
                      </li>
                      <li
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                          <a class="w-full" href="./student_management.php">Student management</a>
                      </li>
                      <li
                          class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                          <a class="w-full" href="./student_lecturer_pairing.php">Pairing and result simulator</a>
                      </li>
                  </ul>
              </template>
          </li>        
          
        </ul>
        <div class="px-6 my-6">
          <button
            class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-black transition-colors duration-150 bg-red-100 border border-transparent rounded-lg active:bg-[#9b1c1c] hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
            Create account
            <span class="ml-2" aria-hidden="true">+</span>
          </button>
        </div>
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
          Windmill
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              href="index.html">
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
            <span class="absolute inset-y-0 left-0 w-1 bg-[#9b1c1c] rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
              href="FAQ.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
              </svg>
              <span class="ml-4">FAQ</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              href="forms.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
              </svg>
              <span class="ml-4">Forms</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              href="charts.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
              </svg>
              <span class="ml-4">Charts</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              href="buttons.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                </path>
              </svg>
              <span class="ml-4">Buttons</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              href="modals.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                </path>
              </svg>
              <span class="ml-4">Modals</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              href="tables.html">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">Tables</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <button
              class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              @click="togglePagesMenu" aria-haspopup="true">
              <span class="inline-flex items-center">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                  </path>
                </svg>
                <span class="ml-4">Pages</span>
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
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                  <a class="w-full" href="pages/login.html">Login</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                  <a class="w-full" href="pages/create-account.html">
                    Create account
                  </a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                  <a class="w-full" href="pages/forgot-password.html">
                    Forgot password
                  </a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                  <a class="w-full" href="pages/404.html">404</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                  <a class="w-full" href="pages/blank.html">Blank</a>
                </li>
              </ul>
            </template>
          </li>
        </ul>
        <div class="px-6 my-6">
          <button
            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#9b1c1c] border border-transparent rounded-lg active:bg-[#9b1c1c] hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
            Create account
            <span class="ml-2" aria-hidden="true">+</span>
          </button>
        </div>
      </div>
    </aside>
    <div class="flex flex-col flex-1">
      <header class="z-10 py-4 bg-white shadow-md">
        <div class="container flex items-center justify-between h-full px-6 mx-auto text-[#9b1c1c]">
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
            <li class="relative">
              <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-red"
                @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu" aria-label="Notifications"
                aria-haspopup="true">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                  </path>
                </svg>
                <!-- Notification badge -->
                <span aria-hidden="true"
                  class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-[#9b1c1c] border-2 border-white rounded-full"></span>
              </button>
              <template x-if="isNotificationsMenuOpen">
                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                  aria-label="submenu">
                  <li class="flex">
                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <span>Messages</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-[#9b1c1c] bg-red-100 rounded-full">
                        13
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <span>Sales</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-[#9b1c1c] bg-red-100 rounded-full">
                        2
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <span>Alerts</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
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
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="#">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
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
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                      href="../action/login_action.php?logout=<?php $_SESSION['user_id']?>">
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
            FAQs
          </h2>

          <!-- Card -->
          <div class="flex items-center p-4 mb-4 bg-white border-solid border-1 border-black rounded-lg shadow-xs">
            
            <div class="mx-auto text-center">
              <p class="mb-2 text-xl font-medium text-gray-600">
                FAQ Page
              </p>
              <p class="font-normal text-center text-gray-700 text-md">
                Save yourself the stress of answering the same questions all over again by posting Frequently Asked Questions
              </p>
            </div>
          </div>

          <div class="h-full px-4 py-3 mb-3 mb-8 bg-white rounded-lg shadow-md">
            <h2 class="my-2 text-xl font-semibold text-center text-gray-700">
              Add FAQ
            </h2>
            <form action="../action/faq_action.php" method="post">
              <label class="block text-md">
                <span class="text-gray-700">Question</span>
                <input
                  class="block w-full mt-1 text-sm rounded-full focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
                  placeholder="Enter a question"
                  name="question" />
              </label>

              <label class="block mt-4 text-md">
                <span class="text-gray-700">Answer/Response</span>
                <textarea
                  class="block w-full mt-1 text-sm rounded-2xl form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red"
                  rows="3" name="answer" placeholder="Enter a response"></textarea>
              </label>
              <button name="add_faq" class="px-4 mt-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#9b1c1c] border border-transparent rounded-lg active:bg-[#9b1c1c] hover:bg-[#9b1c1c] focus:outline-none focus:shadow-outline-[#9b1c1c] rounded-full">
                  Submit
              </button>
            </form>
          </div>

          <div class="my-5"></div>

          <!-- Card -->
          <div class="flex items-center p-4 mb-4 bg-white border-solid border-1 border-black rounded-lg shadow-xs">
            
            <div class="mx-auto text-center">
              <p class="mb-2 text-xl font-medium text-gray-600">
                ADD FAQ USING CSV
              </p>
              <p class="font-normal text-center px-10 text-gray-700 text-md">
                Upload a host of frequently asked questions by inserting them in a csv file, then upload that csv. If it is successful, all the questions would enter the database.
                That said, use the file below as an example of showing how to store the data in the csv and upload it.
              </p>

              <p class="mt-10">
                <a href="../files/faq_csv.csv" download="faq_csv" class="hover:animate-bounce transition ease-in-out delay-500 hover:text-blue-500">
                  <svg class="mx-auto" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_33437_4402" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="2" width="18" height="20">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00024 2.0116H20.0529V21.8651H3.00024V2.0116Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_33437_4402)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.57335 3.5116C5.91635 3.5116 4.54035 4.8536 4.50135 6.5086V17.2036C4.46435 18.9166 5.81435 20.3276 7.51035 20.3656H15.5743C17.2433 20.2966 18.5653 18.9096 18.5533 17.2096V8.3396L13.9183 3.5116H7.58535H7.57335ZM7.58535 21.8656H7.47635C4.95435 21.8086 2.94635 19.7106 3.00135 17.1876V6.4906C3.05935 4.0096 5.10835 2.0116 7.57135 2.0116H7.58835H14.2383C14.4423 2.0116 14.6373 2.0946 14.7793 2.2416L19.8443 7.5186C19.9783 7.6576 20.0533 7.8446 20.0533 8.0376V17.2036C20.0713 19.7126 18.1173 21.7626 15.6043 21.8646L7.58535 21.8656Z" fill="black"/>
                    </g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2985 8.98424H16.5435C14.7135 8.97924 13.2255 7.48724 13.2255 5.65924V2.75024C13.2255 2.33624 13.5615 2.00024 13.9755 2.00024C14.3895 2.00024 14.7255 2.33624 14.7255 2.75024V5.65924C14.7255 6.66324 15.5425 7.48124 16.5455 7.48424H19.2985C19.7125 7.48424 20.0485 7.82024 20.0485 8.23424C20.0485 8.64824 19.7125 8.98424 19.2985 8.98424Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7887 16.1084H8.38867C7.97467 16.1084 7.63867 15.7724 7.63867 15.3584C7.63867 14.9444 7.97467 14.6084 8.38867 14.6084H13.7887C14.2027 14.6084 14.5387 14.9444 14.5387 15.3584C14.5387 15.7724 14.2027 16.1084 13.7887 16.1084Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7437 12.3563H8.3877C7.9737 12.3563 7.6377 12.0203 7.6377 11.6063C7.6377 11.1923 7.9737 10.8563 8.3877 10.8563H11.7437C12.1577 10.8563 12.4937 11.1923 12.4937 11.6063C12.4937 12.0203 12.1577 12.3563 11.7437 12.3563Z" fill="black"/>
                  </svg> DOWNLOAD SAMPLE CSV HERE
                </a>

              </p>
            </div>
          </div>

          <div class="h-full px-4 py-3 mb-3 mb-8 bg-white rounded-lg shadow-md">
            <h2 class="my-2 text-xl font-semibold text-center text-gray-700">
              Add FAQ by CSV file
            </h2>

            
            <form action="../action/faq_action.php" method="post" enctype="multipart/form-data">
        
              <label class="block mt-4 text-md">
                <span class="text-gray-700 mx-3">
                    File
                </span>

                <input
                    class="block w-full mt-1 text-sm rounded-full focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100"
                    type="file"
                    name="uploaded_faq_file"
                    placeholder="Please insert a csv file" />
                </label>

              <button name="process_faq_csv" class="px-4 mt-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#9b1c1c] border border-transparent rounded-lg active:bg-[#9b1c1c] hover:bg-[#9b1c1c] focus:outline-none focus:shadow-outline-[#9b1c1c] rounded-full">
                  Submit
              </button>
            </form>
          </div>
          
          <div class="px-4 py-2 mt-10 mb-4 bg-white rounded-lg shadow-md">
          <h2 class="my-3 text-2xl font-semibold text-center text-gray-700">
            FAQs
          </h2>
          <ul class="flex flex-col">
            
          <?php 
          if ($faqs) {
              foreach ($faqs as $faq) {
                

                  echo '
                <details class="mb-3">
                  <summary class="px-4 py-2 font-semibold bg-gray-200 rounded-md">
                  '.$faq['faq_question'].'
                  </summary>

                  <span>
                  '.$faq['faq_answer'].'
                  </span>
                </details>';

                

              }
          }else{
            echo '<h2 class="my-3 text-xl text-center text-gray-700 font-base">
            No FAQs posted yet!
          </h2>';
          }
          ?>
          </ul>
          </div>

         

          
        </div>
      </main>
    </div>
  </div>
</body>

</html>