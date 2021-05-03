@extends('layouts.default')

@section('content')
    

        <!--Section container-->
        <div class="w-full mb-10 ">
            @include('nav')
            @if (session('status'))
            <div class="ml-5 text-green-500 text-2xl font-bold" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <!--Title-->
            <h1 class="font-sans font-bold break-normal text-gray-700 px-2 text-2xl mt-5  md:text-2xl">
             5秒英作文<i class="fas fa-paw ml-1"></i>
		      	</h1>
           
            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <div class="flex justify-between ">
            <h2 id='section1' class=" font-sans font-bold break-normal text-gray-700 px-2 pb-3 text-xl">使い方 <i class="far fa-cat"></i></h2>
            <a  class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" href="{{ route('create') }}">問題をつくる</a>
        </div>
         <div class="ml-5 mt-3 ">
            <p class=" pb-1">日本語を見て<span class="text-red-500">5</span> 秒以内に英語を声に出します。<br> <span class="text-red-500">5</span> 秒考えてわからなければ日本語をクリックして英語を見て声に出す。
            <br>ログインすれば問題の追加と問題の保存(<i class="far fa-heart"></i>をクリック) ができる。
            <br>分からない問題は保存して何回も見直しましょう。
            <br>自分で文章考えて追加するのもいい勉強になるでしょう。
            <br>
            <a href="website" class="hover:text-blue-500">
            サイト紹介のページ</a>ではリスニング用のYoutubeが見れます。
           
           </p>
            <p class=" mb-1">
              <br>全部で800問以上あります。リロードもしくは   
              右上の
                <i class="fas fa-home"></i>
          
              をクリックで問題はシャッフルされます。
              <br> 毎日少しずつでも頑張りましょう。
            <br>重要なのは
            <span class="text-red-500 font-bold"> 「口に出すこと, 声を出すこと」</span>です <i class="far fa-laugh-wink"></i>
          
          </p>
            <p class="text-blue-700 mt-1">
              <a href="/japanese">
              <br>英語→日本語Ver. <i class="fas fa-sad-tear"></i></a> </p>
            
           
          </div>

           <div class="mt-4">
            @foreach ($languages as  $language)
            <div class="p-5 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
          {{-- ログイン時 --}}
                @auth
               <favorite-button
               :language={{ $language->id }}
               :favorited={{ $language->favorited() ? 'true' : 'false' }}
               >  </favorite-button
               >
               
                
            <button class="question focus:outline-none">{{ $language->japanese }}
              @if($user == $language->user)
              <a href={{ route('edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>     
              @endif
            </button>
              <p class="english mt-2 ml-6 text-red-500 font-bold" >{{ $language->english }}
              
               </p> 
               @endauth
          {{-- / ログイン時 --}}
          {{-- ゲスト --}}
               @guest
               <button class="question focus:outline-none">{{ $language->japanese }} </button>
               <p class="english mt-2  text-red-500 font-bold" >{{ $language->english }}
                </p>
                @endguest   
          {{-- ゲスト --}}      
            </div>
            @endforeach
   
      {{-- {{ $languages->links() }} --}}
    </div>
    </div >
@endsection