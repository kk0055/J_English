<template>
<span>
      <input type="hidden" id='text' data="{{ $language->id}}" value="{{ $language->english }}">
      <button class="speak" onclick="speak()">speak()</button>
    </span>
</template>

<script>

export default {
  name: 'speech',
  data () {
    return {
      isLoading: true,
      name: '',
      selectedVoice: 0,
      synth: window.speechSynthesis,
      voiceList: [],
      greetingSpeech: new window.SpeechSynthesisUtterance()
    }
  },
  components: {
    PulseLoader
  },
  mounted () {
    // wait for voices to load
    // I can't get FF to work without calling this first
    // Chrome works on the onvoiceschanged function
    this.voiceList = this.synth.getVoices()
    if (this.voiceList.length) {
      this.isLoading = false
    }
    this.synth.onvoiceschanged = () => {
      this.voiceList = this.synth.getVoices()
      // give a bit of delay to show loading screen
      // just for the sake of it, I suppose. Not the best reason
      setTimeout(() => {
        this.isLoading = false
      }, 800)
    }
    this.listenForSpeechEvents()
  },
  methods: {
    /**
     * React to speech events
     */
    listenForSpeechEvents () {
      this.greetingSpeech.onstart = () => {
        this.isLoading = true
      }
      this.greetingSpeech.onend = () => {
        this.isLoading = false
      }
    },
    /**
     * Shout at the user
     */
    greet () {
      // it should be 'craic', but it doesn't sound right
      this.greetingSpeech.text = `Hello, ${this.name}. What's the crack?`
      this.greetingSpeech.voice = this.voiceList[this.selectedVoice]
      this.synth.speak(this.greetingSpeech)
    },

       favorite(language) {
                axios.post('/favorite/'+language)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

     speak(language){
     axios.get('/sounds/'+language)
   
    console.log(text)
    var uttr = new SpeechSynthesisUtterance();
    uttr.text = text;
    
      uttr.lang = 'en-US';
    
    speechSynthesis.speak(uttr);
  //   console.log(speechSynthesis)
  }
  }
}
</script>
    }
</script>