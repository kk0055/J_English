@extends('layouts.gacha_default')

@section('content')
@include('components.gacha_ja_nav')

<div class="lg:ml-64 ml-5 mt-3">
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="text-center ">   
  <h1 class="gacha mt-2 leading-8 font-extrabold tracking-tight text-gray-900 sm:text-md text-3xl ">
    ガチャガチャ日本語
  </h1>
  <p class="mt-10 text-sm md:text-md text-gray-500 lg:mx-auto w-3/4 mx-auto">
    日本語がランダムに出てくるので組み合わせて文章をつくってください。(アカウント登録不要)
  </p>
   <p class="mt-2 text-sm md:text-md text-gray-500 lg:mx-auto w-3/4 mx-auto">
  Combine the three words to make a sentence. and then tweet or <a class="underline" href="#create">post</a>  it!
  </p>
</div>
   {{-- Google ads --}}
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   <!-- ベーシック１ -->
   <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6877145874439358"
       data-ad-slot="5867733062" data-ad-format="auto" data-full-width-responsive="true"></ins>
   <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
   </script>
   <br>
{{-- Google ads --}}      
<japanese-word/>
 
@endsection
