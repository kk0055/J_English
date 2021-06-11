
@foreach ($languages as $language)
  <div class="p-3 mt-6 lg:mt-2  rounded shadow bg-white transition-colors duration-300 md:hover:bg-gray-100 ">
  
    <button class="question focus:outline-none text-sm w-full flex items-start md:text-base">
    <p>{{ $language->japanese }} </p>
    @if(Auth::user() == $language->user )
    <a href={{ route('edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>     
    @elseif(Request::is('admin/search'))
    <a href={{ route('admin.edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>    
    @endif
    </button>
    
    <p class="english mt-2 ml-6 text-red-500 font-black	text-sm md:text-base" id="target">
      {{ $language->english }}  

      <ul class="mt-3 flex justify-start place-items-center">
        <li>
            <input type="hidden"  class="answer" value="{{ $language->english }}">
                <p><a href="javascript:void(0)">
                <img src="https://img.eikaiwa.dmm.com/assets/uknow/icon_translation_play.png" class="trigger" alt="" width="20px">
                </a></p>
        </li>
        <li>   
          @auth
          <favorite-button class="px-4"  
          :language={{ $language->id }}
          :favorited={{ $language->favorited() ? 'true' : 'false' }}
          >  </favorite-button >
          @endauth
         </li>
        </ul>
    </p> 

</div>

@endforeach