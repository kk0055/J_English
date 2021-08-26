

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router'
import store from "./store/index.js";

window.Vue = require('vue').default;
Vue.use(VueRouter);


Vue.component('favorite-button', require('./components/Favorite.vue').default);
Vue.component('english-word', require('./views/EnglishWord.vue').default);
Vue.component('japanese-word', require('./views/JapaneseWord.vue').default);


const app = new Vue({
    el: '#app',
    store,
    router
});
