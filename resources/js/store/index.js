import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    words: [],
    posts:[],
 
  },
  mutations: {
    loadJapaneseWord(state, data ) {
     state.words = data
    },
    loadJapaneseWordPost(state, data ) {
      state.posts = data
     },
     deleteJapaneseWordPost(state, post ) {
      let index = state.posts.findIndex(item => item.id === post.id)
      state.posts.splice(index, 1)
     },
  },
  actions: {
    loadJapaneseWord({commit}) {
      axios.get("/ja-words")
      .then((response) => {
    
        commit('loadJapaneseWord', response.data.data)
        // console.log(response.data);
      })
      .catch(function (error) {
        console.log(error);
      });
  },
  loadJapaneseWordPost({commit}) {
    axios.get("/ja-words/post")
    .then((response) => {
      commit('loadJapaneseWordPost', response.data.data)
      // console.log(response.data);
    })
    .catch(function (error) {
      console.log(error);
    });
},
deleteJapaneseWordPost({commit}, post) {
  axios.delete(`/ja-words/post/${post.id}`)

      .then(res => {
        console.log(res);
          if (res.data === 'ok')
              commit('deleteJapaneseWordPost', post)
      }).catch(err => {
      console.log(err)
  })
}
  }

})