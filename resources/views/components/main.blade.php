
@foreach ($languages as $language)
  <div class="p-3 mt-6 lg:mt-2  rounded shadow bg-white">
    @auth
    <favorite-button
    :language={{ $language->id }}
    :favorited={{ $language->favorited() ? 'true' : 'false' }}
    >  </favorite-button >
    @endauth

    <button class="question focus:outline-none text-sm md:text-base">{{ $language->japanese }} 
    @if(Auth::user() == $language->user)
    <a href={{ route('edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>     
    @endif

    </button>
    <p class="english mt-2 ml-6 text-red-500 font-bold text-sm md:text-base" id="target">
      {{ $language->english }}  
      <ul class="mt-3">
        <li>
            <input type="hidden"  class="answer" value="{{ $language->english }}">
                <p><a href="javascript:void(0)">
                <img src="https://img.eikaiwa.dmm.com/assets/uknow/icon_translation_play.png" class="trigger" alt="" width="20px">
                </a></p>
        </li>
        </ul>
    </p> 

     

  </div>

@endforeach