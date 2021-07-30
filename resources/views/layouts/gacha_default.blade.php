<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ガチャガチャ英単語</title>
    <meta property="og:site_name" content="ガチャガチャ英単語" />
    <meta property="og:title" content="ガチャガチャ英単語" />
    <meta property="og:url" content="https://5seconds-en.com" />
    <meta property="og:image"
        content="https://image.freepik.com/free-photo/top-view-decoration-with-cubes-wooden-background_23-2148389005.jpg" />

    <meta name="keywords" content="瞬間英作文,スピーキング,英語,5秒英作文,TOEIC,英会話,英語学習,海外">
    <meta name="description"
        content="ガチャガチャ英単語">
    <meta property="og:description"
        content="ガチャガチャ英単語" />
    {{-- Twitter --}}
    <meta name="twitter:card" content="Summary">
    <meta name="twitter:title" content="ガチャガチャ英単語">
    <meta name="twitter:site" content="@5seconds_en" />
    <meta name="twitter:creator" content="@5seconds_en" />
    <meta name="twitter:domain" content="twitter.com/5seconds_en" />
    <meta name="twitter:description"
        content="ガチャガチャ英単語">

    <meta name="twitter:image"
        content="https://images.pexels.com/photos/5560909/pexels-photo-5560909.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">

    {{-- Search Console --}}
    <meta name="google-site-verification" content="Xja4SEPoY8ersK2goh_5cGHoLdvCDalwlmQLTV1F-io" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BT31K5VNL5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BT31K5VNL5');

    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 692470157 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-692470157"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-692470157');

    </script>
    <!-- Global Adsense-->
    <script data-ad-client="ca-pub-6877145874439358" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    {{-- <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Stick&display=swap" rel="stylesheet">


    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css?0615') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Hachi+Maru+Pop&display=swap" rel="stylesheet">

</head>
<style>
 .gacha  {
    font-family: 'Hachi Maru Pop', cursive;
    font-size: 2.5rem;
 }
 
</style>

<body class="bg-white awesomeEvent" style="font-family: 'Noto Serif JP', serif;">

    <div id="app">
        @include('components.gacha_nav')
        @include('components.session')
        @yield('content')     
        
    </div>

    <footer class="bg-white dark:bg-gray-800 pt-10 my-10 pb-8 xl:pt-8 flex items-center justify-center">
        <div class="">
                    <div class="text-center">
                        <ul>
                <li class="">
                    <div class="">
                         <ul>
                            <li class="mb-4 hover:text-gray-800 dark:hover:text-white underline transition-colors duration-200">
                                <a href="#">
                                   瞬間英作文のトレーニング「5秒英作文」
                                </a>
                            </li>
                            <li class="mb-4 hover:text-gray-800 dark:hover:text-white transition-colors duration-200">
                                <a href="#">
                                    5秒英作文
                                </a>
                            </li>
                            <li class="mb-4 hover:text-gray-800 dark:hover:text-white transition-colors duration-200">
                                <a href="#">
                                    Twitter
                                </a>
                            </li>
                            <li class="mb-4 hover:text-gray-800 dark:hover:text-white transition-colors duration-200">
                                <a href="#">
                                    LinkedIn
                                </a>
                            </li>
                        </ul>
                    </div>
        </div>
        <div class="mt-8 pt-8 flex border-t border-gray-200 max-w-xs mx-auto items-center justify-end">
        
            <a href="#">
                <svg width="20" height="20" fill="currentColor" class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z">
                    </path>
                </svg>
            </a>
      
        </div>
    </footer>
 

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js?0616') }}"></script>
    <script>
      
    </script>
</body>

</html>
