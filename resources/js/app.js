/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
require('alpinejs');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('global-home', require('./components/GlobalHome.vue').default);
Vue.component('admin-notification', require('./components/AdminNotification.vue').default);
Vue.component('posts', require('./components/Posts').default);
Vue.component('post-details', require('./components/PostDetails.vue').default);
Vue.component('categories', require('./components/Categories').default);
Vue.component('CategoryPosts', require('./components/CategoryPosts').default);
Vue.component('pagination', require('laravel-vue-pagination'));

/*Vue.component('customer-service', require('./components/CustomerService').default);
Vue.component('global-customer', require('./components/GlobalCustomer').default);

/!**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 *!/
*/
import { routes } from './routes/routes.js';

const router = new VueRouter({
    routes,
});

new Vue({
    router,
    el: '#app',
});

