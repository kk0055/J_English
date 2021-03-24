<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>瞬間英作文</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--Replace with your tailwind.css once created-->
    <style>
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
        .myDiv{
            display:none;
        }

        .myDIVShow{
            display:block;
        }
    </style>

</head>

<body class="bg-gray-100 text-gray-900 tracking-wider  ">


        <!--Section container-->
        <section class="w-full ">

            <!--Title-->
            <h1 class="font-sans font-bold break-normal text-gray-700 px-2 text-xl mt-5  md:text-2xl">
			       瞬間英作文
		      	</h1>

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 id='section1' class="font-sans font-bold break-normal text-gray-700 px-2 pb-3 text-xl">ルール</h2>
            <p class="ml-3">日本語を見て5秒以内に英語を声に出す。<br> 5秒考えてわからなければ日本語をクリックして英語を見る。</p>

            <!--Card-->
            @foreach ($languages as $key => $language)
            <div class="p-5 mt-6 lg:mt-0 leading-normal rounded shadow bg-white">
            
             
              <button class="question"> {{ $key  }}. {{ $language->japanese }} </button>
              <p class="myDiv question" >{{ $language->english }}
               </p> 
            </div>
            @endforeach
            <!--/Card-->
      <!--/container-->
    </section >

    <script>


$(document).ready(function(){
$(".question").on("click", function() {
$(this).next().slideToggle(200);
});
});
        </script>
        
</body>
</html>