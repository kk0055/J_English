          
           @foreach ($languages as  $language)
           <div class="p-5 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
               @auth
              <favorite-button
              :language={{ $language->id }}
              :favorited={{ $language->favorited() ? 'true' : 'false' }}
              >  </favorite-button
              >
               @endauth
               
           <button class="question focus:outline-none">{{ $language->japanese }} 
            @auth
            <a href={{ route('edit',$language->id) }}> <i class="ml-2 far fa-edit"></i></a>     
            @endauth
         
          </button>
             <p class="english mt-2 ml-6 text-red-500 font-bold" >{{ $language->english }}
              </p> 
           </div>
           @endforeach