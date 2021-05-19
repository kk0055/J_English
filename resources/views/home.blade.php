@extends('layouts.default')

@section('content')
    
<div class="w-full mb-10 container">
    @include('nav')

    @if (session('status'))
    <div class="ml-5 text-green-500 text-2xl font-bold" role="alert">
    {{ session('status') }}
    </div>
    @endif
   <div class="flex ">
      {{-- <img src="https://pbs.twimg.com/profile_images/1394899451018309632/2MjLsq3Y_400x400.jpg" class="rounded-full " width="80px"  alt=""> --}}
    <h1 class="font-sans font-bold break-normal text-gray-700 px-2 text-2xl mt-5  md:text-2xl">
    5秒英作文
    <i class="fas fa-paw ml-1"></i>
    </h1>
   
  
   </div>

    <hr class="bg-gray-300 my-12">

    <!--Title-->
    <div class="flex justify-between ">
    <h2 id='section1' class=" font-sans font-bold break-normal text-gray-700 px-2 pb-3 text-xl">使い方 <i class="far fa-cat"></i></h2>

    <a  class="inline-flex  justify-center py-2 px-2 border border-transparent shadow-sm text-sm bg-black font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 " href="{{ route('create') }}">問題をつくる</a>
    </div>
    
    <div class="ml-5 mt-3 text-sm md:text-base">
    <p>①日本語を見て、英文を口に出す。</p>
    <p>日本語を見て5秒以内に英語を声に出してください。</p>
    <p> </p>
    <p>②5秒考えてわからなければ英語を確認して答え合わせ。</p>
    <p>あまり長く考えず、分からなければすぐに答えを見てください</p>
    
    <p> </p>
    <p>③何度か口に出す。</p>
    <p>口になじむまで何回か声に出してみましょう。</p>
    <p> </p>
    <p>④次の問題へ</p>

    </p>
    <p class=" mb-1">
    <br>全部で1000問以上あります。リロードもしくは   
    右上の
    <i class="fas fa-home"></i>

    をクリックで問題はシャッフルされます。
    <br> 1ページ30問。毎日1ページずつでも頑張りましょう。
    <br>重要なのは
    <span class="text-red-500 font-bold"> 「口に出すこと, 声を出すこと」</span>です <i class="far fa-laugh-wink"></i>

    </p>

    
    <p class="text-blue-700 mt-1">
    <a href="/japanese">
    <br>英語→日本語 (English→Japanese)Ver. </a> </p>
    
    <div class="mt-6">
    <form action="{{ route('item.search') }}">
    <input type="text" name="query" class=" text-sm rounded-full w-64 px-4  py-1 focus:outline-none border-b focus:shadow-outline " placeholder=" Search">
    </form>
    </div >
    </div>
    <div class="mt-4">

    @include('components.main')

    </div>

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mt-10 mb-8 mx-4">


		<!--Twitter-->
		<div class="container px-4 ">
      <a href="https://twitter.com/5seconds_en" target=_blank>
      <img src="https://img.icons8.com/fluent/2x/twitter.png" width="40px" alt="">
      </a>

		</div>
         
		<!-- /Twitter-->
   

	<footer class="">
		<div class="container max-w-4xl mx-auto flex py-8">

		</div>
	</footer>
</div >
@endsection