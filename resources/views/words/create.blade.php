@extends('layouts.admin')

@section('content')

<div class="form-group mt-1 md:mt-0 md:col-span-2 max-w-3xl mx-auto  p-16">
  @include('components.session') 
  <form action="{{ route('japaneseWord.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 sm:p-6">        
       
          <div class="col-span-6">
        
            <label for="word" class="block text-sm font-medium text-gray-700">日本語追加</label>
            <input type="text" name="word"  class="mt-1 p-1 focus:outline-none focus:ring  block w-full  shadow-sm sm:text-sm rounded-md border border-black" placeholder="" value="{{ old('word') }}" >
          </div>
          @error('word')
          <div class="text-red-500 mb-2 text-sm">
            {{ $message }}
          </div>
          @enderror
             


        {{-- End of Body --}}
    
        </div>
      </div>
    {{-- ログインしてるとき --}}
  
      <div class="px-4 py-3 bg-white text-right sm:px-6">
        <button type="submit" class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" >
          Submit!!
        </button>
      </div>
    </div>
  </form>
</div>

<div class="container">
    <div class="card">
  
      <div class="card-header"></div>
      <div class="card-body">
  
        <ul class="list-group">
          @foreach ($words as $word)
          <li class="list-group-item">

              {{ $word->word }}
          </li>
          @endforeach
        </ul>        
      </div>
    </div>
  </div>
@endsection