import TheHomePage from "./components/views/TheHomePage"
import ThePostPage from "./components/views/ThePostPage"

export const routes = [
    { path: "/", component: TheHomePage, name: "home" },
    { path: "/post", component: TheHomePage, name: "random" },
    { path: "/post/:post", component: ThePostPage, name: "post" }
]
