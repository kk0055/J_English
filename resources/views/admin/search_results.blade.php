@extends('layouts.default')

@section('content')
    
<div class="w-full mb-10 lg:w-4/5 lg:mx-auto">
    <div class="my-3">
        <a href="{{ url('admin/user_list') }}" class="inline-flex mb-3 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black">ユーザー 一覧</a>
    </div>

    @if (session('status'))
    <div class="ml-5 text-green-500 text-2xl font-bold" role="alert">
    {{ session('status') }}
    </div>
    @endif

    <h1 class="font-bold break-normal text-gray-700 px-2 text-2xl mt-5  md:text-2xl">
    管理画面用検索結果
   
    </h1>

    <hr class="bg-gray-300 my-12">
    @include('components.search_result')
 
 </div>

@endsection