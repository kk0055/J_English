<template>
  <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
   <form  @submit.prevent="formSubmit">  
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div class="mb-3">
					<h1 class="text-2xl font-semibold">Make sentences with the words</h1>
				</div>
          <p class="w-full font-semibold"
          
        >
          {{ word.word }}
        </p>
				<div class="divide-y divide-gray-200">
					<div class="text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<textarea autocomplete="off" rows="3"type="text" name="write" class="py-5 peer placeholder-transparent h-15 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" v-model="post.post"  > </textarea>
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
</template>

<script>
export default {
  name:"CreateForm",
  data() {
  return {
     post:{
        post:'' ,
      }
  }
  },
  props: {
    word: Object,
    post: Object
  },
  methods:{
         formSubmit() {  
          axios.post('/ja-words/post/create', this.post)
          .then(res => console.log(res))
          .catch(err => console.log(err));
         this.loadJapaneseWordPost();
           this.post.post = ''
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
  }
}
</script>