
@foreach ($languages as  $language)
  <div class="p-5 mt-6 lg:mt-2 leading-normal rounded shadow bg-white">
    @auth
    <favorite-button
    :language={{ $language->id }}
    :favorited={{ $language->favorited() ? 'true' : 'false' }}
    >  </favorite-button >
    @endauth

    <button class="question focus:outline-none">{{ $language->japanese }} 
    @if(Auth::user() == $language->user)
    <a href={{ route('edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>     
    @endif

    </button>
    <p class="english mt-2 ml-6 text-red-500 font-bold" id="target">{{ $language->english }} 
      {{-- <input type="hidden" class="text" "  value="{{ $language->id}}"> --}}
      <input type="hidden" id='text' data="{{ $language->id}}" value="{{ $language->english }}">
      <button class="speak" onclick="speak()">speak()</button>
    </p> 

  </div>

@endforeach