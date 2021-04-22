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
            <h1 class="font-sans font-bold break-normal text-gray-700 px-2 text-2xl mt-5  md:text-2xl">
              英語学習用サイトの紹介<i class="fas fa-paw ml-1"></i>
		      	</h1>
           
            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <div class="flex justify-between">
           
           
        </div>
        <div class="websiteList" >
        <ul  >
          <li class="font-sans font-bold break-normal text-gray-700  pb-3 text-xl">Udemy</li>
          <a class="hover:text-blue-700" href="https://www.udemy.com/courses/search/?price=price-free&q=english&sort=relevance&src=ukw" target=_blank>Udemyにジャンプ</a>
         <p class="mt-3">Udemyの無料で利用できる英語の講座です。現在864個の講座が無料で受けられます。 自分の目的に合わせてつかってみてください。</p>
        
        </ul>
            
       
          </div>
    </div >
@endsection