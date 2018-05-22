import axios from 'axios';
import store from './store';

const enabledPreload = true;

/**
* get Single Post Data and add it to Vuex
*/
let getPost = function (slug) {
  if (!enabledPreload) return;

  if (store.getters.getPost(slug)) return;

  axios.get(`/api/post/${slug}`).then(({ data }) => {
    store.commit('addData', { route: 'post', data });
  });
};

export { getPost };

/**
* get Home Data and add it to Vuex
* @return {[type]} [description]
*/
let getHome = function () {
  if (!enabledPreload) return;

  if (store.state.post_summaries.length > 0) return;

  axios.get(`/api/`).then(({ data }) => {
    store.commit('addData', { route: 'home', data });
  });
};

export { getHome };
