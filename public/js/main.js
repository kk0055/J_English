$(document).ready(function(){
  $(".question").on("click", function() {
  $(this).next().slideToggle(200);
  });
  });


  $(document).ready(function(){
        // window.utterances = [];

        $('.trigger').on('click', function(event){

            var trigger = $(this);
            var parent = $(this).parents('li');
            var answer = $('.answer', parent);
            var message = $(answer).val();
            // message = replaceMessage(message);
         
            var speech = new SpeechSynthesisUtterance();

            speech.volume = 1.0;
            speech.rate = 0.9;
            speech.pitch = 1.8;
            speech.text = message;
            speech.lang = 'en-US';


            // utterances.push(speech);

            speechSynthesis.speak(speech);
         
            // console.log( speechSynthesis.speak(speech));
            // console.log( speech);
        });
    });

    $(document).ready(function(){
        // window.utterances = [];

        // var click_count = 0;
        $('.trigger-jap').on('click', function(event){

            var trigger = $(this);
            var parent = $(this).parents('li');
            var answer = $('.answer', parent);
            var message = $(answer).val();
            // message = replaceMessage(message);
         
            var speech = new SpeechSynthesisUtterance();

            speech.volume = 1.0;
            speech.rate = 1.0;
            speech.pitch = 1.0;
            speech.text = message;
            speech.lang = 'ja-JP';


            // utterances.push(speech);

            speechSynthesis.speak(speech);
         
            // console.log( speechSynthesis.speak(speech));
            // console.log( speech);
        });
    });




function replaceMessage(mes) {

    var target;
    var list = [
        '\\(1\\)',
        '\\(2\\)',
        '\\(3\\)',
        '\\( 1 \\)',
        '\\( 2 \\)',
        '\\( 3 \\)',
        '_',
        '\/',
        '（1）',
        '（2）',
        '（3）',
        '（ 1 ）',
        '（ 2 ）',
        '（ 3 ）',
        '[^\x01-\x7E]',
    ];

    $.each(list, function(i, val) {

        target = new RegExp(val, "g");
        if (mes.match(target)) {
            mes = mes.replace(target, ' ');
        }
    });

    return mes;
   
}
