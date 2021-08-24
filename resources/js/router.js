import Router from 'vue-router'
import JapaneseWord from './components/JapaneseWord.vue'
import About from './views/About.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/ja-words/gacha',
      name: 'JapaneseWord',
      component: JapaneseWord
    },
    {
      path: '/about',
      name: 'About',
      component: About
    },
  ]
});


