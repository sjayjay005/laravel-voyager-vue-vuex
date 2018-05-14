import TheHomePage from "./components/views/TheHomePage"
import ThePostPage from "./components/views/ThePostPage"

export const routes = [
    { path: "/", component: TheHomePage, name: "home" },
    { path: "/posts/:post", component: ThePostPage, name: "post" }
]