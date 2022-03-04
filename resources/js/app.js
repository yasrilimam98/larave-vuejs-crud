require('./bootstrap');

window.Vue = require('vue').default;

// Registrasi AXIOS
import  Form from 'vform'
import  HasError from 'vform'
import  AlertError from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);


import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    { path: '/data-user', component: require('./components/Pengguna/Data-pengguna.vue').default },
    { path: '/data-level', component: require('./components/Pengguna/Data-level.vue').default }
]

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Registrasi VueRouter

const router = new VueRouter({
    routes
})

const app = new Vue({
    el: '#app',
    router
});
