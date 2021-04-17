require('./bootstrap');

window.Vue = require('vue');

Vue.component('vue-reg', require('./Pages/Reqisterition').default);
Vue.component('vue-table', require('./Pages/Table').default);

const app = new Vue({
    el: '#app',
});
