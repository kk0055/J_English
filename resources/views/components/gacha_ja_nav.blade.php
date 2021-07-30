

<div>
  <nav class="bg-white dark:bg-gray-800  ">
      <div class="max-w-7xl mx-auto px-8">
          <div class="flex items-center justify-between h-16">
              <div class=" flex items-center">
                  <a class="flex-shrink-0" href="{{ route('japaneseWord') }}">
                    <i class="far fa-flushed text-4xl" ></i>
                  </a>
                  <div class="hidden md:block">
                      <div class="ml-10 flex items-baseline space-x-4">
        
                          <a class="hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium underline" href="{{ route('englishWord') }}">ガチャガチャ英単語</a>
                          </a>
                          <a class=" dark:text-white  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium underline" href="/">5秒英作文</a>
                 
                      </div>
                  </div>
              </div>
              <div class="block">
                  <div class="ml-4 flex items-center md:ml-6">
                  </div>
              </div>

          </div>
      </div>
      <div class="md:hidden">
          <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
              <a class="text-gray-600 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium underline" href="{{ route('englishWord') }}">ガチャガチャ英単語</a>
              <a class="text-gray-600 dark:text-white block px-3 py-2 rounded-md text-base font-medium underline" href="/">5秒英作文</a>
          </div>
      </div>
  </nav>
</div>
