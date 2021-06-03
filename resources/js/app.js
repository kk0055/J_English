

require('./bootstrap');

window.Vue = require('vue').default;



Vue.component('favorite-button', require('./components/Favorite.vue').default);




const app = new Vue({
    el: '#app',
});
