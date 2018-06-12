import axios from 'axios';
import store from './store';

/**
 * Services.js
 */

const enabledPreload = true;

/**
* GET Single Post Data and add it to Vuex
*/
const getPost = slug => {
  if (!enabledPreload) return;

  if (store.getters.getPost(slug)) return;

  axios.get(`/api/post/${slug}`).then(({ data }) => {
    store.commit('addData', { route: 'post', data });
  });
};

export { getPost };

/**
* GET Home Data and add it to Vuex
* @return {[type]} [description]
*/
const getHome = () => {
  if (!enabledPreload) return;

  if (store.state.post_summaries.length > 0) return;

  axios.get(`/api/`).then(({ data }) => {
    store.commit('addData', { route: 'home', data });
  });
};

export { getHome };

/**
* POST Contact Form
*/
const postContact = data => {
  if (!data) return -1;

  const endpoint = `/api/contact`;

  return axios.post(endpoint, data)
    .then(response => response)
    .catch(throwError);
};

export { postContact };

/**
 * [Handler] Service Error Handler
 */
function throwError(error) {
  console.log(error);
  throw error;
}

//

