@extends('layouts.default')

@section('content')
    

        <!--Section container-->
        <div class="w-full mb-10 ">
            @include('nav')
            {{-- @if (Session::has('info'))
            <div class="text-red-500" role="alert">
                {{ Session::get('info') }}
            </div>
            @endif --}}
            <!--Title-->
            <h1 class="font-sans font-bold break-normal text-gray-700 px-2 text-xl mt-5  md:text-2xl">
                5秒英作文<i class="fas fa-paw ml-1"></i>
		      	</h1>
           
            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <div class="flex justify-between">
            <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-3 text-xl">ルール</h2>
            <a  class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" href="{{ route('create') }}">問題をつくる</a>
        </div>
            <p class="ml-3">日本語を見て5秒以内に英語を声に出す。<br> 5秒考えてわからなければ日本語をクリックして英語を見て声に出す。
            <br>ログインすれば問題の追加と問題の保存(<i class="far fa-heart"></i>をクリック) ができるよー。
            <br>`リロードで問題はシャッフルされるよー。<span class="text-blue-700 font-bold">声出してねー。大事だよー。</span></p>
            

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
               
                
            <button class="question focus:outline-none">{{ $language->japanese }} </button>
              <p class="english mt-2 ml-6 text-red-500" >{{ $language->english }}
               </p> 
               @endauth
          {{-- / ログイン時 --}}
          {{-- ゲスト --}}
               @guest
               <button class="question focus:outline-none">{{ $language->japanese }} </button>
               <p class="english mt-2  text-red-500" >{{ $language->english }}
                </p>
                @endguest   
          {{-- ゲスト --}}      
            </div>
            @endforeach
   
      {{-- {{ $languages->links() }} --}}
    </div>
    </div >
@endsection