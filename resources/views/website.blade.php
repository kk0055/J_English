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
           <p class="px-3 mt-3">英語学習に役立つYoutube動画やサイトを紹介します。</p>
            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <div class="flex justify-between">
           
           
        </div>
<div class="websiteList" >
<ul >
    <li class="font-sans font-bold break-normal text-gray-700 mt-3 pb-3 text-xl">Udemy</li>
    <a class="hover:text-blue-700" href="https://www.udemy.com/courses/search/?price=price-free&q=english&sort=relevance&src=ukw" target=_blank>Udemyにジャンプ</a>

    <p class="mt-3">Udemyの無料で利用できる英語の講座です。現在864個の講座が無料で受けられます。 自分の目的に合わせてつかってみてください。</p>

    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">Learn English While Sleeping</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/OazE2vXzLf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5">Learn English While Sleepingの名の通り寝るときに流しましょう。</p>
    {{-- block end --}}

    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">74 Topics - Daily Life English conversations</li>

    <iframe width="560"  height="315" src="https://www.youtube.com/embed/bAPpaP5exR0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}


    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">Daily English Conversation</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/RCseemNc2zw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}

    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">American English Passages for Reading and Listening With an American Accent</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/3w4RnhjNDkQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}

    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">58 Passages from Elementary to Advanced Level</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/mIbAPEPbptY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}   

    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">All about America English Listening Passages With Native English Speakers</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/_QhcGOSA4z0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}  

    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">Academic American English - Listening and Reading</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/MQkXa-gHSuc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}  


    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">Daily English Conversation Practice Questions and Answers - Improve Vocabulary - Sleep Learning</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/Lw3p7rgOVaA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}  

    {{-- block --}}
    <li class="font-sans font-bold break-normal text-gray-700 mt-20 pb-3 text-xl">English Conversation & Listening Practice - English Practice Listening to Naturally</li>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/9m_MxHuK_-U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mt-5"></p>
    {{-- block end --}}  
  </ul>
            
       
          </div>
    </div >
@endsection