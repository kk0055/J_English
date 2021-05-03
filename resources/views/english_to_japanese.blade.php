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
            <h2 id='section1' class=" font-sans font-bold break-normal text-gray-700 px-2 pb-3 text-xl">
              
              英語→日本語 <i class="far fa-cat"></i></h2>
       
        </div>
   
           <div class="mt-4">
            @foreach ($languages as  $language)
            <div class="p-5 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
          {{-- ログイン時 favorite-button--}}
                @auth
               <favorite-button
               :language={{ $language->id }}
               :favorited={{ $language->favorited() ? 'true' : 'false' }}
               >  </favorite-button
               >
               @endauth
           {{-- end ログイン時 --}} 
            <button class="question focus:outline-none">{{ $language->english }}

              {{--edit  --}}
              @if($user == $language->user)
              <a href={{ route('edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>     
              @endif
                {{--edit  --}}
            </button>
              <p class="english mt-2 ml-6 text-red-500 font-bold" >{{ $language->japanese }}
               </p> 
                          
            </div>
            @endforeach
  
    </div>
    </div >
@endsection