import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import app from "./components/app.vue";
import router from "./router.js";

createApp(app).use(router).mount("#app");
