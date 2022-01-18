/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//components key
Vue.component('input-component',require('./components/Input.vue').default);
Vue.component('card-component', require('./components/Card.vue').default);
Vue.component('form-component', require('./components/Input.vue').default);
Vue.component('table-component', require('./components/Table.vue').default);
Vue.component('menu-component',require('./components/HomePage/Card.vue').default);
Vue.component('footer-component',require('./components/HomePage/Footer.vue').default);

//other components
Vue.component('contact-component', require('./components/HomePage/ContactUs.vue').default);
Vue.component('about-component', require('./components/HomePage/About.vue').default);
Vue.component('member-component',require('./components/Member/Form.vue').default);
Vue.component('history-component', require('./components/HomePage/Histories.vue').default);
Vue.component('admintable-component',require('./components/AdminPage/Table.vue').default);
Vue.component('membercc-component', require('./components/AdminPage/MembrocCargo.vue').default);
Vue.component('pedidoajuda-component', require('./components/AdminPage/Ajuda/PedidosPedentes.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
