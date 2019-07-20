window._ = require('lodash');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

import Vue from 'vue';
import Routes from './routes';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faLightbulb, faMoon } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faLightbulb, faMoon);
Vue.component('font-awesome-icon', FontAwesomeIcon);


Vue.use(VueRouter);
Vue.use(Vuetify);

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',
    router: new VueRouter(Routes)
});
