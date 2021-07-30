
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
</nav>