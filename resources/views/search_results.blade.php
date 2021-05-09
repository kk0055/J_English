@extends('layouts.default')

@section('content')
    
<div class="w-full mb-10 ">
    @include('nav')

    @if (session('status'))
    <div class="ml-5 text-green-500 text-2xl font-bold" role="alert">
    {{ session('status') }}
    </div>
    @endif

    <h1 class="font-sans font-bold break-normal text-gray-700 px-2 text-2xl mt-5  md:text-2xl">
    5秒英作文<i class="fas fa-paw ml-1"></i>
   
    </h1>

    <hr class="bg-gray-300 my-12">

    <!--Title-->
    <div class="flex justify-between ">
    <h2 id='section1' class=" font-sans font-bold break-normal text-gray-700 px-2 pb-3 text-xl">検索結果 <i class="far fa-cat"></i></h2>
  
    </div>
    <div class=" mt-3 ">
    @if (!$languages->count())
    <p>検索した飲みワードはまだ無いみたいだね！<br> 君が作成してみては！？
      
   </p>
   <a  class="inline-flex mt-5  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" href="{{ route('create') }}">問題をつくる</a>
  </div>
</div >
   @else

    @include('components.main')

    @endif
    </div>

@endsection