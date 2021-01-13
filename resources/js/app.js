require('./bootstrap');

window.Vue = require('vue');

Vue.component('base-nav', require('./components/UI/BaseNav').default);
Vue.component('base-header', require('./components/UI/BaseHeader').default);
Vue.component('base-panel', require('./components/UI/BasePanel').default);
Vue.component('base-input', require('./components/UI/BaseInput').default);
Vue.component('base-sidebar', require('./components/UI/BaseSidebar').default);
//
Vue.component('vue-page', require('./Website/pages/Index').default);
Vue.component('cart', require('./Website/pages/Cart/Cart-details').default);
Vue.component('vue-category', require('./Website/pages/Category').default);
Vue.component('vue-product', require('./Website/pages/Product').default);
Vue.component('vue-contact', require('./Website/pages/Contact').default); 
Vue.component('vue-product-show', require('./Website/pages/Product-details').default); 
// vue-product-show
const app = new Vue({
    el: '#app',
});
