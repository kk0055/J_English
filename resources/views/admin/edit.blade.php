@extends('layouts.default')

@section('content')
@include('nav')
<div class="mt-1 md:mt-0 md:col-span-2 max-w-3xl mx-auto  p-16">

  <form action={{ route('admin.update',$language->id) }} method="POST" enctype="multipart/form-data">
    @csrf
    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="create-text flex flex-col w-full items-center  px-6 tracking-wide">
          編集
          </div>
        

          <div class="col-span-6">
        
            <label for="japanese" class="block text-sm font-medium text-gray-700">日本語</label>
            <input type="text" name="japanese"  class="mt-1 p-1 focus:outline-none focus:ring  block w-full  shadow-sm sm:text-sm rounded-md border border-black" placeholder="アヒルみたいな顔だね" value="{{ old('japanese',$language->japanese) }} " >
          </div>
          @error('japanese')
          <div class="text-red-500 mb-2 text-sm">
            {{ $message }}
          </div>
          @enderror

          <div class="col-span-6 mt-3">
        
            <label for="english" class="block text-sm font-medium text-gray-700">英語</label>
            <input type="text" name="english"   class="mt-1 p-1 focus:outline-none focus:ring  block w-full shadow-sm sm:text-sm rounded-md border border-black" placeholder="Your face looks like a duck." value="{{ old('english',$language->english) }}" >
          </div>
          @error('english')
          <div class="text-red-500 mb-2 text-sm">
            {{ $message }}
          </div>
          @enderror
          {{-- Body --}}

        {{-- End of Body --}}
    
        </div>
      </div>

  
    
      <div class="px-4 py-3 bg-white text-right sm:px-6">
        <button type="submit" class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" >
          Correct!!!!
        </button>
      </div>
    
         {{-- admin_auth ログインしてるとき --}}
  
    {{-- @if (Session::has('admin_auth'))
    <div class="px-4 py-3 bg-white text-right sm:px-6">
      <button type="submit" class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" >
        Submit!!
      </button>
    </div>
    @endif --}}

    </div>
  </form>
</div>
    
@endsection