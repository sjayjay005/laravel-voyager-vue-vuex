import TheHomePage from "./components/views/TheHomePage"
import ThePostPage from "./components/views/ThePostPage"
import The404Page from "./components/views/The404Page"

export const routes = [
    { path: "/", component: TheHomePage, name: "home" },
    { path: "/post", component: TheHomePage, name: "random" },
    { path: "/post/:post", component: ThePostPage, name: "post" },
    { path: "*", component: The404Page }
]
