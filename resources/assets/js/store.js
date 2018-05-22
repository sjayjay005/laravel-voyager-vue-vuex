import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import router from './router'
import axios from 'axios'
import createPersistedState from 'vuex-persistedstate';
import * as Cookies from 'js-cookie';

axios.defaults.headers.common = {
  'X-Requested-With': 'XMLHttpRequest',
  'X-CSRF-TOKEN': window.csrf_token
}

export default new Vuex.Store({
  state: {
    page: 'home',
    post_summaries: [],
    posts: [],
    auth: false
  },

  mutations: {

    updatePage(state, pageName) {
      state.page = pageName
    },

    addData(state, { route, data }) {
      if (route === 'home') {
        state.post_summaries = data.posts;
      } else if (route === 'post') {
        state.posts.push(data.post);
      }
    }

  },

  getters: {
    getPost(state) {
      return slug => state.posts.find(singlePost => slug == singlePost.slug);
    }
  },

  actions: {},

  // plugins: [createPersistedState()]
})
