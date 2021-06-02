@extends('layouts.default')

@section('content')
@include('nav')   

        <!--Section container-->
        <div class="w-full mb-10 ">
            @if (session('status'))
            <div class="ml-5 text-green-500 text-2xl font-bold" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <!--Title-->
            <h1 class="font-bold break-normal px-2 text-xl mt-5  md:text-2xl">
                5秒英作文
		      	</h1>
           
            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <div class="flex justify-between">
            <h2 id='section1' class="font-bold break-normal px-2 pb-3 text-xl">自分で投稿したやつ</h2>
            <a  class="mr-5 py-2 px-2 shadow-sm text-sm bg-black font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 " href="{{ route('create') }}">問題をつくる</a>
        </div>
            <p class="ml-3 mb-3"><br> {{ $count }} 件の投稿</p>
            

      @include('components.main')
       
    
      {{ $languages->links() }}
    </div >


        
@endsection