import Vue from "vue"
import VueRouter from "vue-router"

import axios from "axios"
import store from "./store"

import { routes } from "./routes"

Vue.use(VueRouter)

const scrollBehavior = (to, from, savedPosition) => {
    return { x: 0, y: 0 }
};

let router = new VueRouter({
    mode: "history",
    routes: routes,
    scrollBehavior
})

router.beforeEach((to, from, next) => {
    next()
})

export default router