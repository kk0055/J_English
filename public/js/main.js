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

          
      var voice = speechSynthesis.getVoices().find(function(voice){
        return voice.name === 'Google US English';
     
    });
    speech.voice = voice

            speechSynthesis.speak(speech);
  
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
            speech.rate = 1.1;
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

//dblclickでStarを出すイベント
const loveMe = document.querySelector('.awesomeEvent')

loveMe.addEventListener('dblclick', (e) => {
    createAwesome(e)
})

  const createAwesome = (e) => {
//   const awesomeBtn  = document.createElement('i')
//   awesomeBtn.classList.add('fas')
//   awesomeBtn.classList.add('fa-star')

  const awesomeBtn  = document.createElement('i')
  awesomeBtn.innerText = 'きみは天才★'
  awesomeBtn.classList.add('fas')
  awesomeBtn.classList.add('fa-star')
  const x = e.pageX
  const y = e.pageY

  awesomeBtn.style.top = `${y}px`
  awesomeBtn.style.left = `${x}px`

  loveMe.appendChild(awesomeBtn)
}

//Timer
if (document.getElementById('time')!==null) {
const timeEl = document.getElementById('time')
let seconds = 0
 function increaseTime() {
 
  let m = Math.floor(seconds/60)
  let s = seconds % 60

  m = m < 10 ? `0${m}` : m
  s = s < 10 ? `0${s}` : s
  timeEl.innerHTML = `Time: ${m}:${s}`
  seconds++
}
}
function startTimer() {
  setInterval(increaseTime, 1000)

}
startTimer()


// Navbar
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");
btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});