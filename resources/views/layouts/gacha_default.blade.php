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


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js?0616') }}"></script>
    <script>
      
    </script>
</body>

</html>
