<template>
  <div>

    <h1>Hey</h1>
      <div class="max-w-screen-md w-3/4 md:w-3/4 mt-24 mx-auto">
    <div class="inline-flex flex-col space-y-2 items-center  h-full w-full p-4 bg-blue-400 rounded-xl text-white">
     
      <p class="w-full text-2xl font-semibold" v-for="word in words" :key='word.id'>
      {{ word.word }}
       </p>
    </div>
    <div class='flex items-center justify-center mt-8'>
    <div class="border rounded-lg border-blue-400  px-4 ">
      <button @click="loadEnglishWord">
      <p class="text-sm font-medium leading-normal text-center py-2">Shuffle</p></button>
    </div></div>
  </div>
  </div>
</template>

<script>
    export default {
        data: function () {
            return {
                words: [],
            }
        },
        mounted() {
            this.loadEnglishWord();
        },
        methods: {
            loadEnglishWord: function () {
                axios.get('/words')
                    .then((response) => {
                            //  console.log( response)
                        this.words = response.data.data;
                  console.log(this.words );
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
    
        }
    }
</script>