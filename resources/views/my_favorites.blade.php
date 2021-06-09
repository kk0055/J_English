@extends('layouts.default')

@section('content')
@include('nav')   

        <!--Section container-->
<div class="w-full mb-10 ">

    <h1 class="font-bold break-normal  px-2 text-xl mt-5  md:text-2xl">
    5秒英作文<i class="fas fa-paw ml-1"></i>
    </h1>

    <hr class="bg-gray-300 my-12">

    <div class="flex justify-between">
    <h2 id='' class="font-bold break-normal  px-2 pb-3 text-xl">保存したやつ</h2>
    <a  class="mr-5 py-2 px-2 shadow-sm text-sm bg-black font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 " href="{{ route('create') }}">問題をつくる</a>
    </div>
    <p class="ml-3 mb-3">何回も見て覚えよう～<br> </p>


    @include('components.main')


    {{-- {{ $languages->links() }} --}}
</div >

@endsection