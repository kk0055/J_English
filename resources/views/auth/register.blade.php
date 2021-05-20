@extends('layouts.default')

@section('content')

<div class="flex justify-center mt-20">
    
    <div class="bg-white shadow w-9/12 md:w-1/4 px-4 py-2 rounded-md border">
       
        <div class="">
                   <a href="/"> 
                    <i class="fas fa-book"></i></a>   
            <P class="text-center text-gray-700 font-bold">登録</P>
           
            <div class="mt-10">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @if (session('oauth_error'))
                    {{ session('oauth_error') }}
                    @endif
 
                      <div class="">
                        <div class="text-sm font-bold text-gray-700 tracking-wide">ニックネーム</div>
                        <input class="w-3/4 text-lg border-gray-300 focus:outline-none focus:border-indigo-500 form-control  border-b @error('name') is-invalid @enderror" type="text" name="name" placeholder="" value="{{ old('name') }}" ></div>
                    @error('name')
                    <span class="text-red-500 mt-2 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="mt-2">
                        <div class="text-sm font-bold text-gray-700 tracking-wide">メールアドレス</div>
                        <input class="w-3/4 text-lg border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="" value="{{ old('email') }}" >
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
                        <input class="w-3/4 text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('password') is-invalid @enderror" type="password"  placeholder="" value="{{ old('password') }}" name="password">
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
                        <input class="w-3/4 text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('password') is-invalid @enderror" type="password"  placeholder="" value="{{ old('password') }}" name="password_confirmation">
                    </div>

                    @error('password')
                    <span class="text-red-500 mt-2 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="mt-10">
                        <button class="bg- text-black p-2 w-full border 
                        font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-gray-200
                        shadow-lg">
                        登録
                        </button>
                    </div>
                </form>
                <div class="my-4 text-sm font-display font-semibold text-gray-700 text-center">もしくは
                    <a class="cursor-pointer hover:text-red-600 ml-2 " href="{{ 'login' }}">ログイン</a>
                </div>
           
            </div>
        </div>
    </div>
    
</div>
@endsection