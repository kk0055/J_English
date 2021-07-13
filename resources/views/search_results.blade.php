@extends('layouts.default')

@section('content')
    
<div class="w-full mb-10 lg:w-4/5 lg:mx-auto">
    @include('nav')

    @if (session('status'))
    <div class="ml-5 text-green-500 text-2xl font-bold" role="alert">
    {{ session('status') }}
    </div>
    @endif

    <h1 class="font-bold break-normal text-gray-700 px-2 text-2xl mt-5  md:text-2xl">
    5秒英作文
   
    </h1>

    <hr class="bg-gray-300 my-12">
    @include('components.search_result')
 
 </div>

@endsection