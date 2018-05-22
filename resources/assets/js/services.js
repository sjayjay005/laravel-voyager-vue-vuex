import axios from 'axios';

import store from './store';

let getPost = function (slug) {

  if (store.getters.getPost(slug)) return;

  axios.get(`/api/post/${slug}`).then(({ data }) => {
    store.commit('addData', { route: 'post', data });
  });
};

export {getPost}


let getHome = function () {

  if (store.state.post_summaries.length > 0) return;

  axios.get(`/api/`).then(({ data }) => {
    store.commit('addData', { route: 'home', data });
  });
};

export {getHome}
