import Vue from "vue";
import VueRouter from "vue-router";

import axios from "axios";
import store from "./store";

import { routes } from "./routes";

Vue.use(VueRouter);

const scrollBehavior = (to, from, savedPosition) => {
  return { x: 0, y: 0 }
};

let router = new VueRouter({
  mode: "history",
  routes: routes,
  scrollBehavior
})

router.beforeEach((to, from, next) => {
  let serverData = JSON.parse(window.laravelDataLayer);

  if (to.name === 'post' && store.getters.getPost(to.params.post)) {
    next();
  } else if (to.name === 'home' && store.state.post_summaries.length > 0) {
    next();
  } else if (!serverData.path || to.path !== serverData.path) {
    axios.get(`/api${to.path}`).then(({ data }) => {
      store.commit('addData', { route: to.name, data });
      next();
    });
  } else {
    store.commit('addData', { route: to.name, data: serverData });
    next();
  }

  next();
})

export default router;
