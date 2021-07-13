   <!--Title-->
   <div class="flex justify-between ">
    <h2 id='section1' class="font-bold break-normal text-gray-700 px-2 pb-3 text-xl">検索結果 <i class="far fa-cat"></i></h2>
    </div>
        {{-- Google Ads --}}
        @guest
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- ベーシック１ -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6877145874439358"
             data-ad-slot="5867733062"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
         <br>
         @endguest
        {{-- !Google Ads --}}
        
    <div class="ml-2 mt-3 ">
    @if (!$languages->count())
    <p>検索したワードはまだ無いみたいだね！<br> 君が作成してみては！？
   
   </p>
   <a  class="inline-flex mt-5  justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black" href="{{ route('create') }}">問題をつくる</a>
  </div>

   @else
   
    @include('components.main')
 
    @endif