@extends('layouts.default')

@section('content')

<div class="flex justify-center mt-20">
    
    <div class=" bg-white shadow w-9/12 md:w-1/4 px-4 py-2 rounded-md border">
       
        @if (session('oauth_error'))
    {{ session('oauth_error') }}
        @endif
            <a href="/"> 
                <i class="fas fa-book"></i></a>  
            <P class="text-center text-gray-700 font-bold ">ログイン</P>
         
            <div class="mt-10 ">
                     <form method="POST" action="{{ route('login') }}">
                    @csrf
                                  
                    @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                      @enderror

                    <div class="">
                        <p class="text-sm font-bold text-gray-700 tracking-wide">メールアドレス</p>
                        <input class="w-3/4 text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="" value="{{ old('email') }}" >
                    </div>

                                
                    <div class="mt-4">
                        @error('password')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-bold text-gray-700 tracking-wide">
                                パスワード
                            </p>
                            
                        </div>
                        <input class="w-3/4 text-lg py-2  focus:outline-none  border-b focus:border-indigo-500 form-control @error('password') is-invalid @enderror" type="password"  placeholder="" value="{{ old('password') }}" name="password">
                    </div>

                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="mt-10">
                        <button class="text-black p-2 w-full 
                        font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-gray-200 border
                        shadow-lg">
                        ログイン
                        </button>
                    </div>
                    </div>
             
                </form>
                <div class="mt-2 text-sm  my-4">
                  <a class="cursor-pointer ml-2 border-b text-gray-500 hover:text-red-600" href="{{ 'register' }}">アカウントをお持ちではない方はこちら</a>
                </div>
           
                
                <div class="mb-2  ml-2">
                    <div class="mb-3">
                    <a href="{{ url('/login/twitter') }}"  class="twitter-login px-2 text-white  
                    font-display focus:outline-none focus:shadow-outline 
                    shadow-lg"> 
                    <i class="fab fa-twitter mr-1"></i>Twitterでログイン
                        </a>
                    </div>
                 {{-- テストボタン --}}
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <input class="" type="hidden" name="email" 
                        value="test1@test.com" >
                    </div>
                        <input class="" type="hidden"  value="12345678910" name="password">
                  
                    <div class=" my-2">
                        <button class="bg-black px-2 text-white  
                        font-display focus:outline-none focus:shadow-outline 
                        shadow-lg"> ゲストとしてログイン
                        </button>
                    </div>  
                </form>
                <div class="mt-2">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link text-sm hover:text-red-600" href="{{ route('password.request') }}">
                        {{ __('パスワードをお忘れの方はこちら') }}
                    </a>
                @endif
            </div>
        
            </div>
         
            {{-- テストボタン --}}
            </div>
          
            </div>
          
     
  

@endsection