<!-- navbar goes here -->
<nav class="top-0 w-full bg-gray-50 mb-5 fixed">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between">

      <div class="flex space-x-4">
        <!-- logo -->
        <div>
          <a href="/" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
            <i class="fas fa-home"></i>
          </a>
        </div>

        <!-- primary nav -->
        <div class="hidden md:flex items-center space-x-1">
          <ul class="md:flex items-center justify-between text-base text-gray-600 pt-4 md:pt-0">
            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('about') }}">はじめに</a></li>
            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('englishWord') }}">ガチャガチャ英単語</a></li>
            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('website') }}">英語学習用サイト</a></li>
          
            @guest
              <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('login') }}">ログイン</a></li>
              <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('register') }}">登録</a></li>
            @endguest
            @auth
              <li>
                <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('user.post',Auth::user()) }}">{{ Auth::user()->name }}の投稿</a>
             </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
         <li>
            <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('my_favorites') }}">お気に入り(保存)</a>
        </li>
     
        <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('logout') }}"
        onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
         ログアウト
     </a></li>
         @endauth
       
          </ul>   
        </div>
      </div>

      <!-- secondary nav -->
      {{-- <div class="hidden md:flex items-center space-x-1">
        <h3 id="time" class="time mr-5 mt-1 text-red-500">Time: 00:00</h3>
      </div> --}}

      <!-- mobile button goes here -->
      <div class=" flex items-center">
        @if (Request::is('/'))
        <h3 id="time" class="time mr-5 text-red-500">Time: 00:00</h3>
        @endif
        <button class="md:hidden mobile-menu-button">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu hidden md:hidden">
    <ul class="md:flex items-center justify-between text-base text-gray-600 pt-4 md:pt-0">
      <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('about') }}">はじめに</a></li>
      <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('englishWord') }}">ガチャガチャ英単語</a></li>
      <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('website') }}">英語学習用サイト</a></li>
    
      @guest
        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('login') }}">ログイン</a></li>
        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('register') }}">登録</a></li>
      @endguest
      @auth
        <li>
          <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('user.post',Auth::user()) }}">{{ Auth::user()->name }}の投稿</a>
       </li>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
   <li>
      <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('my_favorites') }}">お気に入り(保存)</a>
  </li>

  <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('logout') }}"
  onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
   ログアウト
</a></li>
   @endauth
 
    </ul>   
  </div>
</nav>
<div class="py-10 text-center">
 
</div>
