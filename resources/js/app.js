

require('./bootstrap');

window.Vue = require('vue').default;



Vue.component('favorite-button', require('./components/Favorite.vue').default);


import VueRouter from 'vue-router';
import router from './router'

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router
});
