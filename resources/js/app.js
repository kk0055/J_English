

require('./bootstrap');

window.Vue = require('vue').default;



Vue.component('favorite-button', require('./components/Favorite.vue').default);
Vue.component('english-word', require('./components/EnglishWord.vue').default);
Vue.component('japanese-word', require('./components/JapaneseWord.vue').default);


const app = new Vue({
    el: '#app',
});
