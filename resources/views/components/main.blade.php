
@foreach ($languages as $language)
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
    <p class="english mt-2 ml-6 text-red-500 font-bold" id="target">
      {{ $language->english }}  
      <input type="hidden" 
      class="target" id="" value=" {{ $language->english }} ">
       

    </p> 

      <ul class="q-detail-curator-answer-translation">
      <li>
          <input type="hidden"  class="answer" value="{{ $language->english }}">
              <p><a href="javascript:void(0)">
              <img src="https://img.eikaiwa.dmm.com/assets/uknow/icon_translation_play.png" class="trigger" alt="">
              </a></p>
      </li>
      </ul>

  </div>

@endforeach