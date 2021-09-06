@extends('layouts.default')

@section('content')
    @include('nav')
    <div class="w-full lg:w-4/5 lg:mx-auto">
        @include('components.session')

        {{-- <div class="container mx-auto flex justify-center m-4"> --}}
        {{-- <a href="javascript:void(0)" class="greeting"> --}}
        {{-- <img src="https://pbs.twimg.com/profile_images/1394899451018309632/2MjLsq3Y_400x400.jpg" class="rounded-full profile-image"  alt=""> --}}
        {{-- </a> --}}
        {{-- </div> --}}
        {{-- <hr class="bg-gray-300 my-12"> --}}
      
        <div class="flex flex-row  ml-3 px-2 text-2xl mt-12  md:text-3xl">
        <h1 class="font-bold">
            5秒英作文
        </h1>
        
      </div>
        <div class="flex justify-between ml-5 mt-5">
            <a href="{{ route('about') }}">
                <p id='section1' class=" px-2 pb-3 text-xl text-green-400 hover:text-green-600 underline">はじめての方はこちら </p>
            </a>
        
            @auth
                <a class="mr-5 py-2 px-2 shadow-sm text-sm bg-black font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 "
                    href="{{ route('create') }}">問題をつくる</a>
            @endauth

        </div>

        <div class="ml-5 mt-3 text-sm md:text-base">
            <h1 class=" px-2 pb-3 text-xl">瞬間英作文 トレーニング </h1>

            <p>①日本語を見て、英文を口に出す。</p>
            <p>日本語を見て5秒以内に英語に直して声に出してください。</p>
            <p> </p>
            <p>②5秒考えてわからなければ英語を確認して答え合わせ。</p>
            <p>日本語をクリックすると英文がでてきます。</p>
            <p>あまり長く考えず、分からなければすぐに答えを見てください</p>

            <p> </p>
            <p>③何度か口に出す。</p>
            <p>口になじむまで何回か声に出してみましょう。</p>
            <p>サウンドボタンを押すと英語を読み上げますが、スマホの言語設定を英語にする必要があります。</p>

            <p> </p>
            <p>④次の問題へ</p>

            <br>
            <p>
                全部で2000問以上あります。リロードもしくは
                  <a class=""  href="/">
                    <i class="fas fa-home"></i>
                  </a> 
                をクリックで問題はシャッフルされます。
                <br> 1ページ30問。1ページ5分、毎日1ページずつでも頑張りましょう。
            </p>

            <br>
            <p>重要なのは
                <span class="text-red-500 font-bold"> 「口に出すこと、 声を出すこと」</span>です。
            </p>
            <p>英語を声に出すことに慣れていきましょう
            </p>
            <br>
            <p>※ログインすると保存と投稿ができます。</p>
            <p class="mt-2">英作文をつくる練習がしたい方はこちら→<a href="{{ route('englishWord') }}"class="text-blue-400 hover:text-blue-600 underline" ><span> ガチャガチャ英単語</span></a> </p>
            <p class="text-blue-700 mt-1 underline">
                <a href="/japanese">
                    <br>英語→日本語 (English→Japanese)Ver. </a>
            </p>
            <br>
            <div class="mt-6 ">
                <form action="{{ route('item.search') }}">
                    <input type="text" name="query"
                        class="border-black shadow-md text-sm rounded-full w-64 px-5 border-solid py-2 focus:outline-none border-b focus:shadow-outline "
                        placeholder="Search" value="{{ request('query') }}">
                </form>
            </div>
            <br>
            {{-- Google Ads --}}
            @guest
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- ベーシック１ -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6877145874439358"
                    data-ad-slot="5867733062" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <br>
            @endguest
            {{-- !Google Ads --}}


        </div>
        <div class="mt-4">
            <!--Main blader-->
            @include('components.main')

        </div>


        {{-- Home Button --}}
        <div class="flex-col px-4 mt-10">
            <a class="text-2xl" href="/"><i class="ml- fas fa-home"></i>
            </a> <p class="text-xs mb-5">もう1周</p>
        </div>

  

        {{-- Google Ads --}}
        @guest
            <br>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- ベーシック１ -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6877145874439358" data-ad-slot="5867733062"
                data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <br>
        @endguest
        {{-- !Google Ads --}}


        {{-- <footer class="">
		<div class="container mx-auto flex justify-center m-4">
         <a href="https://pbs.twimg.com/profile_images/1394899451018309632/2MjLsq3Y_400x400.jpg" target='_blank'>
            <img src="https://pbs.twimg.com/profile_images/1394899451018309632/2MjLsq3Y_400x400.jpg" class="rounded-full" width="130px"  alt=""></a>
		</div>
	</footer> --}}


    </div>
    @include('components.footer')
@endsection

