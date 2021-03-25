<!DOCTYPE html>
<html lang="ja" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5秒英作文</title>
    <meta property="og:site_name" content="5秒英作文" />
    <meta name="keywords" content="瞬間英作文,スピーキング,英語,5秒英作文,TOEIC,英会話,英語学習">
    <meta name="description" content="5秒英作文。日本語を見て5秒以内に英語を発音しましょう。英語学習に役立つでしょう。">
    <meta property="og:url" content="https://5seconds-en.com/" />
    <meta property="og:image" content="https://image.freepik.com/free-photo/top-view-decoration-with-cubes-wooden-background_23-2148389005.jpg" />
   
    {{-- Search Console --}}
    <meta name="google-site-verification" content="Xja4SEPoY8ersK2goh_5cGHoLdvCDalwlmQLTV1F-io" />

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Stick&display=swap" rel="stylesheet">
 
  {{-- fontawesome --}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   

    <style>
       @import url('https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap');
       @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
       @import url('https://fonts.googleapis.com/css2?family=Stick&display=swap');
       @import url('https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap');

       body {
            font-family: 'RocknRoll', sans-serif;
        }
       
       .main-title{
        font-family: 'New Tegomin', serif;
       }

        .nav{
          font-family: 'Stick', sans-serif;
       }
       #menu-toggle:checked + #menu {
            display: block;
        }
        .max-h-64 {
            max-height: 16rem;
        }
        /*Quick overrides of the form input as using the CDN version*/
        .form-input,
        .form-textarea,
        .form-select,
        .form-multiselect {
            background-color: #edf2f7;
        }
        .english{
            display:none;
        }

        .englishShow{
            display:block;
        }
    </style>

</head>

<body class="bg-gray-100 text-gray-900 tracking-wider  ">
  <div id="app">
 
  @yield('content')
</div>

<script>
  $(document).ready(function(){
  $(".question").on("click", function() {
  $(this).next().slideToggle(200);
  });
  });
   </script>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>