<template>
   <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12" id="create">
   <form  @submit.prevent="formSubmit">  
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>   
					<h1 class="text-2xl mb-1 font-semibold">Make a sentence with the words</h1>
          <p class="mb-3 ">※Up to 250 characters</p>
				</div>
          {{ loadSelectedWord }}
 
				<div class="divide-y divide-gray-200">
					<div class="text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<textarea autocomplete="off" type="text" row="6" name="write" class="py-5 peer placeholder-transparent h-15 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" v-model="post.post"> </textarea>
							<label for="write" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"></label>
						</div>
						<div class="relative flex">
							<button class="bg-blue-500 text-white rounded-md px-2 py-1" type="submit">Submit</button>
             <p class="ml-3">  {{ charactersLeft }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </form>  
</div>
</template>

<script>
 import {mapState} from 'vuex'
export default {
  name:"ENCreateForm",
  data() {
  return {
     post:{
        post:'' ,
        selected_words: ''   
      },
  }
  },
  computed: {
...mapState(['words']),
      charactersLeft() {
        let char = this.post.post.length,
        limit = 250;
        return (limit - char) + " / " + limit + "characters remaining";
      },
      loadSelectedWord(){
         let val = this.$store.state.words[0].word + '/' +  this.$store.state.words[1].word + '/'+  this.$store.state.words[2].word 
        //  console.log(val)
        return this.post.selected_words = val
      }
  },
  methods:{  
      formSubmit() {  
        if (this.post.post.length < 250) {
      axios.post('/en-words/post/create', this.post)
      // .then(res => console.log(res))
      .catch(err => console.log(err));
      this.$store.dispatch('loadEnglishWordPost')
        this.post.post = ''
        }
    },
  }
}
</script>