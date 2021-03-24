@extends('layouts.default')

@section('content')

<div class="flex items-center justify-center mt-3">
    
    <div class="w-2/3 lg:w-1/2 xl:max-w-screen-sm bg-white shadow px-4 py-2 rounded-md">
       
        <div class=" sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
            <a href="/"> 
                <i class="fas fa-wine-glass-alt text-2xl hover:text-red-500"></i></a>  
            <P class="text-center text-gray-700 font-display  
           
            font-bold">登録</P>
           
            <div class="mt-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @if (session('oauth_error'))
                    {{ session('oauth_error') }}
                    @endif
 
                      <div class="">
                        <div class="text-sm font-bold text-gray-700 tracking-wide">ニックネーム</div>
                        <input class="w-full text-lg border-gray-300 focus:outline-none focus:border-indigo-500 form-control  border-b @error('name') is-invalid @enderror" type="text" name="name" placeholder="" value="{{ old('name') }}" ></div>
                    @error('name')
                    <span class="text-red-500 mt-2 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="mt-2">
                        <div class="text-sm font-bold text-gray-700 tracking-wide">メールアドレス</div>
                        <input class="w-full text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="" value="{{ old('email') }}" >
                    </div>
                    @error('email')
                    <span class="text-red-500 mt-2 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                 
                    {{-- @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                   @endforeach --}}

                    <div class="mt-2">     
                        <div class="flex justify-between items-center">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">
                                パスワード
                            </div>

                        </div>
                        <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('password') is-invalid @enderror" type="password"  placeholder="" value="{{ old('password') }}" name="password">
                    </div>

                    @error('password')
                    <span class="text-red-500 mt-2 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="mt-2">     
                        <div class="flex justify-between items-center">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">
                                パスワード確認
                            </div>

                        </div>
                        <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('password') is-invalid @enderror" type="password"  placeholder="" value="{{ old('password') }}" name="password_confirmation">
                    </div>

                    @error('password')
                    <span class="text-red-500 mt-2 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="mt-10">
                        <button class="bg- text-black p-4 w-full rounded-full tracking-wide
                        font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-gray-200
                        shadow-lg">
                        登録
                        </button>
                    </div>
                </form>
                <div class="my-4 text-sm font-display font-semibold text-gray-700 text-center">
                    アカウント持ってる?
                    <a class="cursor-pointer hover:text-red-800 ml-2 text-xl" href="{{ 'login' }}">ログイン</a>
                </div>
           
            </div>
        </div>
    </div>
    
</div>
@endsection