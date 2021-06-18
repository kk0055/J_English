{{-- Home --}}
<button class="mr-5 py-2 px-2 shadow-sm text-sm bg-black font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 "
data-modal-target="#modal">問題をつくる</button>
<div class="modal" id="modal">
    <div class="modal-header">
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    @include('components.create_modal')
    </div>
  </div>
  <div id="overlay"></div>

  {{-- Modal --}}
<div class="mt-1 md:mt-0 md:col-span-2 max-w-3xl mx-auto  p-16">
  @include('components.session') 
  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="create-text flex flex-col w-full items-center px-6">
          文章を考えて追加しよう♪
          @guest
          <div class="text-red-500 text-sm" role="alert">
             <p>※ログインしてないと投稿できないよ～<br><i class="fas fa-hand-point-right"></i> 
            <a href="{{ route('login') }}" class="text-black">ログイン</a></p>
             
          </div>
         @endguest
            </div>
          <div class="col-span-6">
            <label for="japanese" class="block text-sm font-medium text-gray-700">日本語</label>
            <input type="text" name="japanese"  class="mt-1 p-1 focus:outline-none focus:ring  block w-full  shadow-sm sm:text-sm rounded-md border border-black" placeholder="アヒルみたいな顔だね" value="{{ old('japanese') }}" >
          </div>
          @error('japanese')
          <div class="text-red-500 mb-2 text-sm">
            {{ $message }}
          </div>
          @enderror

          <div class="col-span-6 mt-3">
        
            <label for="english" class="block text-sm font-medium text-gray-700">英語</label>
            <input type="text" name="english"   class="mt-1 p-1 focus:outline-none focus:ring  block w-full shadow-sm sm:text-sm rounded-md border border-black" placeholder="Your face looks like a duck." value="{{ old('english') }}" >
          </div>
          @error('english')
          <div class="text-red-500 mb-2 text-sm">
            {{ $message }}
          </div>
          @enderror

    
        </div>
      </div>
    {{-- ログインしていないとき --}}
    @guest
    <div class="px-4 py-3 bg-white text-right sm:px-6">
      <button type="submit" class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black"  onclick="loginAlert()" >
        Submit!!
      </button>
    </div>
   @endguest
    {{-- ログインしてるとき --}}
    @auth
      <div class="px-4 py-3 bg-white text-right sm:px-6">
        <button type="submit" class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" >
          Submit!!
        </button>
      </div>
      @endauth
    </div>
  </form>


