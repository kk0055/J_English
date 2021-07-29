<template>
  <div class="mt-10">
    <div class="text-center">
      <h1
        class="
          gacha
          mt-2
          leading-8
          font-extrabold
          tracking-tight
          text-gray-900
          sm:text-md
          text-3xl
        "
      >
        ガチャガチャ英単語
      </h1>
      <p class="mt-6 text-sm md:text-md text-gray-500 lg:mx-auto">
        英単語がシャッフルで出てくるので組み合わせて文章を考えてツイートしてください。
      </p>
    </div>
    <div class="max-w-screen-md w-3/4 md:w-3/4 mt-20 mx-auto">
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
              Shuffle
            </p>
          </button>
         
        </div>

          <div class="border rounded-lg border-blue-400 px-4 mt-10">
          <button >
            <a href="https://twitter.com/intent/tweet?url=https://5second-en.com&text=aaaa" target="_blank">  
            <p class="text-sm font-medium leading-normal text-center py-2">
              Tweetする
            </p>
            </a>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      words: [],
    };
  },
  mounted() {
    this.loadEnglishWord();
  },
  methods: {
    loadEnglishWord: function () {
      axios
        .get("/en-words")
        .then((response) => {
          //  console.log( response)
          this.words = response.data.data;
          console.log(this.words);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>