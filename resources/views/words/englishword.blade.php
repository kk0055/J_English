@extends('layouts.default')

@section('content')
    @include('nav')
    @include('components.session')

    <div class="max-w-screen-md md:w-3/4 mt-24 mx-auto">
      <div class="inline-flex flex-col space-y-2 items-center justify-end flex-1 h-full w-full p-4 bg-blue-400 rounded-xl">
        @foreach ($words as $word)
        <p class="w-full text-2xl font-semibold text-white"> {{ $word->word}}</p>
      @endforeach
       
   
        <div class="rounded mr-auto">
          <div class="opacity-95 border rounded-lg border-white px-4">
            <p class="m-auto inset-0 text-sm font-medium leading-normal text-center text-white py-2">Buy Now</p>
          </div>
        </div>
      </div>
   
    </div>
   

@endsection
