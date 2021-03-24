          
           @foreach ($languages as  $language)
           <div class="p-5 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
               @auth
              <favorite-button
              :language={{ $language->id }}
              :favorited={{ $language->favorited() ? 'true' : 'false' }}
              >  </favorite-button
              >
               @endauth
               
           <button class="question focus:outline-none">{{ $language->japanese }} </button>
             <p class="english mt-2 ml-6 text-red-500" >{{ $language->english }}
              </p> 
           </div>
           @endforeach