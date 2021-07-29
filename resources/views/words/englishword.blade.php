@extends('layouts.default')

@section('content')
    @include('nav')
    @include('components.session')

    <div class="max-w-screen-md md:w-3/4 mt-24 mx-auto">
      <div class="inline-flex flex-col space-y-2 items-center justify-end flex-1 h-full w-full p-4 bg-blue-400 rounded-xl">
        @foreach ($words as $word)
        <p class="w-full text-2xl font-semibold text-white"> {{ $word->word}}</p>
      @endforeach
      </div>
      <div class='flex items-center justify-center mt-8'>
      <div class="border rounded-lg border-blue-400  px-4 ">
        <a href="{{ route('englishWord') }}">
        <p class="text-sm font-medium leading-normal text-center py-2">Shuffle</p></a>
      </div></div>
    </div>

 
@endsection
