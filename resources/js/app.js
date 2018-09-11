
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');
const router = require('./router');
require('./bootstrap');

const App = require('./components/App.vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component(
    'Navbar', require('./components/Navbar.vue')
);


// new Vue({
//     router,
//     render: h => h(App)
// }).$mount('#app')

new Vue({
    el: '#app'
});


