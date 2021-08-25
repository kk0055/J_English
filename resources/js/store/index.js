import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    words: [],
    posts:[],
  },
  // getters:{
  //   words: state => {
  //     return  state.words
  //   }
  // },
  mutations: {
    loadJapaneseWord(state, data ) {
     state.words = data
    },
    loadJapaneseWordPost(state, data ) {
      state.posts = data
     }
  },
  actions: {
    loadJapaneseWord({commit}) {
      axios.get("/ja-words")
      .then((response) => {
        //  console.log( response)
        commit('loadJapaneseWord', response.data.data)
        console.log(response.data);
      })
      .catch(function (error) {
        console.log(error);
      });
  },
  loadJapaneseWordPost({commit}) {
    axios.get("/ja-words/post")
    .then((response) => {
      //  console.log( response)
      commit('loadJapaneseWordPost', response.data.data)
      console.log(response.data);
    })
    .catch(function (error) {
      console.log(error);
    });
},
  }

})