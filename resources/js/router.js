import { createRouter, createWebHistory } from "vue-router";

import home from "./pages/home.vue";
import about from "./pages/about.vue";
import profile from "./pages/profile.vue";

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
    {
        path: '/profile',
        name: 'profile',
        component: profile
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;