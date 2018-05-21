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
  state: {
    post_summaries: [],
    posts: [],
    auth: false
  },

  mutations: {

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

  actions: {}
})
