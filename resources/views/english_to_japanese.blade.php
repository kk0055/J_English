@extends('layouts.default_eng')

@section('content')
@include('nav')
<div class="w-full mb-10 lg:w-4/5 lg:mx-auto ">

  
  @include('components.session')   

  
  <h1 class="font-bold break-normal  px-2 text-2xl mt-5  md:text-2xl">
     2000+ Daily use Japanese Sentences
  </h1>
  <hr class="bg-gray-300 my-12">
 
  <h2 id='section1' class="font-bold break-normal  px-2 pb-3 text-xl">
  How to use</h2>

  <div class="ml-5 mt-3  text-sm md:text-base">
    <p class=" pb-1 ">Read the English sentence and guess how to say it in Japanese in <span class="text-red-500">5</span> seconds.</p>
   <p>If you have no idea, click on the English sentence. </p> 
   <p> Then, Japanese will be displayed.
     <i class="far fa-laugh-wink"></i> 
   </p>
   <p> Press the Sound button to hear the sound.It sounds stupid though...(ToT)
   </p>
   
    <p class="text-blue-700 mt-1">
    <a href="/">
    <br>日本語→英語 (Japanese→English)Ver. </a> </p>
    </div>

    {{-- Google Ads --}}
    @guest
    <br>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- ベーシック１ -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-6877145874439358"
         data-ad-slot="5867733062"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
     <br>
     @endguest
    {{-- !Google Ads --}}

    <div class="mt-4 text-sm md:text-base">
    @foreach ($languages as  $language)
    <div class="p-3 mt-6 lg:mt-2 leading-normal rounded shadow bg-white transition-colors duration-300 md:hover:bg-gray-100">
    {{-- ログイン時 favorite-button--}}
    {{-- @auth
    <favorite-button
    :language={{ $language->id }}
    :favorited={{ $language->favorited() ? 'true' : 'false' }}
    >  </favorite-button
    >
    @endauth --}}
    {{-- end ログイン時 --}} 
    <button class="question focus:outline-none w-full flex">
         <p>{{ $language->english }}</p>

    {{--edit  --}}
    @if(Auth::user() == $language->user)
    <a href={{ route('edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>     
    @endif
    {{--edit  --}}
    </button>
    <p class="english mt-2 ml-6 text-red-500 font-bold" >{{ $language->japanese }}
    </p> 
    <p class="english mt-2 ml-6 text-red-500 font-bold" id="target">
      {{ $language->english }}  

      <ul class="mt-3 flex justify-start place-items-center">
        <li>
            <input type="hidden"  class="answer" value="{{ $language->japanese }}">
                <p><a href="javascript:void(0)">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Volume_up_font_awesome.svg/768px-Volume_up_font_awesome.svg.png" class="trigger-jap"
                  alt="" width="20px">   
                </a></p>
        </li>
         {{-- ログイン時 favorite-button--}}
        @auth
        <li>   
          <favorite-button class="px-4"  
          :language={{ $language->id }}
          :favorited={{ $language->favorited() ? 'true' : 'false' }}
          >  </favorite-button >
         </li>
         @endauth
          {{--! ログイン時 favorite-button--}}
        </ul>
    </p>        
    </div>
    @endforeach
    </div>
        {{-- Home Button --}}
        <div class="flex-col px-4 mt-10">
          <a class="text-2xl" href="{{ route('japanese') }}"><i class="ml- fas fa-home"></i>
          </a> <p class="text-xs mb-5">One More Round</p>
      </div>

        {{-- Google Ads --}}
        @guest
        <br>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- ベーシック１ -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6877145874439358"
             data-ad-slot="5867733062"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
         <br>
         @endguest
        {{-- !Google Ads --}}
        @include('components.footer')
</div >
@endsection