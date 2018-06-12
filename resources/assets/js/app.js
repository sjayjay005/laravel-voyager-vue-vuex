/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// import dotenv from 'dotenv';
// dotenv.config();

import Vue from 'vue';
import Meta from 'vue-meta';
import VueAnalytics from 'vue-analytics';

import router from './router';
import store from './store';

import App from './components/App.vue';

Vue.use(Meta);

Vue.use(router);

console.log('//////////')
console.log(process.env.APP_ENV)

Vue.use(VueAnalytics, {
  id: 'UA-XXX-X',
  checkDuplicatedScript: true,
  router,
  debug : {
    enabled: true,
    sendHitTask: false
  }
});

var app = new Vue({
    el: "#app",
    render: h => h(App),
    router,
    store
});
