<template>
  <div class="mt-10">
  
         
    <div class="max-w-screen-md  md:w-3/4 mt-14 w-3/4 mx-auto">
      <div
        class="
          inline-flex
          flex-col
          space-y-2
          items-center
          h-full
          w-full
          p-4
          bg-blue-400
          rounded-xl
          text-white
        "
      >
        <p
          v-if="dataLoaded"
          class="w-full text-2xl font-semibold"
          v-for="word in words"
          :key="word.id"
        >
          {{ word.word }}
        </p>
      </div>
      <div class="flex items-center flex-col justify-center mt-8">
        <div class="border rounded-lg border-blue-400 px-4">
          <button @click="loadEnglishWord">
            <p class="text-sm font-medium leading-normal text-center py-2">
              ガチャガチャする
            </p>
          </button>
         
        </div>

          <div class="border rounded-lg border-blue-400 px-4 mt-10">
          <button >
            <a  :href="'https://twitter.com/intent/tweet?text=【次の3つで文章を作ってね】%0A'+ TweetWord +'%0A%0A&hashtags=ガチャガチャ英単語'" id="tw" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow" class="twitter-link"> 
            <p class="text-sm font-medium leading-normal text-center py-2">
              Tweetする
            </p>
            </a>
               </button>
        </div>
      </div>
 <!-- Form -->
<ENCreateForm/>
 <!-- Form -->
 <!-- Posts -->     
   <div class="flex items-center justify-center mt-2 mb-2">  
 <p class="text-xl ">Posts from everyone</p>
  </div> 
 <div class="mt-4 inline-flex flex-col space-y-2 items-center h-64 w-full  p-4 rounded-xl overflow-y-auto whitespace-normal">
      <div class="w-full py-4 ">
    
     <transition-group name="fade" tag="ul" class="list-group">
        <p
          class="w-full text-sm font-semibold border-b-2 "
          v-for="post in posts"
          :key="post.id" >
          {{ post.post }}
        <span class="ml-2" v-if="post.selected_words">[ {{ post.selected_words }} ] </span> 
        </p>
    </transition-group>
      </div>
</div>
  <!-- Posts -->
    </div>
  </div>
</template>
<script>
require('vue2-animate/dist/vue2-animate.min.css')
import {mapState} from 'vuex'
import ENCreateForm from '../components/ENCreateForm'
export default {
  data: function () {
    return {
      post:{
        post:'' ,
      },
      forTweetWord:'',
      dataLoaded:null
    };
  },
  components: {
ENCreateForm
  },
   created() {
    //actionsをdispatch
    this.dataLoaded = true
    this.$store.dispatch('loadEnglishWord')
    this.$store.dispatch('loadEnglishWordPost')
    
  },
  computed: {
...mapState(['words','posts']),
TweetWord() {
  let word = this.$store.state.words[0]?.word || ''
  let word1 = this.$store.state.words[1]?.word || ''
  let word2 = this.$store.state.words[2]?.word || ''
  let total = word +'/'+  word1 +'/'+  word2 
  return  this.forTweetWord = total
}
  },
  methods: {
 
    loadEnglishWord() {
        this.$store.dispatch('loadEnglishWord')
    },
    deletePost(post) {
        this.$store.dispatch('deleteEnglishWordPost',post)
    }
  },
};
</script>

<style >

</style>