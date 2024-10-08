<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="font-custom bg-[#0B0C0F]">
      <!-- navbar section  start-->
      

<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li aria-labelledby="dropdownNavbarLink">
                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
                    <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Overview</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My downloads</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Billing</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Rewards</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

      <!-- navbar section end -->

      <!-- Hero section start -->
      <section id="home" class="pt-36 pb-60">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full self-center px-4 font-medium lg:w-1/2">
              <h1 class="text-white  md:text-lg lg:text-xl">Hello, I am <span class="font-medium text-[#62F2E8] block text-4xl mt-1 md:text-5xl lg:text-6xl">Muhammad Risky Farhan</span></h1>
              <h2 class="font-medium text-sm mb-3 text-white md:text-lg lg:text-xl">Freelance & student undergradute</h2>
              <p class="font-medium text-lg mb-5 text-gray-400 italic md:text-lg lg:text-xl">"Always learning, always giving my best"</p>

              <a href="#" class="text-base text-[#62F2E8] font-medium bg-[#0B0C0F] border-2 border-[#62F2E8] p-3 px-6 rounded-md hover:text-[#0B0C0F] hover:bg-[#62F2E8] transition duration-300 ease-in-out hover:shadow-[0_0_20px_#62F2E8]">Download CV</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2 lg:mx-0">
              <div class="relative mt-16 lg:mt-9 lg:ml-24">
                <img src="{{ asset('storage/images/me.png') }}" alt="gambarku" class="mx-auto xl:mr-0" width="400" height=400>
                <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 lg:scale-125 xl:ml-10">
                  <svg width="300" height="550" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#62F2E8" d="M42.7,24.7C29.2,48,-25.9,47.4,-39.9,23.7C-54,0,-27,-46.7,0.6,-46.3C28.1,-46,56.2,1.3,42.7,24.7Z" transform="translate(100 100) scale(2.1)" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero secton end -->

      <!-- services selection start -->
      <section id="services" class="pb-60">
        <div class="container">
          <h1 class="font-semibold text-[#62F2E8] uppercase text-2xl text-center lg:text-4xl">Services</h1>
          <h4 class="font-normal text-white pt-10 text-lg text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cumque sequi beatae?</h4>
          <div class="flex flex-wrap justify-around pt-5 ">
              <div class="max-w-sm p-6 bg-gray-950 border border-gray-900 rounded-lg drop-shadow-2xl px-10 text-center mt-10">
                <i class="fas fa-drafting-compass text-5xl pb-10 text-white"></i>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-[#62F2E8]">UI/UX Design mobile/Web</h5>
                <p class="mb-3 font-normal text-gray-500 ">Skilled in designing functional and aesthetic user interfaces, ensuring a smooth experience across mobile and web platforms</p>
              </div>
              <div class="max-w-sm p-6 bg-gray-950 border border-gray-900 rounded-lg drop-shadow-2xl px-10 text-center mt-10">
                <i class="fas fa-code text-5xl pb-10 text-white"></i>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-[#62F2E8]">Dev mobile and Web</h5>
                <p class="mb-3 font-normal text-gray-500 ">Skilled in designing functional and aesthetic user interfaces, ensuring a smooth experience across mobile and web platforms</p>
              </div>
              <div class="max-w-sm p-6 bg-gray-950 border border-gray-900 rounded-lg drop-shadow-2xl px-10 text-center mt-10">
                <i class="fas fa-book-open text-5xl pb-10 text-white"></i>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-[#62F2E8]">Documentation</h5>
                <p class="mb-3 font-normal text-gray-500 ">Skilled in designing functional and aesthetic user interfaces, ensuring a smooth experience across mobile and web platforms</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services selection end -->

      <!-- My Project selection start -->
      <section id="project" class="pb-60">
        <div class="container">
          <h1 class="font-semibold text-[#62F2E8] uppercase text-2xl text-center lg:text-4xl">My Project</h1>
          <h4 class="font-normal text-white py-10 text-lg text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cumque sequi beatae?</h4>
          <div class="flex flex-wrap justify-center">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 ">
                <li class="me-2">
                    <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 group">
                      <i class="fas fa-drafting-compass mr-2"></i>UI/UX
                    </a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-flex items-center justify-center p-4 text-[#62F2E8] border-b-2 border-[#62F2E8] rounded-t-lg active" aria-current="page">
                      <i class="fas fa-code mr-2"></i>WEB & APP
                    </a>
                </li>
            </ul>
          </div>

          <!-- Isi My Project start -->
          <div class="snap-mandatory snap-x mt-10 flex overflow-x-scroll justify-center">
            <div class="snap-center shrink-0">
              <div class="max-w-sm bg-gray-950 border border-gray-900 rounded-lg shadow mx-3">
                <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('storage/images/porto.jpg') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-[#62F2E8]">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#62F2E8] rounded-lg hover:border hover:border-[#62F2E8] hover:text-[#62F2E8] hover:bg-black">
                        Read more
                          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
            </div>
            <div class="snap-center shrink-0">
              <div class="max-w-sm bg-gray-950 border border-gray-900 rounded-lg shadow mx-3">
                <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('storage/images/porto.jpg') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-[#62F2E8]">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#62F2E8] rounded-lg hover:border hover:border-[#62F2E8] hover:text-[#62F2E8] hover:bg-black">
                        Read more
                          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
            </div>
            <div class="snap-center shrink-0">
              <div class="max-w-sm bg-gray-950 border border-gray-900 rounded-lg shadow mx-3">
                <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('storage/images/porto.jpg') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-[#62F2E8]">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#62F2E8] rounded-lg hover:border hover:border-[#62F2E8] hover:text-[#62F2E8] hover:bg-black">
                        Read more
                          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
            </div>
            <div class="snap-center shrink-0">
              <div class="max-w-sm bg-gray-950 border border-gray-900 rounded-lg shadow mx-3">
                <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('storage/images/porto.jpg') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-[#62F2E8]">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#62F2E8] rounded-lg hover:border hover:border-[#62F2E8] hover:text-[#62F2E8] hover:bg-black">
                        Read more
                          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
            </div>
            <div class="snap-center shrink-0">
              <div class="max-w-sm bg-gray-950 border border-gray-900 rounded-lg shadow mx-3">
                <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('storage/images/porto.jpg') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-[#62F2E8]">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#62F2E8] rounded-lg hover:border hover:border-[#62F2E8] hover:text-[#62F2E8] hover:bg-black">
                        Read more
                          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Isi My Project end -->
        </div>
      </section>
      <!-- My Project selection end -->

      <!-- about section start -->
      <!-- <section id="about" class="pt-36 pb-32">
        <div class="container">
          <h1 class="font-semibold text-[#62F2E8] uppercase text-2xl text-center lg:text-4xl">About</h1>
          <div class="flex flex-wrap justify-around">
            <div class="relative scale-75 md:w-1/2 lg:scale-75 xl:w-auto">
              <img src="{{ asset('storage/images/me2.jpg') }}" class="p-3" alt="">
              <div class="absolute top-0 left-0 w-20 h-1 rounded-sm bg-[#62F2E8]"></div>
              <div class="absolute top-0 left-0 w-1 h-20 rounded-sm bg-[#62F2E8]"></div>
              <div class="absolute bottom-0 right-0 w-20 h-1 rounded-sm bg-[#62F2E8]"></div>
              <div class="absolute bottom-0 right-0 w-1 h-20 rounded-sm bg-[#62F2E8]"></div>
            </div>
            <div class="w-full px-4 md:w-1/2 md:mt-12 lg:mt-14 xl:w-auto xl:px-10 xl:text-center xl:mt-1 mb-14">
              <h3 class="text-white font-medium text-xl mb-1 md:text-xl lg:text-3xl">Hi there! I'm Muhammad Risky Farhan</h3>
              <h5 class="text-[#62F2E8] font-light mb-1 md:text-sm lg:text-xl lg:mb-10">Software Engineer</h5>
              <p class="text-white font-extralight text-justify mx-auto mb-5 md:text-xs lg:text-base xl:text-center">As a student, I have engaged in various projects that enhanced my skills. I began with web development, learning to create responsive websites using HTML, CSS, and JavaScript. My interest in UI/UX design grew as I recognized its impact on user experience.</p>
              <p class="text-white font-extralight text-justify mx-auto md:text-xs lg:text-base xl:text-center">I have also worked on collaborative projects in application development and technical documentation, which taught me the importance of clear communication in a team. With this experience, I am prepared to tackle industry challenges and contribute to innovative solutions.</p>
            </div>
          </div>
        </div>
      </section> -->
      <!-- about section end -->
    </body>
</html>
