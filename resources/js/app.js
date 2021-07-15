require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

/***** User Component View *****/
Vue.component('user-wallet', require('./components/UserComponent/Wallet.vue').default);
Vue.component('user-gamezone', require('./components/UserComponent/GameZone.vue').default);
Vue.component('user-payment', require('./components/UserComponent/Payment.vue').default);
Vue.component('user-table-game', require('./components/UserComponent/TableGame.vue').default);
/***** User Component View *****/

const app = new Vue({
    el: '#app',
});

// new Vue({
//     el: '#app',
// });

