/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter);

import Team from './components/Team.vue'
import Startup from "./components/Startup";
import Edit from "./components/Edit";
import Find_mentors from "./components/Find_mentors";
import Mentor from "./components/Mentor";

import {Form, HasError, AlertError} from 'vform'

import Swal from 'sweetalert2'

import VModal from 'vue-js-modal'
Vue.use(VModal, { dynamic: true, dynamicDefaults: { clickToClose: false } });

// CommonJS
window.Swal = Swal;
//Toast
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.Toast = Toast;

window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

let routes = [
    {path: '/home/team', component: Team},
    {path: '/home', component: Startup},
    {path: '/home/edit', component: Edit},
    {path: '/mentor/home', component: Mentor},
    {path: '/home/mentors', component: Find_mentors},
];

let router = new VueRouter({
    mode: 'history',
    routes
});


window.Fire = new Vue();
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
Vue.component('mentor-registration', require('./components/Registration.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
