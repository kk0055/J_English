
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
             <div class="order-1 md:order-2  ">
                  {{-- Routeがjapaneseの時だけ--}}
                  @if (Request::is('japanese'))
                  <div class="flex">
                  <a class="font-bold text-xl mr-5" href="japanese">
                    <i class="fas fa-redo"></i>
                  </a>  
                  <a class="md:mr-10 font-bold text-xl"  href="/">
                    <i class="fas fa-home"  ></i>
                  </a>   
                  {{-- Routeがjapaneseの時だけ--}}
                </div>
                  @else
                  <div class="flex">
                  <h3 id="time" class="time mr-5 mt-1 text-red-500">Time: 00:00</h3>
                  <a class=" md:mr-10 font-bold text-xl"  href="/">
                    <i class="fas fa-home"></i>
                  </a> 
                </div>
                  @endif
            </div>
  </div>
</nav>