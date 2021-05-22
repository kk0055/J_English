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
            speech.pitch = 1.0;
            speech.text = message;
            speech.lang = 'en-US';
      //「イギリス人男性風の声質」のvoiceオブジェクトを取得
      var voice = speechSynthesis.getVoices().find(function(voice){
        return voice.name === 'Google US English';
    });
    speech.voice = voice

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


    $(document).ready(function(){
    $('.greeting').on('click', function(event){

        var speech = new SpeechSynthesisUtterance("Hey How are you today?");

        speech.volume = 1.0;
        speech.rate = 1.0;
        // 高さ 0-2 初期値:1
        speech.pitch = 0.9;
        // 言語 (日本語:ja-JP, アメリカ英語:en-US, イギリス英語:en-GB, 中国語:zh-CN, 韓国語:ko-KR)
        speech.lang = '';
        //「イギリス人男性風の声質」のvoiceオブジェクトを取得
        var voice = speechSynthesis.getVoices().find(function(voice){
            return voice.name === 'Google UK English Male';
        });
        speech.voice = voice
        speechSynthesis.speak(speech);
        
        // console.log( speechSynthesis.speak(speech));
        // console.log( speech.voice);
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
