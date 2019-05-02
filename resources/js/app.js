

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

import router from './routes';

import App from './components/App';

import zh_CN from './locale/zh_CN';

import VeeValidate, { Validator } from 'vee-validate';

Vue.use(VueRouter);

Vue.use(VeeValidate);

Validator.localize('zh_CN', zh_CN);

Vue.component('app', App);


new Vue({
    el: '#app',
    router
});
