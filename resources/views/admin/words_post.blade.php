@extends('layouts.admin')

@section('content')

  {{-- Words展開 --}}
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($japanese as $word)
                <li class="list-group-item flex justify-between place-items-center text-sm">
                        {{ $word->post }}
                         [ {{ $word->selected_words }} ]

                        <form method="POST" action="{{ route('JapaneseWordPostDelete', $word->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class=""><i class="fa fa-trash" aria-hidden="true"></i> </button>
                        </form>
                    </li>
                @endforeach
                {{ $japanese->links() }}
            </div>
            <div class="col"> 
                @foreach ($english as $word)
                    <li class="list-group-item flex justify-between place-items-center">
                      {{ $word->post }}
                     [ {{ $word->selected_words }} ]
                        <form method="POST" action="{{ route('EnglishWordPostDelete', $word->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class=""><i class="fa fa-trash" aria-hidden="true"></i> </button>
                        </form>
                    </li>
                @endforeach
                {{ $english->links() }}
            </div>   
        </div>
    </div>
@endsection
