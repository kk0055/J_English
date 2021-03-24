
<nav id="header" class="w-full z-30 top-0 py-1">
     
  <div class="w-full mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
  
      <label for="menu-toggle" class="cursor-pointer md:hidden block">
          <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                 <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
         
      </label>
      <input class="hidden" type="checkbox" id="menu-toggle" />
      
      <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
        
      
          <nav class="nav">
              <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                @guest
           
                  <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('login') }}">ログイン</a></li>
                  <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('register') }}">登録</a></li>
                @endguest

              
                @auth
                {{-- <li>
                    <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href=""
             >
                     {{ $user->name }}
                 </a></li>
                <li> --}}
                <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 ログアウト
             </a></li>
             
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

                 
             <li>
                <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="my_favorites">お気に入り(保存)</a>
            </li>
             @endauth
           
              </ul>    
          </nav>
     
        
      </div>
             <div class="order-1 md:order-2 ">
          <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="/">
            <i class="fas fa-home"></i>
          </a>
     
      </div>

   
  </div>
</nav>