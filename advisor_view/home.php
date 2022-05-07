<?php

include '../controller/announcement_controller.php';
include '../controller/shared_files_controller.php';
include '../controller/student_controller.php';
include '../controller/faq_controller.php';
include '../controller/aoi_controller.php';
include '../settings/core.php';

check_login();


$number_of_students = count_students_controller();
$number_of_faqs = number_of_faqs_controller();
$number_of_shared_files = number_of_shared_files_controller();
$number_of_aois = number_of_aois_controller();
 
$announcement_count = count_announcement_controller();
$announcements = select_all_announcements_controller();

// $shared_files = select_all_shared_files_controller();
?>


<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Advising System - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="./assets/js/init-alpine.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
  <div class="flex h-screen bg-zinc-200" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Desktop sidebar -->
    <aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-[#923] md:block">
      <div class="py-4 text-gray-500">
        <img class="mx-auto w-1/2 mb-4" src="./assets/img/ashesiLogo.png" alt="">
        <a class="mt-16 ml-6 text-lg font-bold text-white" href="#">
          Student Advising System
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
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
                      class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 "
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
            <span class="absolute inset-y-0 left-0 w-1 bg-[#923] rounded-tr-lg rounded-br-lg"
                aria-hidden="true"></span>
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

    <div class="flex flex-col flex-1 w-full">
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
                      href="../action/logout_action.php?logout=<?php echo $_SESSION['user_id']?>">
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
      <main class="h-full overflow-y-auto">
        <div class="container grid px-12 mx-auto">
          <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Home
          </h2>
          <!-- Card -->
          <div class="flex items-center p-4 mb-4 bg-white rounded-lg shadow-xs">
            
            <div class="mx-auto text-center">
              <p class="mb-2 text-xl font-medium text-gray-600">
                Welcome <span class="font-semibold text-2xl text-zinc-800"><?php echo $_SESSION['name']?></span> to the Student Advising System
              </p>
              <p class="font-semibold text-center text-gray-700 text-md">
                Look up FAQ, shared files, and 
              </p>
            </div>
          </div>

          <!-- Cards -->
          <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-orange-500 bg-[#923D41] rounded-full ">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8868 12.1465C17.5188 12.1465 17.1978 11.8755 17.1448 11.5005C17.0878 11.0895 17.3728 10.7105 17.7838 10.6535C18.8238 10.5075 19.6088 9.60551 19.6108 8.55351C19.6108 7.51051 18.8628 6.62851 17.8318 6.45951C17.4238 6.39251 17.1468 6.00651 17.2138 5.59751C17.2818 5.18851 17.6648 4.91451 18.0758 4.97951C19.8338 5.26851 21.1108 6.77251 21.1108 8.55551C21.1068 10.3505 19.7658 11.8905 17.9908 12.1395C17.9558 12.1445 17.9208 12.1465 17.8868 12.1465Z" fill="white"/>
                <mask id="mask0_33437_4660" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="18" y="14" width="5" height="5">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9781 14.0016H22.7721V18.5312H18.9781V14.0016Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_33437_4660)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8614 18.5312C20.5594 18.5312 20.2744 18.3472 20.1604 18.0482C20.0124 17.6612 20.2074 17.2272 20.5944 17.0802C21.2724 16.8222 21.2724 16.5372 21.2724 16.4002C21.2724 15.9622 20.7154 15.6562 19.6174 15.4922C19.2084 15.4302 18.9254 15.0492 18.9864 14.6382C19.0474 14.2282 19.4274 13.9552 19.8404 14.0082C22.2634 14.3712 22.7724 15.5092 22.7724 16.4002C22.7724 16.9442 22.5584 17.9372 21.1284 18.4822C21.0404 18.5152 20.9504 18.5312 20.8614 18.5312Z" fill="white"/>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8867 15.9139C9.51073 15.9139 6.67773 16.2059 6.67773 17.5959C6.67773 18.9969 9.51073 19.2909 11.8867 19.2909C14.2627 19.2909 17.0947 18.9999 17.0947 17.6129C17.0947 16.2089 14.2627 15.9139 11.8867 15.9139ZM11.8867 20.7909C10.2277 20.7909 5.17773 20.7909 5.17773 17.5959C5.17773 14.4139 10.2277 14.4139 11.8867 14.4139C13.5457 14.4139 18.5947 14.4139 18.5947 17.6129C18.5947 20.7909 13.7217 20.7909 11.8867 20.7909Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8868 5.5C10.1948 5.5 8.81877 6.877 8.81877 8.569C8.81577 9.389 9.12977 10.156 9.70477 10.735C10.2798 11.314 11.0458 11.635 11.8618 11.638L11.8868 12.388V11.638C13.5788 11.638 14.9558 10.262 14.9558 8.569C14.9558 6.877 13.5788 5.5 11.8868 5.5ZM11.8868 13.138H11.8598C10.6398 13.134 9.49677 12.656 8.64077 11.792C7.78277 10.929 7.31377 9.783 7.31877 8.566C7.31877 6.05 9.36776 4 11.8868 4C14.4068 4 16.4558 6.05 16.4558 8.569C16.4558 11.088 14.4068 13.138 11.8868 13.138Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.88572 12.1465C5.85172 12.1465 5.81672 12.1445 5.78172 12.1395C4.00672 11.8905 2.66672 10.3505 2.66272 8.55745C2.66272 6.77245 3.93972 5.26845 5.69772 4.97945C6.11872 4.91345 6.49172 5.19045 6.55972 5.59745C6.62672 6.00645 6.34972 6.39245 5.94172 6.45945C4.91072 6.62845 4.16272 7.51045 4.16272 8.55545C4.16472 9.60545 4.94972 10.5085 5.98872 10.6535C6.39972 10.7105 6.68472 11.0894 6.62772 11.5005C6.57472 11.8755 6.25372 12.1465 5.88572 12.1465Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.91212 18.5312C2.82312 18.5312 2.73312 18.5152 2.64512 18.4822C1.21412 17.9362 1.00012 16.9432 1.00012 16.4002C1.00012 15.5102 1.50912 14.3712 3.93312 14.0082C4.34612 13.9562 4.72412 14.2282 4.78612 14.6382C4.84712 15.0492 4.56412 15.4302 4.15512 15.4922C3.05712 15.6562 2.50012 15.9622 2.50012 16.4002C2.50012 16.5372 2.50012 16.8212 3.17912 17.0802C3.56612 17.2272 3.76112 17.6612 3.61312 18.0482C3.49912 18.3472 3.21412 18.5312 2.91212 18.5312Z" fill="white"/>
                </svg>
              </div>
              <div>
                <p class="mb-2 text-sm font-medium text-gray-600">
                  Total students on system
                </p>
                <p class="text-lg font-semibold text-gray-700">
                  <?php echo $number_of_students['count'];?>
                </p>
              </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-green-500 bg-[#9E7067] rounded-full">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3342 2.75012H7.66524C4.64424 2.75012 2.75024 4.88912 2.75024 7.91612V16.0841C2.75024 19.1111 4.63424 21.2501 7.66524 21.2501H16.3332C19.3642 21.2501 21.2502 19.1111 21.2502 16.0841V7.91612C21.2502 4.88912 19.3642 2.75012 16.3342 2.75012Z" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.9395 12.013H15.9485" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.9304 12.013H11.9394" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.9214 12.013H7.9304" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              </div>
              <div>
                <p class="mb-2 text-sm font-medium text-gray-600">
                 Number of FAQs
                </p>
                <p class="text-lg font-semibold text-gray-700">
                  <?php echo $number_of_faqs['count'];?>
                </p>
              </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-[#5C4152] rounded-full">
                <!-- <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                  </path>
                </svg> -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_33437_4402" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="2" width="18" height="20">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00024 2.0116H20.0529V21.8651H3.00024V2.0116Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_33437_4402)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.57335 3.5116C5.91635 3.5116 4.54035 4.8536 4.50135 6.5086V17.2036C4.46435 18.9166 5.81435 20.3276 7.51035 20.3656H15.5743C17.2433 20.2966 18.5653 18.9096 18.5533 17.2096V8.3396L13.9183 3.5116H7.58535H7.57335ZM7.58535 21.8656H7.47635C4.95435 21.8086 2.94635 19.7106 3.00135 17.1876V6.4906C3.05935 4.0096 5.10835 2.0116 7.57135 2.0116H7.58835H14.2383C14.4423 2.0116 14.6373 2.0946 14.7793 2.2416L19.8443 7.5186C19.9783 7.6576 20.0533 7.8446 20.0533 8.0376V17.2036C20.0713 19.7126 18.1173 21.7626 15.6043 21.8646L7.58535 21.8656Z" fill="white"/>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2985 8.98424H16.5435C14.7135 8.97924 13.2255 7.48724 13.2255 5.65924V2.75024C13.2255 2.33624 13.5615 2.00024 13.9755 2.00024C14.3895 2.00024 14.7255 2.33624 14.7255 2.75024V5.65924C14.7255 6.66324 15.5425 7.48124 16.5455 7.48424H19.2985C19.7125 7.48424 20.0485 7.82024 20.0485 8.23424C20.0485 8.64824 19.7125 8.98424 19.2985 8.98424Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7887 16.1084H8.38867C7.97467 16.1084 7.63867 15.7724 7.63867 15.3584C7.63867 14.9444 7.97467 14.6084 8.38867 14.6084H13.7887C14.2027 14.6084 14.5387 14.9444 14.5387 15.3584C14.5387 15.7724 14.2027 16.1084 13.7887 16.1084Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7437 12.3563H8.3877C7.9737 12.3563 7.6377 12.0203 7.6377 11.6063C7.6377 11.1923 7.9737 10.8563 8.3877 10.8563H11.7437C12.1577 10.8563 12.4937 11.1923 12.4937 11.6063C12.4937 12.0203 12.1577 12.3563 11.7437 12.3563Z" fill="white"/>
                </svg>

              </div>
              <div>
                <p class="mb-2 text-sm font-medium text-gray-600">
                  Number of shared files
                </p>
                <p class="text-lg font-semibold text-gray-700">
                <?php echo $number_of_shared_files['count'];?>

                </p>
              </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-teal-500 bg-[#7D2C30] rounded-full ">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_33437_4394" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="21" height="21">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 2.99988H22.4725V22.5009H2V2.99988Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_33437_4394)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.82371 12.123C5.22571 16.485 10.7647 20.012 12.2367 20.885C13.7137 20.003 19.2927 16.437 20.6497 12.127C21.5407 9.341 20.7137 5.812 17.4277 4.753C15.8357 4.242 13.9787 4.553 12.6967 5.545C12.4287 5.751 12.0567 5.755 11.7867 5.551C10.4287 4.53 8.65471 4.231 7.03771 4.753C3.75671 5.811 2.93271 9.34 3.82371 12.123ZM12.2377 22.501C12.1137 22.501 11.9907 22.471 11.8787 22.41C11.5657 22.239 4.19271 18.175 2.39571 12.581C2.39471 12.581 2.39471 12.58 2.39471 12.58C1.26671 9.058 2.52271 4.632 6.57771 3.325C8.48171 2.709 10.5567 2.98 12.2347 4.039C13.8607 3.011 16.0207 2.727 17.8867 3.325C21.9457 4.634 23.2057 9.059 22.0787 12.58C20.3397 18.11 12.9127 22.235 12.5977 22.408C12.4857 22.47 12.3617 22.501 12.2377 22.501Z" fill="white"/>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1537 10.6249C17.7667 10.6249 17.4387 10.3279 17.4067 9.9359C17.3407 9.1139 16.7907 8.4199 16.0077 8.1669C15.6127 8.0389 15.3967 7.6159 15.5237 7.2229C15.6527 6.8289 16.0717 6.6149 16.4677 6.7389C17.8307 7.1799 18.7857 8.3869 18.9027 9.8139C18.9357 10.2269 18.6287 10.5889 18.2157 10.6219C18.1947 10.6239 18.1747 10.6249 18.1537 10.6249Z" fill="white"/>
                </svg>
              </div>
              <div>
                <p class="mb-2 text-sm font-medium text-gray-600">
                  Areas of interest
                </p>
                <p class="text-lg font-semibold text-gray-700">
                  <?php echo $number_of_aois['count'];?>
                </p>
              </div>
            </div>
          </div>
          
          <!-- Announcement card -->
          <div class="mb-8">

            <!-- Card -->
            <div  <?php if ($announcement_count > 0) {
                echo '@click="openModal"';
            } ?> 
              class="flex items-center p-4 bg-white rounded-lg shadow-xs <?php if (
                  $announcement_count > 0
              ) {
                  echo 'hover:bg-gray-100';
              } ?> ">
              <div class="p-3 mr-4 text-white bg-[#923D41] rounded-full">
              <!-- <i class="fas fa-volume-high fa-lg"></i> -->
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.9912 2.00201C19.8599 2.00194 19.7298 2.02775 19.6084 2.07798C19.4871 2.12821 19.3768 2.20187 19.2839 2.29474C19.1911 2.38761 19.1174 2.49788 19.0672 2.61924C19.017 2.7406 18.9911 2.87067 18.9912 3.00201V3.63873C18.1478 4.68444 17.0819 5.52893 15.871 6.11073C14.66 6.69254 13.3346 6.99702 11.9912 7.00201H5.99121C5.19583 7.00288 4.43327 7.31923 3.87085 7.88165C3.30843 8.44407 2.99208 9.20663 2.99121 10.002V12.002C2.99208 12.7974 3.30843 13.56 3.87085 14.1224C4.43327 14.6848 5.19583 15.0011 5.99121 15.002H6.475L4.07227 20.6084C4.00698 20.7605 3.98047 20.9264 3.99512 21.0912C4.00978 21.256 4.06514 21.4147 4.15624 21.5528C4.24734 21.691 4.37133 21.8043 4.51706 21.8827C4.6628 21.9611 4.82572 22.0021 4.99121 22.002H8.99121C9.18696 22.0021 9.37843 21.9447 9.54182 21.8369C9.7052 21.7291 9.83329 21.5756 9.91016 21.3956L12.6339 15.04C13.8646 15.1304 15.0636 15.472 16.157 16.0439C17.2505 16.6158 18.215 17.4058 18.9912 18.3651V19.002C18.9912 19.2672 19.0966 19.5216 19.2841 19.7091C19.4716 19.8967 19.726 20.002 19.9912 20.002C20.2564 20.002 20.5108 19.8967 20.6983 19.7091C20.8859 19.5216 20.9912 19.2672 20.9912 19.002V3.00201C20.9913 2.87067 20.9655 2.7406 20.9152 2.61924C20.865 2.49788 20.7914 2.38761 20.6985 2.29474C20.6056 2.20186 20.4953 2.12821 20.374 2.07798C20.2526 2.02775 20.1226 2.00194 19.9912 2.00201ZM5.99121 13.002C5.72605 13.0018 5.4718 12.8964 5.2843 12.7089C5.0968 12.5214 4.99139 12.2672 4.99121 12.002V10.002C4.99139 9.73685 5.09681 9.4826 5.2843 9.29511C5.4718 9.10761 5.72605 9.00219 5.99121 9.00201H6.99121V13.002H5.99121ZM8.33203 20.002H6.50781L8.65039 15.002H10.4746L8.33203 20.002ZM18.9912 15.5238C17.0195 13.8994 14.5459 13.0083 11.9912 13.002H8.99121V9.00196H11.9912C14.5459 8.99543 17.0195 8.10412 18.9912 6.47962V15.5238Z" fill="white"/>
              </svg>

              </div>
              <div>
                <p class="mb-2 text-xl font-medium text-gray-600">
                  Announcements
                </p>
                <p class="text-lg font-semibold text-gray-700">
                  You have <?php if ($announcement_count > 0) {
                      echo $announcement_count['count'];
                  } else {
                      echo 0;
                  } ?> new announcements.  <?php if ($announcement_count > 0) {
                echo '<button @click="openModal"><span class="text-sm text-blue-500 transition-colors duration-150 hover:text-blue-400">Click here</span></button>';
            } ?>

                </p>
              </div>
            </div>
                
          </div>

          <!-- New Table -->
          <!-- <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                  <thead>
                  <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 border-b uppercase bg-gray-50">
                      <th class="px-12 py-3">File name</th>
                      <th class="px-4 py-3">Description`</th>
                      <th class="px-4 py-3"></th>
                  </tr>
                  </thead>

                  <tbody class="bg-white divide-y">
                  <?php if ($shared_files) {
                      foreach ($shared_files as $shared_file) {
                          echo '
                          <tr class="text-gray-700">
                              <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                      <!-- Avatar with inset shadow -->
                                      <!-- <div class="hidden w-8 h-8 mr-3 rounded-full md:block"> -->
                                          <i class="mr-3 fas fa-file fa-lg"></i>
                                      <!-- </div> -->
                                  <div>
                                      <p class="font-semibold">' .
                              $shared_file['file_name'] .
                              '</p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-4 py-3 text-sm">';

                          if (strlen($shared_file['file_desc'] < 50)) {
                              echo substr($shared_file['file_desc'], 0, 50) .
                                  '...';
                          } else {
                              echo $shared_file['file_desc'];
                          }
                          echo '</td>
                              
                              <td class="px-4 py-3">
                                  <a href=""><i class="ml-10 text-blue-400 fas fa-edit"></i></a>
                                  <a href=""><i class="ml-10 text-red-500 fas fa-trash-alt"></i></a>
                                  <a href="' .
                              $shared_file['file'] .
                              '" download="' .
                              basename($shared_file['file']) .
                              PHP_EOL .
                              '"><i class="ml-10 text-green-500 fas fa-download"></i></a>

                              </td>
                          </tr>
                          ';
                      }
                  } else {
                      echo '<td class="text-right">
                              <div>
                                  <p class="font-semibold">No file available</p>
                              </div>
                            </td>';
                  } ?>

                  </tbody>
              </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9">
              </div>
          </div> -->
          
        </div>
      </main>
    </div>
  </div>

  <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end overflow-auto bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
      @keydown.escape="closeModal"
      class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg sm:rounded-lg sm:m-4 sm:max-w-xl"
      role="dialog" id="modal">
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
        <p class="mb-2 text-xl font-semibold text-center text-gray-700 ">
          Announcements
        </p>
        <!-- Modal description -->

        <?php
        $count = 0;
        foreach ($announcements as $announcement) {
            if ($count < 3) {
                if ($announcement_count > 0) {
                    echo '<h2 class="mb-2 text-lg font-semibold text-gray-600 ">' .
                        $announcement['announcement_subject'] .
                        '</h2>
                    <p class="mb-3 text-md text-gray-700">
                    ';
                      if(strlen($announcement['announcement_message']) > 256){
                        echo substr($announcement['announcement_message'], 0, 256). '...';
                      }else {
                        echo $announcement['announcement_message'];
                      }
                        $announcement['announcement_message'] .
                        '
                    </p>';
                }
                $count++;

            }else {
              echo '<p class="mb-3 text-md text-gray-700">
                    Click <a class="text-blue-600 text-lg italic" href="./announcements.php">here</a>  for more...
                    </p>';
              break;

            }

        }
        ?>
      
      </div>
      <footer
        class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50">
        <button  @click="closeModal"
          class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-800 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
          Done
        </button>
      </footer>
    </div>
  </div>


</body>

</html>

