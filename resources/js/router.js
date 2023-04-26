import { createRouter, createWebHistory } from "vue-router";

import home from "./pages/home.vue";
import about from "./pages/about.vue";

const routes = [
    {
        path: '/dashboard',
        name: 'home',
        component: home
    },
    {
        path: '/about',
        name: 'about',
        component: about
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;