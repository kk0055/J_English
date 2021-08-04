<footer class="bg-white dark:bg-gray-800 pt-10 my-10 pb-8 xl:pt-8 flex items-center justify-center">
  <div class="">
              <div class="text-center">
                  <ul>
          <li class="">
              <div class="">
                   <ul>
                      <li class="mb-4 hover:text-gray-800 dark:hover:text-white underline transition-colors duration-200">
                          <a href="/">
                             瞬間英作文のトレーニング「5秒英作文」
                          </a>
                      </li>
                      <li class="mb-4 hover:text-gray-800 dark:hover:text-white transition-colors underline duration-200">
                          <a href="{{ route('japaneseWord') }}">
                             ガチャガチャ日本語
                          </a>
                      </li>
                      <li class="mb-4 hover:text-gray-800 dark:hover:text-white transition-colors underline duration-200">
                          <a href="{{ route('englishWord') }}">
                            ガチャガチャ英単語
                          </a>
                      </li>
                
                  </ul>
              </div>
  </div>
  <div class="mt-8 pt-8 flex flex-row border-t border-gray-200 max-w-xs mx-auto justify-end">

      {{-- Twitter Button --}}
      <div class="my-5 ml-3">
        <div class="flex-col pb-5">
            <a href="https://twitter.com/5seconds_en" target='_blank'>
                <img src="https://img.icons8.com/fluent/2x/twitter.png" width="40px" alt="">
            </a>
            <p id="contact" class="text-xs mb-5">何かあれば</p>
        </div>
    </div>

  </div>
</footer>
