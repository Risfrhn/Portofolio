<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="font-custom bg-[#0B0C0F]">
      <!-- Hero section start -->
       <section id="home" class="pt-36">
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

      <!-- about section start -->
      <section id="about" class="pt-36 pb-32">
        <div class="container">
          <h1 class="font-semibold text-[#62F2E8] uppercase text-2xl text-center lg:text-4xl">About Me</h1>
          <div class="grid grid-rows-2">
            <div class="relative w-full mx-auto scale-75 my-auto">
              <img src="{{ asset('storage/images/me2.jpg') }}" class="p-3" alt="">
              <div class="absolute top-0 left-0 w-20 h-1 rounded-sm bg-[#62F2E8]"></div>
              <div class="absolute top-0 left-0 w-1 h-20 rounded-sm bg-[#62F2E8]"></div>
              <div class="absolute bottom-0 right-0 w-20 h-1 rounded-sm bg-[#62F2E8]"></div>
              <div class="absolute bottom-0 right-0 w-1 h-20 rounded-sm bg-[#62F2E8]"></div>
            </div>
            <div class="w-full lg:mx-20 xl:w-1/2 xl:mx-auto xl:my-auto">
              <h3 class="text-white font-medium text-xl mb-1 md:text-4xl">Hi there! I'm Muhammad Risky Farhan</h3>
              <h5 class="text-[#62F2E8] font-light mb-1 md:text-md ">Software Engineer</h5>
              <p class="text-white font-extralight text-justify mx-auto mb-5 md:text-md">Hello! My name is Muhammad Risky Farhan, and I am an undergraduate student of Software Engineering at Telkom University. I have a strong passion for software development, both in backend and frontend technologies. Currently, I am actively working on various projects involving web and mobile development, constantly honing my programming skills.</p>
              <p class="text-white font-extralight text-justify mx-auto md:text-md">I strive to always keep learning and give my best in every project I work on. With a solid educational background in software engineering, I also enjoy sharing knowledge and experiences with others. I believe that collaboration and innovation are key to creating impactful technological solutions.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- about section end -->
    </body>
</html>
