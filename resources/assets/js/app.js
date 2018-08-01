
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('inbox', require('./components/client/inbox.vue'));
Vue.component('outbox', require('./components/client/outbox.vue'));
Vue.component('compose', require('./components/client/compose.vue'));
Vue.component('tracker', require('./components/client/tracker.vue'));
Vue.component('dashboard', require('./components/client/dashboard.vue'));

const app = new Vue({
    el: '#app'

   
   
});
