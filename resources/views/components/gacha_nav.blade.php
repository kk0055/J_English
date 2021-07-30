{{-- 
<nav id="header" class="w-full z-30 top-0 py-1">
  <div class="w-full mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
      <label for="menu-toggle" class="cursor-pointer md:hidden block">
          <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                 <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
      </label>
      <input class="hidden" type="checkbox" id="menu-toggle" />
      <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
          <div class="nav">
              <ul class="md:flex items-center justify-between text-base text-gray-600 pt-4 md:pt-0">
                <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('englishWord') }}">ガチャガチャ英単語</a></li>
                <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="/">5秒英作文</a></li>
          
              </ul>    
          </div>
      </div>
  </div>
</nav> --}}



<div>
  <nav class="bg-white dark:bg-gray-800  ">
      <div class="max-w-7xl mx-auto px-8">
          <div class="flex items-center justify-between h-16">
              <div class=" flex items-center">
                  <a class="flex-shrink-0" href="/">
                    <i class="fas fa-bomb text-4xl" ></i>
                  </a>
                  <div class="hidden md:block">
                      <div class="ml-10 flex items-baseline space-x-4">
                          <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="{{ route('englishWord') }}">ガチャガチャ英単語</a>
                          </a>
                          <a class="text-gray-800 dark:text-white  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="/">5秒英作文</a>
                 
                      </div>
                  </div>
              </div>
              <div class="block">
                  <div class="ml-4 flex items-center md:ml-6">
                  </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                  <button class="text-gray-800 dark:text-white hover:text-gray-300 inline-flex items-center justify-center p-2 rounded-md focus:outline-none">
                      <svg width="20" height="20" fill="currentColor" class="h-8 w-8" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                          </path>
                      </svg>
                  </button>
              </div>
          </div>
      </div>
      <div class="md:hidden">
          <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
              <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="{{ route('englishWord') }}">ガチャガチャ英単語</a>
              </a>
              <a class="text-gray-800 dark:text-white block px-3 py-2 rounded-md text-base font-medium" href="/">5秒英作文</a>
              </a>
              <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                  Content
              </a>
              <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                  Contact
              </a>
          </div>
      </div>
  </nav>
</div>
