import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import router from './router'
import axios from 'axios'

axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': window.csrf_token
}

export default new Vuex.Store({
    state: {},

    mutations: {},

    getters: {},

    actions: {}
})