<template>
  <div class="mt-10">
    <div class="text-center ">
      <h1 class="gacha mt-2 leading-8 font-extrabold tracking-tight text-gray-900 sm:text-md text-3xl ">
        ガチャガチャ日本語
      </h1>
      <p class="mt-10 text-sm md:text-md text-gray-500 lg:mx-auto w-3/4 mx-auto">
        日本語がシャッフルで出てくるので組み合わせて文章を考えてツイートしてください。
      </p>
       <p class="mt-2 text-sm md:text-md text-gray-500 lg:mx-auto w-3/4 mx-auto">
      Combine the three words to make a sentence and tweet it!
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
              ガチャガチャ
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
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
   <form  @submit.prevent="formSubmit">  
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>   
					<h1 class="text-2xl mb-3 font-semibold">Make a sentence with the words</h1>
				</div>
          <p
          class="w-full  font-semibold"
          v-for="word in words"
          :key="word.id"
        >
          {{ word.word }}
        </p>
				<div class="divide-y divide-gray-200">
					<div class="text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<textarea autocomplete="off" type="text" row="6" name="write" class="py-5 peer placeholder-transparent h-15 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" v-model="post.post"  > </textarea>
							<label for="write" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"></label>
						</div>
					
						<div class="relative">
							<button class="bg-blue-500 text-white rounded-md px-2 py-1" type="submit">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </form>  
</div>
 <!-- Form -->
 <!--  -->      
 <div class="inline-flex flex-col space-y-2 items-center h-64 w-full  p-4  rounded-xl overflow-auto">
      <div class="w-full py-4 ">
        <p
          class="w-full text-sm font-semibold border-b-2"
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
export default {
  data: function () {
    return {
      words: [],
      posts:[],
      post:{
        post:'' ,
      
      }
    };
  },
  created() {
    this.loadJapaneseWord();
    this.loadJapaneseWordPost();
  },
  methods: {
    loadJapaneseWord: function () {
      axios
        .get("/ja-words")
        .then((response) => {
          //  console.log( response)
          this.words = response.data.data;
          // console.log(this.words);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    loadJapaneseWordPost() {
          axios
        .get("/ja-words/post")
        .then((response) => {
          //  console.log( response)
          this.posts = response.data.data;
          // console.log(this.posts);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
      formSubmit() {  
      //   if (this.post.length > 150 ) {
      //   window.alert('within 150 .');
      // }
          axios.post('/ja-words/post/create', this.post)
          .then(res => console.log(res))
          .catch(err => console.log(err));
           this.loadJapaneseWordPost();
           this.post.post = ''
      }
  },
};
</script>