@extends('layouts.admin')

@section('content')

    <div class="form-group mt-1 md:mt-0 md:col-span-2 max-w-3xl mx-auto  p-16">
        <div class="my-4">
            @include('components.session')
        </div>
        <a class="" href="{{ route('japaneseWord') }}">
            <i class="far fa-flushed text-4xl mb-2"></i>
        </a>
        <form action="{{ route('japaneseWord.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="shadow border-1 overflow-hidden sm:rounded-md">

                <div class="px-4 py-5 sm:p-6">

                    <div class="col-span-6">

                        <label for="word" class="block text-sm font-medium text-gray-700">Add Japanese</label>
                        <input type="text" name="word"
                            class="mt-1 p-1 focus:outline-none focus:ring  block w-full  shadow-sm sm:text-sm rounded-md border border-black"
                            placeholder="" value="{{ old('word') }}">
                    </div>
                    @error('word')
                        <div class="text-red-500 mb-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black">
                    Submit!!
                </button>
            </div>
        </form>
    </div>
    {{-- ! 日本語追加 --}}

    {{-- 英語追加 --}}
    <div class="form-group mt-1 md:mt-0 md:col-span-2 max-w-3xl mx-auto  p-16">
        <a class="" href="{{ route('englishWord') }}">
            <i class="fas fa-flushed text-4xl mb-2"></i>
        </a>
        <form action="{{ route('englishWord.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="shadow border-1 overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 sm:p-6">
                    <div class="col-span-6">
                        <label for="word" class="block text-sm font-medium text-gray-700">Add English</label>
                        <input type="text" name="word"
                            class="mt-1 p-1 focus:outline-none focus:ring  block w-full  shadow-sm sm:text-sm rounded-md border border-black"
                            placeholder="" value="{{ old('word') }}">
                    </div>
                    @error('word')
                        <div class="text-red-500 mb-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black">
                    Submit!!
                </button>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($japanese as $word)
                <li class="list-group-item flex justify-between place-items-center">
                        {{ $word->word }}
                        <form method="POST" action="{{ route('japaneseWord.destroy', $word->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class=""><i class="fa fa-trash" aria-hidden="true"></i> </button>
                        </form>
                    </li>
                @endforeach
            </div>
            <div class="col"> 
                @foreach ($english as $word)
                    <li class="list-group-item flex justify-between place-items-center">
                        {{ $word->word }}
                        <form method="POST" action="{{ route('englishWord.destroy', $word->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class=""><i class="fa fa-trash" aria-hidden="true"></i> </button>
                        </form>
                    </li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
