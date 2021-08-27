<template>
  <div class="mt-10">
    <div class="text-center ">
      <h1 class="gacha mt-2 leading-8 font-extrabold tracking-tight text-gray-900 sm:text-md text-3xl ">
        ガチャガチャ日本語
      </h1>
      <p class="mt-10 text-sm md:text-md text-gray-500 lg:mx-auto w-3/4 mx-auto">
        日本語がランダムに出てくるので組み合わせて文章をつくってください。
      </p>
       <p class="mt-2 text-sm md:text-md text-gray-500 lg:mx-auto w-3/4 mx-auto">
      Combine the three words to make a sentence. and then tweet or post it!
      </p>
    </div>
    <div class="max-w-screen-md w-3/4 md:w-3/4 mt-14 mx-auto">
      <div
        class="inline-flex flex-col space-y-2 items-center h-full
           w-full  p-4 bg-blue-400 rounded-xl text-white">
        <p class="w-full text-2xl font-semibold"
          v-for="word in words"
          :key="word.id"
        >
          {{ word.word }}
        </p>
      </div>
      <div class="flex items-center flex-col justify-center mt-8">
        <div class="border rounded-lg border-blue-400 px-4">
          <button @click="loadJapaneseWord">
            <p class="text-sm font-medium leading-normal text-center py-2">
              ガチャガチャする             
            </p>
          </button>
        </div>
          <div class="border rounded-lg border-blue-400 px-4 mt-10">
          <button >
            <a  :href="'https://twitter.com/intent/tweet?text=【次の3つで文章を作ってね】%0A'+ words[0].word + '/' + words[1].word + '/'+ words[2].word +'%0A%0A&hashtags=ガチャガチャ日本語'" id="tw" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow" class="twitter-link"> 
            <p class="text-sm font-medium leading-normal text-center py-2">
              Tweetする
            </p>
            </a>
          </button>
        </div>
      </div>
 <!-- Form -->
<JPCreateForm/>
 <!-- Form -->
 <!--  -->      
 <div class="mt-4 inline-flex flex-col space-y-2 items-center h-64 w-full  p-4 rounded-xl overflow-y-auto whitespace-normal">
      <div class="w-full py-4 ">
        <p
          class="w-full text-sm font-semibold border-b-2 "
          v-for="post in posts"
          :key="post.id" >
          {{ post.post }}
        </p>
      </div>
</div>
  <!--  -->
    </div>
  </div>
</template>

<script>
 import {mapState} from 'vuex'
 import JPCreateForm from '../components/JPCreateForm'
export default {
  data: function () {
    return {
      post:{
        post:'' ,
      
      }
    };
  },
  components: {
JPCreateForm
  },
  created() {
    //actionsをdispatch
    this.$store.dispatch('loadJapaneseWord')
    this.$store.dispatch('loadJapaneseWordPost')
    
  },
  computed: {
...mapState(['words','posts']),

  },
  methods: {
 
    loadJapaneseWord() {
        this.$store.dispatch('loadJapaneseWord')
    },
    deletePost(post) {
        this.$store.dispatch('deleteJapaneseWordPost',post)
    }
  },
};
</script>